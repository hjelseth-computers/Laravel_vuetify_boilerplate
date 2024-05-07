<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Plumber extends Model
{
    use HasFactory;

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }

    public function referrals(): HasManyThrough
    {
        return $this->hasManyThrough(Referral::class, Client::class);
    }
}
