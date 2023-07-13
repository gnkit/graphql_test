<?php

namespace App\Modules\Post\Actions;

use App\Modules\User\DataTransferObjects\UserData;
use App\Models\User;


final class UpsertUserImageAction
{
    /**
     * @param UserData $data
     * @return User
     */
    public static function execute(UserData $data): User
    {
        $post = User::updateOrCreate(
            [
                'id' => $data->id,
            ],
            [
                'avatar' => $data->avatar,
            ],
        );

        return $post;
    }
}
