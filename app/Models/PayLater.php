<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayLater extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_home_id',
        'id_card_image',
        'selfie_photo',
    ];

    public function transaction_home()
    {
        return $this->belongsTo(Transactionhome::class, 'transaction_home_id', 'id');
    }
}
