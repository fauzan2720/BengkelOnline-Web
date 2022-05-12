<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'vehicle_name',
        'number_plate',
        'photo_url',
    ];

    public function getUrlAttribute($url)
    {
        return config('app.photo_url') . Storage::url($url);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function callMechanics()
    {
        return $this->hasMany(CallMechanic::class, 'vehicle_id', 'id');
    }
}
