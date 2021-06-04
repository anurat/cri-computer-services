<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'ar_geography';
    protected $primaryKey = 'geo_id';

    public function provinces(): HasMany
    {
        return $this->hasMany(Province::class, 'geo_id');
    }
}
