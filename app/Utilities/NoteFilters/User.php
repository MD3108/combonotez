<?php

namespace App\Utilities\NoteFilters;

use App\Utilities\QueryFilter;
use App\Utilities\FilterContract;

class User extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        // here I'm trying to filter 'notes' name col
        //$this->query->users->where('name', $value);
        $this->query->users->where('name', 'like', '%'.$value.'%');
    }
}