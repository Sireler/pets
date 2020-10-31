<?php

namespace App\Http\Controllers\Directories;

use App\Http\Controllers\Controller;
use App\PetType;
use Illuminate\Http\Request;

class PetTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $types = PetType::all();

        return view('directories.pet_types', [
            'types' => $types
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
        $types = PetType::create([
            'name' => $request->get('name')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PetType  $petType
     * @return \Illuminate\Http\Response
     */
    public function show(PetType $petType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PetType  $petType
     * @return \Illuminate\Http\Response
     */
    public function edit(PetType $petType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PetType  $petType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, PetType $petType)
    {
        $type = PetType::where('id', $request->get('id'))->first();

        $type->name = $request->get('name');
        $type->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\PetType $petType
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(PetType $petType, $id)
    {
        $type = PetType::where('id', $id)->first();
        $type->delete();

        return redirect()->back();
    }
}
