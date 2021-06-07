<?php

namespace App\Models;

//use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;

class Favorite extends Model
{
    use HasFactory,Filterable;

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function favorable()
    {
        return $this->morphTo();
    }
}
