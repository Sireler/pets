<?php

namespace App\Http\Controllers\Directories;

use App\Http\Controllers\Controller;
use App\TailType;
use Illuminate\Http\Request;

class TailTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $types = TailType::all();

        return view('directories.tail_types', [
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
        $types = TailType::create([
            'name' => $request->get('name')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TailType  $tailType
     * @return \Illuminate\Http\Response
     */
    public function show(TailType $tailType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TailType  $tailType
     * @return \Illuminate\Http\Response
     */
    public function edit(TailType $tailType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TailType  $tailType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, TailType $tailType)
    {
        $type = TailType::where('id', $request->get('id'))->first();

        $type->name = $request->get('name');
        $type->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\TailType $tailType
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(TailType $tailType, $id)
    {
        $type = TailType::where('id', $id)->first();
        $type->delete();

        return redirect()->back();
    }
}
