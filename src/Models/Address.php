<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'ph_staff_address';
    protected $primaryKey = 'staff_address_id';
    public $timestamps = false;

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }
}
