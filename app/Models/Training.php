<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'youtube_url',
        'trailer_url',
        'description',
        'map_location',
        'address',
        'category_id',
        'mentor_id',
        'rating',
        'price',
        'system',
        'level',
        'meeting',
        'per_week',
        'home_info'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function mentor()
    {
        return $this->belongsTo(User::class, 'mentor_id', 'id');
    }

    public function userhomes()
    {
        return $this->hasMany(Userhome::class, 'home_id', 'id');
    }

    public function transactions()
    {
        return $this->hasMany(Transactionhome::class, 'home_id', 'id');
    }

    public function testimonialhomes()
    {
        return $this->hasMany(Testimonialhome::class, 'home_id', 'id');
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'home_id', 'id');
    }
}
