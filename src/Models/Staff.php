<?php

namespace CRI\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    protected $connection = 'computer_services';
    protected $table = 'ph_staff';
    protected $primaryKey = 'staff_id';
    public $timestamps = false;

    public function fullName(): string
    {
        return "{$this->staff_prefix_eng} {$this->staff_firstname_eng} {$this->staff_lastname_eng}";
    }

    public function thaiFullName(): string
    {
        return "{$this->staff_prefix}{$this->staff_firstname} {$this->staff_lastname}";
    }

    public function firstInternalPhone(): ?Phone
    {
        return $this->phones
            ->where('tel_type', 'e')
            ->first();
    }

    public function isResigned(): bool
    {
        if (is_null($this->end_date) || $this->end_date <= 0) {
            return false;
        }

        return $this->end_date < now()->timestamp;
    }

    public function emails(): HasMany
    {
        return $this->hasMany(Email::class, 'staff_id');
    }

    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class, 'staff_id');
    }

    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'ph_staff_room', 'staff_id', 'room_id');
    }

    public function positions(): BelongsToMany
    {
        return $this->belongsToMany(Position::class, 'ph_staff_position', 'staff_id', 'pos_id');
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class, 'staff_id');
    }

    public function systemAdmins(): HasMany
    {
        return $this->hasMany(SystemAdmin::class, 'staff_id');
    }
}
