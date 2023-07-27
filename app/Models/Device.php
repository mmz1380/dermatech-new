<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Device extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'price_per_hour',
        'price_per_day',
        'price_per_client',
        'price_per_case',
        'status',
        'position',
    ];

    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'order_devices','device_id', 'order_id')
            ->as("OrderDevice");
    }

    public function order_device() : HasMany
    {
        return $this->hasMany(OrderDevice::class);
    }
}
