<?php

namespace App\Http\Controllers\Directories;

use App\Http\Controllers\Controller;
use App\OperatingOrganization;
use Illuminate\Http\Request;

class OperatingOrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $organizations = OperatingOrganization::all();

        return view('directories.operating_organizations', [
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
        $operatingOrganization = OperatingOrganization::create([
            'name' => $request->get('name')
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OperatingOrganization  $operatingOrganization
     * @return \Illuminate\Http\Response
     */
    public function show(OperatingOrganization $operatingOrganization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OperatingOrganization  $operatingOrganization
     * @return \Illuminate\Http\Response
     */
    public function edit(OperatingOrganization $operatingOrganization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OperatingOrganization  $operatingOrganization
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $operatingOrganization = OperatingOrganization::where('id', $request->get('id'))->first();

        $operatingOrganization->name = $request->get('name');
        $operatingOrganization->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $id)
    {
        $operatingOrganization = OperatingOrganization::where('id', $id)->first();
        $operatingOrganization->delete();

        return redirect()->back();
    }
}
