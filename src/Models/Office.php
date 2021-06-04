<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Office extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'ph_office';
    protected $primaryKey = 'off_id';

    public function institute(): BelongsTo
    {
        return $this->belongsTo(Institute::class, 'ins_id');
    }

    public function sections(): HasMany
    {
        return $this->hasMany(Section::class, 'off_id');
    }
}
