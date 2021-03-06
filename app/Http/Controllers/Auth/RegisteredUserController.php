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
            $path = $request->photo->store('/images', 's3');
        } else {
            $path = $request['photo'];
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'unique:users', 'email', 'max:255', 'min:6'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'tel' => ['required', 'numeric', 'min:11'],
            'birth_date' => ['required', 'date_field' => 'before:01/01/2004'],
            'cpf' => ['required', 'unique:users', 'digits:11', 'numeric'],
            'street' => ['required', 'string', 'min:1'],
            'number' => ['required', 'numeric', 'min:1'],
            'neighborhood' => ['required', 'string', 'min:3'],
            'city' => ['required', 'string', 'min:3'],
            'state' => ['required', 'string', 'min:2'],
            'cep' => ['required', 'numeric', 'digits:8'],
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