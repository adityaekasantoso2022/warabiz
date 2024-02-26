<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedJob extends Model
{
    use HasFactory;

    protected $table = 'is_saved_jobs';
    protected $fillable = [
        'user_id',
        'career_id',
        'is_saved'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function career()
    {
        return $this->belongsTo(WaraCareer::class, 'career_id');
    }
}

