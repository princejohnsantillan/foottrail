<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            // 'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'in:user,provider'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([
            'uuid' => Str::uuid()->toString(),
            'first_name' => $input['role'] == 'provider' ? $input['name'] : $input['first_name'],
            'middle_name' => $input['middle_name'] ?? null,
            'last_name' => $input['last_name'] ?? null,
            'email' => $input['email'],
            'phone' => $input['phone'],
            'address' => $input['address'],
            'birthdate' => $input['birthdate'] ?? null,
            'gender' => isset($input['gender']) ? $input['gender'] == 'male' : null,
            'password' => Hash::make($input['password']),
        ]);

        $user->assignRole($input['role']);

        return $user;
    }
}
