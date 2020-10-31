<?php

namespace App\Http\Controllers\Directories;

use App\GenderType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenderTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $types = GenderType::all();

        return view('directories.gender_types', [
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
        $types = GenderType::create([
            'name' => $request->get('name')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GenderType  $genderType
     * @return \Illuminate\Http\Response
     */
    public function show(GenderType $genderType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GenderType  $genderType
     * @return \Illuminate\Http\Response
     */
    public function edit(GenderType $genderType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GenderType  $genderType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, GenderType $genderType)
    {
        $type = GenderType::where('id', $request->get('id'))->first();

        $type->name = $request->get('name');
        $type->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GenderType  $genderType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(GenderType $genderType, $id)
    {
        $type = GenderType::where('id', $id)->first();
        $type->delete();

        return redirect()->back();
    }
}
