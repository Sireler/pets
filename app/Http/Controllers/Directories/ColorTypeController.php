<?php

namespace App\Http\Controllers\Directories;

use App\ColorType;
use App\Http\Controllers\Controller;
use App\PetType;
use Illuminate\Http\Request;

class ColorTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $types = ColorType::all();
        $pet_types = PetType::all();

        return view('directories.color_types', [
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
        $types = ColorType::create([
            'name' => $request->get('name'),
            'pet_type_id' => $request->get('pet_type_id')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ColorType  $colorType
     * @return \Illuminate\Http\Response
     */
    public function show(ColorType $colorType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ColorType  $colorType
     * @return \Illuminate\Http\Response
     */
    public function edit(ColorType $colorType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ColorType  $colorType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, ColorType $colorType)
    {
        $type = ColorType::where('id', $request->get('id'))->first();

        $type->name = $request->get('name');
        $type->pet_type_id = $request->get('pet_type_id');
        $type->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ColorType  $colorType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ColorType $colorType, $id)
    {
        $type = ColorType::where('id', $id)->first();
        $type->delete();

        return redirect()->back();
    }
}
