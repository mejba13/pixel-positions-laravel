<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Schema\ValidationException;
use function Pest\Laravel\handleValidationExceptions;

class SessionController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $attributes =  request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

       if (! Auth::attempt($attributes)) {
           throw ValidationException::withMessages([
               'email' => 'Sorry, we are unable to sign you in.',
           ]);
       }

       request()->session()->regenerate();
       return redirect('/');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
