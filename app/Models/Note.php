<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Utilities\FilterBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\Likeable;
use App\Concerns;

class Note extends Model implements Likeable
{
    use HasFactory;
    use Concerns\Likeable;

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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function fighters(){
        return $this->belongsToMany(Fighter::class);//->withPivot(['sort_key'])
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    //public function likes() {
    //    return $this->belongsToMany(Like::class);
    //}

    public function favorites(){
        return $this->belongsToMany(Favorite::class);
    }

    public function getDataAttribute($value){
        return json_decode($value, true);
    }

    public function selectedFighters(){
        return $this->belongsToMany(Fighter::class);
    }

    public function scopeFilterBy($query, $filters)
    {
        $namespace = 'App\Utilities\NoteFilters';
        $filter = new FilterBuilder($query, $filters, $namespace);
        return $filter->apply();

        /*if( isset($filters['fighters']) ){
            //dd($filters['fighters']);
            //dd(
            //    $this->selectedFighters()->where('fighter_id', '=', $filters['fighters'])
            //);
            foreach($filters['fighters'] as $fighter){
                $this->selectedFighters()->$query->where('fighter_id', '=', $fighter);
            }
        }
        else{
            dd( [
                'something went wrong',
                $query,
                $filters,
            ]);
        }*/

        //if( isset($filters['fighters']) ){
        //    foreach($filters['fighters'] as $fighter){
        //        $query->where('id', '=', $this->belongsToMany(Fighter::class)->wherePivot(('note_id')))
        //            ->with($this->belongsToMany(Fighter::class)->wherePivot('fighter_id', '=', $fighter));
        //    }
        //}

        //if($filters['creator'] ?? false){
        //    $query
        //        ->where('name', 'like', '%' . request('creator'). '%');
        //}

    }
}
