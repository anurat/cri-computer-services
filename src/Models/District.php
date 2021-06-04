<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'ar_district';
    protected $primaryKey = 'district_id';

    public function tambons(): HasMany
    {
        return $this->hasMany(Tambon::class, 'district_id')
            ->orderBy('tambon_name');
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
}
