<?php 

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class NoteFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];
    
    public function damage($damage){
        if($damage > 0){
            return $this->where('damage', '>=', $damage)->orderBy('damage', 'ASC')->latest();
        }
    }

    public function difficulties($difficulties){
        foreach($difficulties as $difficulty){
            return $this->where('difficulty', '=', $difficulty)->latest();
        }
    }

    public function classics($classics){
        foreach($classics as $classic){
            if($classic == 3){
                $this->related('favorites', function($query){
                    $query->where([
                        'favorites.user_id' => auth()->user()->id,
                        'user_id' => auth()->user()->id,
                    ]);
                });
            }
            if($classic == 2){
                return $this->oldest();
            }
            if($classic == 1){
                    return $this->withCount('likes')->orderByDesc('likes_count');
                
            }
            // * Popular and fovorites missing
        }
    }

    public function creator($creator){
        app('debugbar')->info($creator);
        $this->related('user', function($query) use ($creator){
            return $query->where('users.name', 'like', '%' . $creator . '%')->latest();
        });
    }

    public function categories($categories){
        $this->related('categories', function($query) use ($categories){
            return $query->whereIn('categories.id', $categories)->latest();
        });
    }

    public function spark($spark){
        $this->related('categories', function($query) use ($spark){
            return $query->where('category_note.category_id', '=', $spark)->latest();
        });
    }

    public function fighters($fighters){
        // ! Optimize to filter only the main fighter
        $this->related('fighters', function($query) use ($fighters){
            return $query->whereIn('fighter_note.fighter_id',  $fighters)->latest();
        });
    }

    public function assists($assists){
        
        //! Optimize that when only 1 or  2 fighter there are just one or no assists on the note
        //! and select assist of that specific character (idea hidden input with id of fighter)
        $this->related('fighters', function($query) use ($assists){
            $afs = request(['afs']);
            foreach($assists as $key=>$assist){
                
                if($assist != null){
                    if($assist == 4){
                        $assistsIdx = $key;
                        foreach($afs as $array){
                            foreach($array as $key=>$af){
                                app('debugbar')->info($af);
                                return $query->where('fighter_note.fighter_id', $af)->where('fighter_note.note_id', '=', 'notes.id')
                                ->whereBetween('assistOne', [1, 3])->orWhereBetween('assistTwo', [1, 3])->latest();
                            } 
                        }
                    }
                    else{
                        $assistsIdx = $key;
                        foreach($afs as $array){
                            foreach($array as $key=>$af){
                                if( $assistsIdx == $key){
                                    app('debugbar')->info($af);
                                    return $query->where('fighter_note.fighter_id', $af)->where('fighter_note.note_id', '=', 'notes.id')
                                    ->where('assistOne', '=', $assist)->orWhere('assistTwo', '=', $assist)->latest();
                                }
                            }
                        }
                    }
                }
            }
        });
    }
}
