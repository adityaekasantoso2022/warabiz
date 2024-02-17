<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'fullname',
        'email',
        'phone_number',
        'address',
        'payment_method',
        'waralaba_id',
        'waralaba_name',
        'status',
    ];

    // Definisikan relasi dengan model Waralaba
    public function waralaba()
    {
        return $this->belongsTo(Waralaba::class, 'waralaba_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUuidAttribute()
    {
        return $this->attributes['id'];
    }

    public function getStatusTextAttribute()
    {
        switch ($this->attributes['status']) {
            case 0:
                return 'Proses Verifikasi Pembayaran';
            case 2:
                return 'Proses Pembangunan';
            case 3:
                return 'Persiapan Pembukaan';
            case 4:
                return 'Selesai';
            default:
                return 'Menunggu Pembayaran';
        }
    }
}
