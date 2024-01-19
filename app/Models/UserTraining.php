<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userhome extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'home_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function home()
    {
        return $this->belongsTo(home::class, 'home_id', 'id');
    }
}
