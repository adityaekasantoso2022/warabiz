<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactionhome extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'home_id',
        'transaction_code',
        'name',
        'email',
        'transaction_total',
        'transaction_status',
        'type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function home()
    {
        return $this->belongsTo(home::class, 'home_id', 'id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'transaction_home_id', 'id');
    }

    public function pay_later()
    {
        return $this->hasOne(PayLater::class, 'transaction_home_id', 'id');
    }
}
