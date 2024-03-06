<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifiedOwner extends Model
{
    use HasFactory;

    protected $table = 'verified_owner';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'fullname',
        'email',
        'address',
        'phone_number',
        'ktp_upload',
        'nik_number',
        'company_name',
        'company_category',
        'company_pict',
        'npwp',
        'bank_name',
        'account_number',
        'status',
    ];

    // If you want to include timestamps (created_at, updated_at)
    public $timestamps = true;

    // In the VerifiedOwner model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
