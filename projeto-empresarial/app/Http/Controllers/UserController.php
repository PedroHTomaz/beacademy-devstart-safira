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

    public function show($id)
    {
        if(!$user = Registered::find($id))
            return redirect()->route('users.index');
        
        return view('users.show', compact('user'));
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

        return view('users.login');
    }

    public function showLogin()
    {
        return view('users.login');
    }

    public function edit($id)
    {
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.index');
        } 

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        if(!$users = $this->model->find($id)){
            return redirect()->route('users.index');
        }

        if($request->password)
        $data['password'] = bcrypt($request->password);
        
        
        $users->update($data);

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        if(!$users = $this->model->find($id)){
            return redirect()->route('/');
        }
        
        $users->delete();
        return redirect()->route('users.index');
    }
}