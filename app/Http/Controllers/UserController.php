<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(Request $request)
    {
        $users = $this->model->getUsers(
            $request->search ?? ''
        );

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        if (!$user = User::find($id))
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

        if ($request->photo) {
            $data['photo'] = $request->photo->store('profile', 'public');
        }

        $this->model->create($data);

        return view('users.login');
    }

    public function showLogin()
    {
        return view('users.login');
    }

    public function edit($id)
    {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('users.index');
        }

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (!$users = $this->model->find($id)) {
            return redirect()->route('users.index');
        }

        if ($request->password)
            $data['password'] = bcrypt($request->password);

        if ($request->photo) {
            if ($users->photo && Storage::exists($users->photo)) {
                Storage::delete($users->photo);
            }

            $path = $request->photo->store('/images', 's3');
            $data['photo'] = $path;
        }

        $data['is_admin'] = $request->admin ? 1 : 0;
        $users->update($data);

        $message = 'Usuário atualizado com sucesso';
        $route = '/usuarios';
        return view('layouts.message', compact('message', 'route'));
    }

    public function destroy($id)
    {
        if (!$users = $this->model->find($id)) {
            return redirect()->route('/');
        }

        $users->delete();
        $message = 'Usuário excluído com sucesso';
        $route = '/usuarios';
        return view('layouts.message', compact('message', 'route'));
    }
}