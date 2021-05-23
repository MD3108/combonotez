<?php

namespace App\Utilities\NoteFilters;

use App\Utilities\QueryFilter;
use App\Utilities\FilterContract;
use App\Models\Note;

class Fighter extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {   
        dd($this->query->fighter);
        $this->query->selectedFighters()->where('fighter_id', '=', $value);
    }
}