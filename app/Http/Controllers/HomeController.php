<?php

namespace App\Http\Controllers;

use App\Role\UserRole;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        /** @var User $user */
        $user = $request->user();

        $user->addRole(UserRole::ROLE_SUPPORT);
        $user->save();


        return view('home', [
            'user' => $user
        ]);
    }
}
