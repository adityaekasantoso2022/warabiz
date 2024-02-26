<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Transaction;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
    public function isOwner()
    {
        return $this->role === 'owner';
    }

    public function savedJobs()
    {
        return $this->hasMany(SavedJob::class, 'user_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function faqs(): HasMany
    {
        return $this->hasMany(Faq::class);
    }
}
