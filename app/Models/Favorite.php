<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
class Favorite extends Model
{
    use HasFactory, Filterable;

    public function users(){
        return $this->belongsToMany((User::class));
    }

    public function notes(){
        return $this->belongsToMany(Note::class);
    }
}
