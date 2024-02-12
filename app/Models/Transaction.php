<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'fullname',
        'email',
        'phone_number',
        'address', // Perbaikan penulisan field 'address'
        'payment_method',
        'waralaba_id',
        'waralaba_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
