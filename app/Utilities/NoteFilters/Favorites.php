<?php

namespace App\Utilities\NoteFilters;

use App\Utilities\QueryFilter;
use App\Utilities\FilterContract;

class Favorite extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        $this->query->whereHas('favorites', function ($q) use ($value) {
            return $q->where('id', $value);
        });
    }
}