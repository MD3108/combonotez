<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    // ! add to fillable once  "  , 'notation'   "
    protected $fillable = ['name', 'damage', 'ki_start', 'ki_end', 'difficulty', 'user_id'];

    protected $guarded = [];

    // ! remove this if not usable for json
    //protected $casts = [
    //    'notation' => 'json',
    //];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function fighters(){
        return $this->belongsToMany(Fighter::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function likes() {
        return $this->belongsToMany(Like::class);
    }

    public function favorites(){
        return $this->belongsToMany(Favorite::class);
    }
}
