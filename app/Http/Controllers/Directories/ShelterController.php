<?php

namespace App\Http\Controllers\Directories;

use App\Http\Controllers\Controller;
use App\OperatingOrganization;
use App\Shelter;
use Illuminate\Http\Request;

class ShelterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $shelters = Shelter::all();
        $organizations = OperatingOrganization::all();

        return view('directories.shelters', [
            'types' => $shelters,
            'organizations' => $organizations
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
        $shelter = Shelter::create([
            'name' => $request->get('name'),
            'organization_id' => $request->get('organization_id'),
            'address' => $request->get('address'),
            'phone' => $request->get('phone')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shelter  $shelter
     * @return \Illuminate\Http\Response
     */
    public function show(Shelter $shelter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shelter  $shelter
     * @return \Illuminate\Http\Response
     */
    public function edit(Shelter $shelter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shelter  $shelter
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Shelter $shelter)
    {
        $shelter = Shelter::where('id', $request->get('id'))->first();
        $data = $request->except('_method', '_token');

        $shelter->update($data);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shelter  $shelter
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Shelter $shelter, $id)
    {
        $type = Shelter::where('id', $id)->first();
        $type->delete();

        return redirect()->back();
    }
}
