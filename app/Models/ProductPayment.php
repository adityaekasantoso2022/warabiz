<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_product_id',
        'image',
        'name',
        'type',
    ];

    public function transaction_product()
    {
        return $this->belongsTo(TransactionProduct::class);
    }
}
