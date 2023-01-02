<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'is_lecturer'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    use HasFactory;
}
