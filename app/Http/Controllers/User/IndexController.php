<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use PHPUnit\Exception;

class IndexController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function store(StoreRequest $request)
    {
        try {
        $data = $request->validated();
        if ($data -> password == $data -> password_confirmation) {
            User::firstOrCreate([
                'email' => $data['email']
            ], $data);

            return redirect()->route('users.index');
        }else
            return "Ошибка пароли не совподают";
    } catch (Exception $e){
            $message = $e->getMessage();
            var_dump('Exception Message: '. $message);
        }
    }

    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);

        return view('user.show', compact('user'));
    }
}
