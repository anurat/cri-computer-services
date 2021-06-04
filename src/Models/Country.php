<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    public const THAILAND_ID = 211;

    protected $connection = 'computer_services';
    protected $table = 'ar_country';
    protected $primaryKey = 'country_id';

    public function provinces(): HasMany
    {
        return $this->hasMany(Province::class, 'country_id');
    }
}
