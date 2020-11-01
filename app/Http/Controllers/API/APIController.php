<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Pet;
use Illuminate\Http\Request;

class APIController extends Controller
{
    /**
     *
     */
    public function pets()
    {
        /** @var Pet $pets */
        $pets = Pet::whereHas('info', function($query) {
            return $query->where('socialized', 1);
        })->get();

        return response()->json($pets,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function pet(Request $request, $id)
    {
        /** @var Pet $pets */
        $pet = Pet::whereHas('info', function($query) {
            return $query->where('socialized', 1);
        })->where('id', $id)->first();

        return response()->json($pet,
            200,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE);
    }
}
