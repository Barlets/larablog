<?php

namespace App\Traits;

use Carbon\Carbon;

trait PostScopes
{
    /**
     * @param \Eloquent $query
     * @param array $filters
     */
    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }

}