<?php

namespace App\Http\Controllers;

use App\Pet;
use App\PetShelter;
use App\Role\UserRole;
use App\Shelter;
use App\User;
use Illuminate\Http\Request;

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

        $user->addRole(UserRole::ROLE_SUPPORT);
        $user->save();


        return view('home', [
            'user' => $user
        ]);
    }

    public function shelters(Request $request)
    {
        $shelters = Shelter::all();

        return view('home.shelters', [
            'shelters' => $shelters
        ]);
    }

    public function shelter(Request $request, $id)
    {
        $shelter = Shelter::where('id', $id)->first();

        $petShelter = PetShelter::where('shelter_id', $shelter->id)->with('pet')->get();

        return view('home.shelter', [
            'shelter' => $shelter,
            'petShelter' => $petShelter
        ]);
    }

    public function shelterPetCard(Request $request, $shelterId, $petId)
    {
        $pet = Pet::where('id', $petId)->first();

        return view('home.pet_card', [
            'pet' => $pet
        ]);
    }
}
