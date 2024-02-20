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
        'company_name',
        'image_url',
        'logo_url',
        'min_salary',
        'max_salary',
        'profile_company',
        'work_requirements',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];
}
