<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FighterNote extends Model
{
    protected $fillable = ['fighter_id', 'note_id'];
    use HasFactory;
    protected $table = 'fighter_note';
    public $timestamps = false;
}
