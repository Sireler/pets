<?php

namespace App\Http\Controllers\Directories;

use App\EarType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EarTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $types = EarType::all();

        return view('directories.ear_types', [
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
        $types = EarType::create([
            'name' => $request->get('name')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EarType  $earType
     * @return \Illuminate\Http\Response
     */
    public function show(EarType $earType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EarType  $earType
     * @return \Illuminate\Http\Response
     */
    public function edit(EarType $earType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EarType  $earType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, EarType $earType)
    {
        $type = EarType::where('id', $request->get('id'))->first();

        $type->name = $request->get('name');
        $type->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EarType  $earType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(EarType $earType, $id)
    {
        $type = EarType::where('id', $id)->first();
        $type->delete();

        return redirect()->back();
    }
}
