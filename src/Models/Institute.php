<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Institute extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'ph_institute';
    protected $primaryKey = 'ins_id';

    public function offices(): HasMany
    {
        return $this->hasMany(Office::class, 'ins_id');
    }
}
