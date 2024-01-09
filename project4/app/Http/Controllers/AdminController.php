<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest; // need to add this
use App\Providers\RouteServiceProvider; // need to add this
use Illuminate\Http\RedirectResponse; // need to add this
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function login(){
        return view ('admin.login');
    }

    public function store(LoginRequest $request): RedirectResponse // copy form AuthenticatedSessionController
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
