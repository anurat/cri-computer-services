<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subsection extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'ph_subsection';
    protected $primaryKey = 'subsec_id';
    public $timestamps = false;

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class, 'sec_id');
    }
}
