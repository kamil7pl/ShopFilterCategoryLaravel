<?php

namespace App\QueryFilters;

use Cerbero\QueryFilters\QueryFilters;

/**
 * Filter records based on query parameters.
 *
 */
class CategoryFilters extends QueryFilters
{
    public function cname($text)
    {
        $this->query->where('name', 'like', '%'.$text.'%');
    }
}
