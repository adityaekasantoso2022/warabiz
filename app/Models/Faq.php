<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Faq extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'email',
        'kategori_pertanyaan',
        'pesan',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
