<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',

        'user_id'
    ];

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function home()
    {
        return $this->belongsTo(home::class, 'home_id', 'id');
    }

    public function transaction()
    {
        return $this->hasMany(TransactionProduct::class, 'product_id', 'id');
    }
}
