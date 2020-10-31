<?php

namespace App\Http\Controllers\Directories;

use App\BreedType;
use App\Http\Controllers\Controller;
use App\PetType;
use Illuminate\Http\Request;

class BreedTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $types = BreedType::all();
        $pet_types = PetType::all();

        return view('directories.breed_types', [
            'types' => $types,
            'pet_types' => $pet_types
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $types = BreedType::create([
            'name' => $request->get('name'),
            'pet_type_id' => $request->get('pet_type_id')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BreedType  $breedType
     * @return \Illuminate\Http\Response
     */
    public function show(BreedType $breedType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BreedType  $breedType
     * @return \Illuminate\Http\Response
     */
    public function edit(BreedType $breedType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BreedType  $breedType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, BreedType $breedType)
    {
        $type = BreedType::where('id', $request->get('id'))->first();

        $type->name = $request->get('name');
        $type->pet_type_id = $request->get('pet_type_id');
        $type->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\BreedType $breedType
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(BreedType $breedType, $id)
    {
        $type = BreedType::where('id', $id)->first();
        $type->delete();

        return redirect()->back();
    }
}
