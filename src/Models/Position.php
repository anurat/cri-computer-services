<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Position extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'ph_position';
    protected $primaryKey = 'pos_id';
    public $timestamps = false;

    public function institute(): BelongsTo
    {
        return $this->belongsTo(Institute::class, 'org_id');
    }

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class, 'org_id');
    }

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class, 'org_id');
    }

    public function subsection(): BelongsTo
    {
        return $this->belongsTo(Subsection::class, 'org_id');
    }

    public function org(): BelongsTo
    {
        $org = substr(strstr($this->org_type, '_'), 1);
        return $this->$org();
    }
}
