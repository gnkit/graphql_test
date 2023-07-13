<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Modules\User\Actions\LoginUserAction;


final class Login
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return LoginUserAction::execute($args);

        // $user = User::where('email', $args['email'])->first();

        // if (! $user || ! Hash::check($args['password'], $user->password)) {
        //     throw ValidationException::withMessages([
        //         'email' => ['The provided credentials are incorrect.'],
        //     ]);
        // }

        // return $user->createToken($args['device'])->plainTextToken;
    }
}
