<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeNote extends Model
{
    use HasFactory;
    protected $table = 'like_note';
    public $timestamps = false;
}
