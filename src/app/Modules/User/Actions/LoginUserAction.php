<?php

namespace App\Modules\User\Actions;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Modules\User\DataTransferObjects\UserData;
use App\Models\User;


final class LoginUserAction
{
    /**
     * @param UserData $data
     * @return User
     */
    public static function execute(array $data): User
    {
        
        $user = UserData::from(User::where('email', $data['email'])->first());

        if (! $user || ! Hash::check($data['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken($data['device'])->plainTextToken;
    }
}
