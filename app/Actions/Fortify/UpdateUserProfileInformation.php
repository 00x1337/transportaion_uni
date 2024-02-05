<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{

    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'located' => ['required', 'string', 'max:255'],
            'google_map' => ['required', 'string'],
            'phone' => ['required', 'string'],

            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');
//        dd($input);

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
if($user->role == 'user'){
// dd($input['selectedDays']);
// $selectedHoursـ = [];
//     $days = ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس'];
//     $selectedHoursArray = json_decode(auth()->user()->selectedDays, true);
//     dd($input);
//     foreach ($days as $day) {
//             $selectedHoursـ[]= $input[""];

//     }

    // تحويل المصفوفة إلى JSON
    // dd(json_encode($selectedHours));
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'located' => $input['located'],
                'google_map' => $input['google_map'],
                'phone' => $input['phone'],
                 'selectedDays' => json_encode($input['days']),
                // 'selectedHours' => $input['selectedHours'],
            ])->save();
}else{
    $user->forceFill([
        'name' => $input['name'],
        'email' => $input['email'],
        'located' => $input['located'],
        'google_map' => $input['google_map'],
        'phone' => $input['phone'],
        'price' => $input['price'],
        'where' => $input['where'],
        'type_car' => $input['where'],

    ])->save();
}

        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'located' => $input['located'],
            'google_map' => $input['google_map'],
            'phone' => $input['phone'],

            'email' => $input['email'],

            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
