<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteUser extends Model
{
    use HasFactory;

    protected $table = 'favorite_user';
    public $timestamps = false;
}
