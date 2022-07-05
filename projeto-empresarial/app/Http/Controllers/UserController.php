<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registered;

class UserController extends Controller
{
    public function __construct(Registered $registered)
    {
        $this->model = $registered; 
    }

    public function index()
    {
        $users = Registered::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function registered(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $this->model->create($data);
    }
}