<?php

namespace App\Modules\Post\Actions;

use App\Modules\Post\DataTransferObjects\PostData;
use App\Modules\Post\Models\Post;
use App\Models\User;


final class UpsertPostAction
{
    /**
     * @param PostData $data
     * @param User $user
     * @return Contact
     */
    public static function execute(PostData $data, User $user): Post
    {
        $post = Post::updateOrCreate(
            [
                'id' => $data->id,
            ],
            [
                'title' => $data->title,
                'content' => $data->content,
            ],
        );

        return $post;
    }
}
