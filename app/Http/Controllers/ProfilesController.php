<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($user)
    {

        $user = User::findOrFail($user);
        return view('profiles.index ', ['user' => $user]);
    }

    public function edit(User $user)
    {
        // authorize access edit route
        $this->authorize('update', $user->profile);
        // below is the same syntax as above, but using laravel cleaner syntax
        return view('profiles.edit', compact('user'));
    }

    public function update(\App\User $user)
    {

        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        auth()->$user->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}
