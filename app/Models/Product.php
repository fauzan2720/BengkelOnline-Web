<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_name',
        'product_category',
        'price',
        'trends',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'product_id', 'id');
    }

    public function callMechanics()
    {
        return $this->hasMany(CallMechanic::class, 'product_id', 'id');
    }

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }
    static function product($id_produk){
        $data = Product::where('id', $id_produk)->first();
        return $data;
    }
}
