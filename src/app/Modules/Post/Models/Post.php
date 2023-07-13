<?php

namespace App\Modules\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\PostFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected static function newFactory(): Factory
    {
        return PostFactory::new();
    }
}
