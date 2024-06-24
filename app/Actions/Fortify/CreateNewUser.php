<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'employeeId' => ['required', 'string', 'unique:users'],
            'position' => ['required'],
            'role' => ['required'],
            'gender' => ['required'],
            'password' => $this->passwordRules(),
            'password_confirmation' => ['required'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'employee_id' => $input['employeeId'],
            'password' => Hash::make($input['password']),
            'position' => $input['position'],
            'role' => $input['role'],
            'gender' => $input['gender'],
        ]);
    }
}
