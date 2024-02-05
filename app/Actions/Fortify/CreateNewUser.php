<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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
//        dd($input,Session::get("role"));
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
//            'phone' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
//            'selectedDays' => ['string'],
//            'selectedHours' => ['string'],
        ])->validate();
        if(Session::has('role')) {
            if(Session::get('role') == "user"){
                return User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
//                    'phone' => $input['phone'],
//                    'selectedDays' => $input['selectedDays'],
//                    'selectedHours' => $input['selectedHours'],
                    "role" => "user",

                    'password' => Hash::make($input['password']),
                ]);
            }else{

            return User::create([
                'name' => $input['name'],
                'email' => $input['email'],
//                'phone' => $input['phone'],
                "role" => "driver",
                'password' => Hash::make($input['password']),
            ]);
            }

        }else{

            if($input["role"]== "user"){
                return User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
//                    'phone' => $input['phone'],
//                    'selectedDays' => $input['selectedDays'],
//                    'selectedHours' => $input['selectedHours'],
                    "role" => "user",

                    'password' => Hash::make($input['password']),
                ]);
            }else{

                return User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
//                    'phone' => $input['phone'],
                    "role" => "driver",

                    'password' => Hash::make($input['password']),
                ]);
            }
    }
    }
}
