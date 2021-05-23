<?php
//orderBy('updated_at', 'DESC')

namespace App\Utilities\NoteFilters;

use App\Utilities\QueryFilter;
use App\Utilities\FilterContract;

class Newest extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        // here I'm trying to filter 'notes' name col
        $this->query->orderBy('updated_at', 'DESC');
    }
}