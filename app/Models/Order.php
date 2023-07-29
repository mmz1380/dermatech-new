<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'actual_sum',
        'received_sum',
        'branch_id',
        'desc',
    ];

    public function device(): BelongsToMany
    {
        return $this->belongsToMany(Device::class, 'order_devices','order_id', 'device_id')
            ->as("OrderDevice");
    }

    public function order_device() : HasMany
    {
        return $this->hasMany(OrderDevice::class);
    }

    public function route(): HasMany
    {
        return $this->hasMany(Route::class);
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    public function report(): HasMany
    {
        return $this->hasMany(Report::class);
    }
}
