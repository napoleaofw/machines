<?php

namespace App\Models\Traits;

use App\Models\Traits\Userstamps;

trait Userstamps
{
    /**
     * Get the user who created the record.
     */
    public function createdBy()
    {
        return $this->belongsTo(User:class, 'created_by');
    }

    /**
     * Get the user who updated the record.
     */
    public function updatedBy()
    {
        return $this->belongsTo(User:class, 'updated_by');
    }
}