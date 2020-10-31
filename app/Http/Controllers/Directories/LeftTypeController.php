<?php

namespace App\Http\Controllers\Directories;

use App\Http\Controllers\Controller;
use App\LeftType;
use Illuminate\Http\Request;

class LeftTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $types = LeftType::all();

        return view('directories.left_types', [
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
        $types = LeftType::create([
            'name' => $request->get('name')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LeftType  $leftType
     * @return \Illuminate\Http\Response
     */
    public function show(LeftType $leftType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LeftType  $leftType
     * @return \Illuminate\Http\Response
     */
    public function edit(LeftType $leftType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LeftType  $leftType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, LeftType $leftType)
    {
        $type = LeftType::where('id', $request->get('id'))->first();

        $type->name = $request->get('name');
        $type->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LeftType  $leftType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(LeftType $leftType, $id)
    {
        $type = LeftType::where('id', $id)->first();
        $type->delete();

        return redirect()->back();
    }
}
