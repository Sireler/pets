<?php

namespace App\Http\Controllers;

use App\BreedType;
use App\ColorType;
use App\EarType;
use App\GenderType;
use App\Pet;
use App\PetMovement;
use App\PetShelter;
use App\PetType;
use App\Role\UserRole;
use App\Shelter;
use App\TailType;
use App\User;
use App\WoolType;
use Carbon\Carbon;
use Illuminate\Http\Request;

use PHPStamp\Templator;
use PHPStamp\Document\WordDocument;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        /** @var User $user */
        $user = $request->user();

        $sheltersCount = Shelter::count();
        $petsCount = Pet::count();

        //$user->addRole(UserRole::ROLE_SUPPORT);
        //$user->save();

        return view('home', [
            'sheltersCount' => $sheltersCount,
            'petsCount' => $petsCount,
            'user' => $user
        ]);
    }

    /**
     * Список приютов
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function shelters(Request $request)
    {
        $shelters = Shelter::all();

        return view('home.shelters', [
            'shelters' => $shelters
        ]);
    }

    /**
     * Просмотр животных в приюте
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function shelter(Request $request, $id)
    {
        $shelter = Shelter::where('id', $id)->first();

        $petShelter = PetShelter::where('shelter_id', $shelter->id)->with('pet')->get();

        return view('home.shelter', [
            'shelter' => $shelter,
            'petShelter' => $petShelter
        ]);
    }

    /**
     * Карточка животного
     *
     * @param Request $request
     * @param $shelterId
     * @param $petId
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function shelterPetCard(Request $request, $shelterId, $petId)
    {
        $pet = Pet::where('id', $petId)->first();
        $petTypes = PetType::all();
        $petBreeds = BreedType::all();
        $petGenders = GenderType::all();
        $petColors = ColorType::all();
        $petEars = EarType::all();
        $petFurs = WoolType::all();
        $petTails = TailType::all();

        return view('home.pet_card', [
            'petTypes' => $petTypes,
            'petBreeds' => $petBreeds,
            'petGenders' => $petGenders,
            'petColors' => $petColors,
            'petEars' => $petEars,
            'petFurs' => $petFurs,
            'petTails' => $petTails,
            'pet' => $pet
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function updatePet(Request $request, $id)
    {
        $data = $request->except('_token');
        $data['weight'] = (float) $data['weight'];

        $pet = Pet::where('id', $id)->first();

        $pet->update($data);

        return redirect()->back();
    }

    public function addPet(Request $request, $id)
    {
        $shelter = Shelter::where('id', $id)->first();

        $petTypes = PetType::all();
        $petBreeds = BreedType::all();
        $petGenders = GenderType::all();
        $petColors = ColorType::all();
        $petEars = EarType::all();
        $petFurs = WoolType::all();
        $petTails = TailType::all();

        return view('home.pet_add', [
            'shelter' => $shelter,
            'petTypes' => $petTypes,
            'petBreeds' => $petBreeds,
            'petGenders' => $petGenders,
            'petColors' => $petColors,
            'petEars' => $petEars,
            'petFurs' => $petFurs,
            'petTails' => $petTails
        ]);
    }

    public function addPetPost(Request $request, $id)
    {
        $data = $request->except('_token');
        $data['card_number'] .= 'Z';
        $data['special_signs'] = 'нет';
        $data['enclosure_number'] = 1;

        $pet = Pet::create($data);

        // TODO: ДОБАВИТЬ ЗАПИСЬ О ЖИВОТНОМ
        $sh = Shelter::where('id', $id)->first();
        $shelter = PetShelter::create([
            'pet_id' => $pet->id,
            'shelter_id' => $sh->id,
            'address' => $sh->address,
            'shelter_name' => $sh->organization->name, // наименование организации
            'shelter_owner_name' => 'Игнатов А.В.',
            'animal_watcher_name' => 'Работник 1'
        ]);

        return redirect()->back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function petsRegister(Request $request)
    {
        $pets = Pet::all();

        return view('home.pets', [
            'pets' => $pets
        ]);
    }


    /**
     * @return \Illuminate\Http\RedirectResponse
     * @throws \PHPStamp\Exception\InvalidArgumentException
     */
    public function generatePetReport(Request $request, $id)
    {
        $cachePath = public_path();
        $templator = new Templator($cachePath);

        $documentPath = public_path('template_4.docx');
        $document = new WordDocument($documentPath);

        $shelter = Shelter::where('id', $id)->first();

        $petShelter = PetShelter::where('shelter_id', $shelter->id)->with('pet')->get();

        $data = [];

        $number = 1;
        foreach ($petShelter as $p) {
            $data[] = [
                'number' => $number,
                'card_number' => $p->pet->card_number,
                'name' => $p->pet->name,
                'type' => $p->pet->type,
                'sex' => $p->pet->sex,
                'mark' => @$p->pet->info->identification_mark,
                'arrived_at' => @$p->pet->movements->arrived_date
            ];
            $number++;
        }

        $currentDateYear = Carbon::now()->year;
        $currentDateMonth = Carbon::now()->month;
        $currentDateDay = Carbon::now()->day;

        $values = array(
            'library' => 'PHPStamp 0.1',
            'simpleValue' => 'I am simple value',
            'nested' => array(
                'firstValue' => 'First child value',
                'secondValue' => 'Second child value'
            ),
            'header' => 'test of a table row',
            'students' => $data,
            'address' => $shelter->address,
            'org' => $petShelter[0]->shelter_name,
            'cdy' => $currentDateYear,
            'cdm' => $currentDateMonth,
            'cdd' => $currentDateDay,
        );
        $result = $templator->render($document, $values);

        $result->download();

        return redirect()->back();
    }



    /**
     * Генерация word отчета
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \PHPStamp\Exception\InvalidArgumentException
     */
    public function generateReport()
    {
        $cachePath = public_path();
        $templator = new Templator($cachePath);

        $documentPath = public_path('template.docx');
        $document = new WordDocument($documentPath);

        $shelters = Shelter::all();

        $startCountAll = 0;
        $startCountDogs = 0;
        $startCountCats = 0;

        $leftCountTotal = 0;
        $leftCountDogsTotal = 0;
        $leftCountCatsTotal = 0;

        $currentCountTotal = 0;
        $currentCountDogsTotal = 0;
        $currentCountCatsTotal = 0;

        foreach ($shelters as $shelter) {
            $petShelter = PetShelter::where('shelter_id', $shelter->id)->with('pet')->count();
            $shelter['allCount'] = $petShelter;

            $petShelter = PetShelter::where('shelter_id', $shelter->id)->whereHas('pet', function ($query) {
                return $query->where('type', 'кошка');
            })->count();
            $shelter['catCount'] = $petShelter;

            $shelter['dogCount'] = $shelter['allCount'] - $petShelter;

            // LEFT
            $left = PetMovement::whereNotNull('left_date')->whereHas('pet.shelter', function ($query) use ($shelter) {
                return $query->where('shelter_id', $shelter->id);
            })->count();
            $shelter['leftAllCount'] = $left;

            $left = PetMovement::whereNotNull('left_date')->whereHas('pet.shelter', function ($query) use ($shelter) {
                return $query->where('shelter_id', $shelter->id);
            })->whereHas('pet', function ($query) {
                return $query->where('type', 'собака');
            })->count();
            $shelter['leftDogCount'] = $left;
            $shelter['leftCatCount'] = $shelter['leftAllCount'] - $left;

            $shelter['currentAllCount'] = $shelter['allCount'] - $shelter['leftAllCount'];
            $shelter['currentDogCount'] = $shelter['dogCount'] - $shelter['leftDogCount'];
            $shelter['currentCatCount'] = $shelter['catCount'] - $shelter['leftCatCount'];

            $startCountAll += $shelter['allCount'];
            $startCountDogs += $shelter['dogCount'];
            $startCountCats += $shelter['catCount'];

            $leftCountTotal += $shelter['leftAllCount'];
            $leftCountDogsTotal += $shelter['leftDogCount'];
            $leftCountCatsTotal += $shelter['leftCatCount'];

            $currentCountTotal += $shelter['currentAllCount'];
            $currentCountDogsTotal += $shelter['currentDogCount'];
            $currentCountCatsTotal += $shelter['currentCatCount'];
        }

        $firstDate = '2008-01-01';
        $firstDateYear = explode('-', $firstDate)[0];
        $firstDateMonth = explode('-', $firstDate)[1];
        $firstDateDay = explode('-', $firstDate)[2];


        $currentDateYear = Carbon::now()->year;
        $currentDateMonth = Carbon::now()->month;
        $currentDateDay = Carbon::now()->day;


        $values = array(
            'library' => 'PHPStamp 0.1',
            'simpleValue' => 'I am simple value',
            'nested' => array(
                'firstValue' => 'First child value',
                'secondValue' => 'Second child value'
            ),
            'header' => 'test of a table row',
            'students' => $shelters->toArray(),
            'startCountAll' => $startCountAll,
            'startCountDogs' => $startCountDogs,
            'startCountCats' => $startCountCats,
            'leftCountTotal' => $leftCountTotal,
            'leftCountDogsTotal' => $leftCountDogsTotal,
            'leftCountCatsTotal' => $leftCountCatsTotal,
            'currentCountTotal' => $currentCountTotal,
            'currentCountDogsTotal' => $currentCountDogsTotal,
            'currentCountCatsTotal' => $currentCountCatsTotal,
            'firstDate' => $firstDate,
            'cdy' => $currentDateYear,
            'cdm' => $currentDateMonth,
            'cdd' => $currentDateDay,
            'fdy' => $firstDateYear,
            'fdm' => $firstDateMonth,
            'fdd' => $firstDateDay
        );
        $result = $templator->render($document, $values);

        $result->download();

        return redirect()->back();
    }
}
