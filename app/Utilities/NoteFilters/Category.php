<?php

namespace App\Utilities\NoteFilters;

use App\Utilities\QueryFilter;
use App\Utilities\FilterContract;

class Catagory extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        //dd($this->query);
        $this->query->whereHas('categories', function ($q) use ($value) {
            return $q->where('id', $value);
        });
    }
}