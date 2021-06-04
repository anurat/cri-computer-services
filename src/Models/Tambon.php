<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tambon extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'ar_tambon';
    protected $primaryKey = 'tambon_id';

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}
