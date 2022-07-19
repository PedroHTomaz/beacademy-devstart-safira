<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        if ($request->photo) {

            $file = $request['photo'];
            $path = $file->store('profile', 'public');
        } else {
            $path = $request['photo'];
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'tel' => ['required'],
            'birth_date' => ['required'],
            'cpf' => ['required', 'max:12'],
            'street' => ['required'],
            'number' => ['required'],
            'neighborhood' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'cep' => ['required'],
            'photo' => ['file'],
        ]);

        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tel' => $request->tel,
            'birth_date' => $request->birth_date,
            'cpf' => $request->cpf,
            'street' => $request->street,
            'number' => $request->number,
            'neighborhood' => $request->neighborhood,
            'city' => $request->city,
            'state' => $request->state,
            'cep' => $request->cep,
            'photo' => $path


        ]);

        event(new Registered($user));

        Auth::login($user);

        if (Auth::user()->is_admin == 1) {
            return redirect()->intended(RouteServiceProvider::DASHBOARD);
        } else {
            return redirect()->intended(RouteServiceProvider::CATALOGO);
        }
    }
}