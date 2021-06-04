<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Building extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'bd_building';
    protected $primaryKey = 'building_id';

    public function floors(): HasMany
    {
        return $this->hasMany(Floor::class, 'building_id');
    }
}
