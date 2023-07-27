<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'permission_1',
        'permission_2',
        'permission_3',
        'permission_4',
        'permission_5',
        'permission_6',
        'permission_7',
        'permission_8',
        'permission_9',
        'permission_10',
        'permission_11',
        'permission_12',
    ];

    public function user():HasMany
    {
        return $this->hasMany(User::class);
    }
}
