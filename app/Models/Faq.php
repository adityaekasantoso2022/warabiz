<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'email',
        'kategori_pertanyaan',
        'pesan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
