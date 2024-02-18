<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // Import Str untuk generate UUID

class Waralaba extends Model
{
    protected $primaryKey = 'id'; // Tetapkan 'id' sebagai primary key
    public $incrementing = false; // Tetapkan incrementing ke false karena primary key bukan integer
    protected $keyType = 'string'; // Tetapkan tipe data primary key ke string

    protected $fillable = [
        'id',
        'logo',
        'image_url_1',
        'image_url_2',
        'image_url_3',
        'image_url_4',
        'image_url_5',
        'category_id',
        'waralaba_name',
        'price',
        'contact',
        'brochure_link',
        'since',
        'outlet_total',
        'license_duration',
        'description',
        'royalty',
        'income',
        'rating',
        'concept',
        'concept_size',
        'created_at'
    ];

    public function isEmpty()
    {
        // Periksa apakah properti tertentu yang menandakan bahwa model ini kosong
        return empty($this->attributes['waralaba_name']);
    }

    // public function home()
    // {
    //     return $this->hasMany(Home::class, 'category_id', 'id');
    // }
}
