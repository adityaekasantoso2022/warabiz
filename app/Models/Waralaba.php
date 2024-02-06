<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Waralaba extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'image_url',
        'category_id',
        'waralaba_name',
        'price',
        'contact',
        'brochure_link',
        'since',
        'outlet_total',
        'license_duration',
        'description',
        'royalty'
    ];

    public function home()
    {
        return $this->hasMany(home::class, 'category_id', 'id');
    }
}
