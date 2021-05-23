<?php

namespace App\Utilities\NoteFilters;

use App\Utilities\FilterContract;

class Name implements FilterContract
{
    public function handle($value): void
    {
        dd($value);
        $this->query->where('name', $value);
    }
}