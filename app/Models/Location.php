<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'address',
        'detail_address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function callMechanics()
    {
        return $this->hasMany(CallMechanic::class, 'location_id', 'id');
    }

    public function orderss()
    {
        return $this->hasMany(Transaction::class, 'location_id', 'id');
    }
}
