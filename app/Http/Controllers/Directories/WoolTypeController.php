<?php

namespace App\Http\Controllers\Directories;

use App\Http\Controllers\Controller;
use App\PetType;
use App\WoolType;
use Illuminate\Http\Request;

class WoolTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $types = WoolType::all();
        $pet_types = PetType::all();

        return view('directories.wool_types', [
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
        $types = WoolType::create([
            'name' => $request->get('name'),
            'pet_type_id' => $request->get('pet_type_id')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WoolType  $woolType
     * @return \Illuminate\Http\Response
     */
    public function show(WoolType $woolType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WoolType  $woolType
     * @return \Illuminate\Http\Response
     */
    public function edit(WoolType $woolType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WoolType  $woolType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, WoolType $woolType)
    {
        $type = WoolType::where('id', $request->get('id'))->first();

        $type->name = $request->get('name');
        $type->pet_type_id = $request->get('pet_type_id');
        $type->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\WoolType $woolType
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(WoolType $woolType, $id)
    {
        $type = WoolType::where('id', $id)->first();
        $type->delete();

        return redirect()->back();
    }
}
