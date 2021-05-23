<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function likeable()
    {
        return $this->morphTo();
    }

    //public function notes() {
    //    return $this->belongsToMany(Note::class);
    //}

    //public function users(){
    //    return $this->belongsToMany((User::class));
    //}
}
