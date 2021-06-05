<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
class Fighter extends Model
{
    use HasFactory, Filterable;

    public $timestamps = false;
    
    public function notes() {
        return $this->belongsToMany(Note::class);
    }
}
