<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class App extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'cs_app';
    protected $primaryKey = 'app_id';

    public function systemAdmins(): HasMany
    {
        return $this->hasMany(SystemAdmin::class, 'app_id');
    }
}
