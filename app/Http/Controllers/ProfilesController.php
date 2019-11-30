<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;

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

        if (request('image')) {

            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
        }
        auth()->user()->profile->update(array_merge($data, ['image' => $imagePath]));



        return redirect("/profile/{$user->id}");
    }
}
