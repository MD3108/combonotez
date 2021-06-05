<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
class Note extends Model
{
    // ! add to fillable once  "  , 'notation'   "
    protected $fillable = [ 'name',
                            'notations',
                            'assistOne',
                            'assistTwo',
                            'damage', 
                            'ki_start', 
                            'ki_end', 
                            'difficulty', 
                            'youtube_url',
                            'user_id', 
                            'fighters', 
                            'categories',
                        ];

    protected $guarded = [];

    // ! remove this if not usable for json
    //protected $casts = [
    //    'notation' => 'json',
    //];

    use HasFactory, Filterable;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function fighters(){
        return $this->belongsToMany(Fighter::class);//->withPivot(['sort_key'])
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

    public function getDataAttribute($value){
        return json_decode($value, true);
    }
}
