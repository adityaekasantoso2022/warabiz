<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'phone_number',
        'address',
        'waralaba_id',
        'waralaba_name',
        'payment_method'

    ];
}
