<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'ph_section';
    protected $primaryKey = 'sec_id';
    public $timestamps = false;

    public const COOP_SECTION_ID = 231;

    public function subsections(): HasMany
    {
        return $this->hasMany(Subsection::class, 'sec_id');
    }

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class, 'off_id');
    }
}
