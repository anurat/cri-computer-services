<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'ar_province';
    protected $primaryKey = 'province_id';

    public function districts(): HasMany
    {
        return $this->hasMany(District::class, 'province_id')
            ->orderBy('district_name');
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'geo_id');
    }
}
