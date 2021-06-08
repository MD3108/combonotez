<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
class Note extends Model
{
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

    use HasFactory, Filterable;

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
        return $this->hasMany(Like::class);
    }

    public function favorites(){
        return $this->hasMany(Favorite::class);
    }

    public function getDataAttribute($value){
        return json_decode($value, true);
    }

    public function isLikedByAuthUser(){
        if(isset(auth()->user()->id)){
            return $this->likes->where('user_id', auth()->user()->id)->isEmpty() ? false : true ;
        }
        else{
            return response()->json(['error' => 'Unauthorized', 'interaction-message' => 'you have to be connected'], 401);
        }
    }

    public function isFavoredByAuthUser(){
        if(isset(auth()->user()->id)){
            app('debugbar')->info($this->favorites->where('user_id', auth()->user()->id)->isEmpty() ? false : true);
            return $this->favorites->where('user_id', auth()->user()->id)->isEmpty() ? false : true ;
        }
        else{
            return response()->json(['error' => 'Unauthorized', 'interaction-message' => 'you have to be connected'], 401);
        }
    }
}
