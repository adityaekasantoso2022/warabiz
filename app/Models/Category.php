<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_name'
    ];

    public function home()
    {
        return $this->hasMany(home::class, 'category_id', 'id');
    }
}
