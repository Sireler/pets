<?php

namespace App\Http\Controllers;

use App\Pet;
use App\PetType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function findByPetType(Request $request)
    {
        $id = $request->get('pet_type');

        $petTypes = PetType::all();
        $petType = PetType::where('id', $id)->first();

        $pets = Pet::whereHas('info', function($query) {
            return $query->where('socialized', 1);
        })->where('type', $petType->name);

        $age = $request->get('age');
        if ($age == '1') {
            $pets = $pets->where('date_of_birth', '2020');
        } else if ($age == '2') {
            $pets = $pets->where('date_of_birth', '2019');
        } else if ($age == '3') {
            $pets = $pets->where('date_of_birth', '2018');
        }

        $pets = $pets->paginate(21);

        return view('catalog', [
            'petTypes' => $petTypes,
            'pets' => $pets
        ]);
    }

    public function showPet(Request $request, $id)
    {
        $pet = Pet::where('id', $id)->first();

        return view('card', [
            'pet' => $pet
        ]);
    }
}
