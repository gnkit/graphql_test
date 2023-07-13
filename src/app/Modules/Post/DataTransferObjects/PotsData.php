<?php

namespace App\Modules\Post\DataTransferObjects;

use Spatie\LaravelData\Data;

final class PostData extends Data
{
    public function __construct(
        public string $title,
        public string $content,
        #[Exists(User::class)]
        public int $user_id,
    ) {
    }
}
