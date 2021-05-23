<?php

namespace App\Utilities\NoteFilters;

use App\Utilities\QueryFilter;
use App\Utilities\FilterContract;

class Assist extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        // here I'm trying to filter 'notes' name col
        $this->query->whereHas('assistOne', $value)->orWhereHas('assistTwo', $value);
    }
}