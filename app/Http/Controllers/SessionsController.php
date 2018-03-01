<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            if(Auth::user()->activated) {
                session()->flash('success', 'Welcome back! ');
                return redirect()->intended(route('users.show', [Auth::user()]));
            } else {
                Auth::logout();
                session()->flash('warning', 'You have not activated the account. Please check your email. ');
                return redirect('/');
            }
        } else {
            session()->flash('danger', 'Please check your email and password. ');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'You already logout. ');
        return redirect('login');
    }
}
