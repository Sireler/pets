<?php

namespace App\Http\Controllers\Directories;

use App\EuthanasiaType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EuthanasiaTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $types = EuthanasiaType::all();

        return view('directories.euthanasia_types', [
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
        $types = EuthanasiaType::create([
            'name' => $request->get('name')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EuthanasiaType  $euthanasiaType
     * @return \Illuminate\Http\Response
     */
    public function show(EuthanasiaType $euthanasiaType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EuthanasiaType  $euthanasiaType
     * @return \Illuminate\Http\Response
     */
    public function edit(EuthanasiaType $euthanasiaType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EuthanasiaType  $euthanasiaType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, EuthanasiaType $euthanasiaType)
    {
        $type = EuthanasiaType::where('id', $request->get('id'))->first();

        $type->name = $request->get('name');
        $type->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EuthanasiaType  $euthanasiaType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(EuthanasiaType $euthanasiaType, $id)
    {
        $type = EuthanasiaType::where('id', $id)->first();
        $type->delete();

        return redirect()->back();
    }
}
