<?php

namespace App\Http\Controllers;

// use App\Http\Requests\Auth\LoginRequest; // need to add this
// use App\Providers\RouteServiceProvider; // need to add this
// use Illuminate\Http\RedirectResponse; // need to add this
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // need to add this


class AdminController extends Controller
{
    public function login(){
        return view ('admin.login');
    }

    // public function store(LoginRequest $request): RedirectResponse // copy form AuthenticatedSessionController
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(RouteServiceProvider::HOME);
    // }

    public function store(Request $request){
        $user =$request->all();
        dd($user);

        if(Auth::guard('admin')->attempt(['email'=> $user['email'],
        'password'=> $user['password']])){
            echo "All are ok";
        } else {
            echo 'Problem';
        }
    }
}
