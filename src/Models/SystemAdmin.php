<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SystemAdmin extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'system_admin';
    protected $primaryKey = 'adm_id';

    public function app(): BelongsTo
    {
        return $this->belongsTo(App::class, 'app_id');
    }

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }
}
