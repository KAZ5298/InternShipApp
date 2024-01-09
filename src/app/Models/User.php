<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'fullname',
        'fullname_huri',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function page_00_covers()
    {
        return $this->hasMany(Page_00_cover::class);
    }

    public function page_01s()
    {
        return $this->hasMany(Page_01::class);
    }

    public function page_02s()
    {
        return $this->hasMany(Page_02::class);
    }

    public function page_03s()
    {
        return $this->hasMany(Page_03::class);
    }

    public function page_04s()
    {
        return $this->hasMany(Page_04::class);
    }

    public function page_05s()
    {
        return $this->hasMany(Page_05::class);
    }

    public function page_06s()
    {
        return $this->hasMany(Page_06::class);
    }

    public function page_07s()
    {
        return $this->hasMany(Page_07::class);
    }

    public function page_08s()
    {
        return $this->hasMany(Page_08::class);
    }

    public function page_09_1s()
    {
        return $this->hasMany(Page_09_1::class);
    }

    public function page_09_2s()
    {
        return $this->hasMany(Page_09_2::class);
    }

    public function page_10s()
    {
        return $this->hasMany(Page_10::class);
    }

    public function page_11_1s()
    {
        return $this->hasMany(Page_11_1::class);
    }

    public function page_11_2s()
    {
        return $this->hasMany(Page_11_2::class);
    }


    public function page_12_1s()
    {
        return $this->hasMany(Page_12_1::class);
    }

    public function page_12_2s()
    {
        return $this->hasMany(Page_12_2::class);
    }

    public function page_13s()
    {
        return $this->hasMany(Page_13::class);
    }

    public function page_14s()
    {
        return $this->hasMany(Page_14::class);
    }

    public function page_15s()
    {
        return $this->hasMany(Page_15::class);
    }
}
