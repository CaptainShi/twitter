<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()
                ->withLikes()
                ->paginate(20)
        ]);
    }

    public function edit(User $user){
        if ($user->isNot(auth()->user())) {
            abort('403', "You don't have the permission to edit this profile");
        }

        return view('profiles.edit', ['user' => $user]);
    }

    public function update(User $user)
    {
        if ($user->isNot(auth()->user())) {
            abort('403', "You don't have the permission to edit this profile");
        }

        $attributes = request()->validate([
            'name' => ['string', 'required', 'max: 255'],
            'username' => ['string', 'required', 'max: 255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'avatar' => ['file'],
            'email' => ['string', 'required', 'max: 255', 'email', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min: 8', 'max:255', 'confirmed']
        ]);

        if (request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('avators');
        }

        $user->update($attributes);

        return redirect(route('profile', $user->id));
    }
}
