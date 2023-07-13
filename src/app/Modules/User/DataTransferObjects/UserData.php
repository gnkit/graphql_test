<?php

namespace App\Modules\User\DataTransferObjects;

use Spatie\LaravelData\Data;

final class UserData extends Data
{
    public function __construct(
        public readonly ?int $id,
        public readonly string $name,
        public readonly string $email,
        public readonly ?string $password,
        public readonly ?string $avatar,
    ) {
    }
}
