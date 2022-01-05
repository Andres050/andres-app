<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function destroy() {
        auth()->logout();

        return redirect('/')->with('success','Good Bye');
    }

    public function create() {
        return view('sessions.create');
    }

    public function store() {

        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        if (! auth()->attempt($attributes)) {
            return back()
                ->withErrors(['email' => 'Your provided credentials could not be verified'])
                ->withInput(); // Aun mantiene lo que a escrito
            //throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified'])
        }

        session()->regenerate();

        return redirect('/')->with('success','Welcome Back!');

    }
}
