<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fighter extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    public function notes() {
        return $this->belongsToMany(Note::class);
    }
}
