<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;
    protected $table = 'job_applications';

    protected $primaryKey = 'application_id';

    protected $fillable = [
        'user_id',
        'career_id',
        'full_name',
        'gender',
        'date_of_birth',
        'religion',
        'email',
        'phone_number',
        'address',
        'last_education',
        'portfolio_url',
        'work_experience',
        'status',
    ];

    // Definisikan relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Definisikan relasi dengan model WaraCareer
    public function waraCareer()
    {
        return $this->belongsTo(WaraCareer::class, 'career_id');
    }

    public function getStatusLabelAttribute()
    {
        switch ($this->attributes['status']) {
            case 30301:
                return 'Ditolak';
            case 30302:
                return 'Sedang Diperiksa';
            case 30303:
                return 'Diterima';
            default:
                return 'Unknown';
        }
    }
}
