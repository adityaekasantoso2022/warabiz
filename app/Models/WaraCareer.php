<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaraCareer extends Model
{
    use HasFactory;
    protected $table = 'wara_careers';
    protected $fillable = [
        'career_title',
        'description',
        'address',
        'image_url',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
        'deleted_at',
    ];
}
