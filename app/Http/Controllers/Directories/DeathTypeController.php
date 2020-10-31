<?php

namespace App\Http\Controllers\Directories;

use App\DeathType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeathTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $types = DeathType::all();

        return view('directories.death_types', [
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
        $types = DeathType::create([
            'name' => $request->get('name')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeathType  $deathType
     * @return \Illuminate\Http\Response
     */
    public function show(DeathType $deathType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DeathType  $deathType
     * @return \Illuminate\Http\Response
     */
    public function edit(DeathType $deathType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeathType  $deathType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, DeathType $deathType)
    {
        $type = DeathType::where('id', $request->get('id'))->first();

        $type->name = $request->get('name');
        $type->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeathType  $deathType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(DeathType $deathType, $id)
    {
        $type = DeathType::where('id', $id)->first();
        $type->delete();

        return redirect()->back();
    }
}
