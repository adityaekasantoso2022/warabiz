<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'fullname',
        'email',
        'phone_number',
        'address',
        'waralaba_id',
        'waralaba_name',
        'payment_method',
        'status'
    ];
}
