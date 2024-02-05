<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Waralaba extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_id',
        'waralaba_name',
        'price',
        'contact',
        'brochure_link',
        'since',
        'outlet_total',
        'license_duration'
    ];

    public function home()
    {
        return $this->hasMany(home::class, 'category_id', 'id');
    }
}
