<?php

namespace App\Models\Backend;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Translatable\HasTranslations;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $translatable = ['name'];

    protected $guarded = [];
    protected $table = 'users';


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
    ];

    // public function getStatusAttribute($value)
    // {
    //     echo $value === ('yes') ? '<span class="badge badge-pill badge-success mt-1">'.trans("general_tran.yes").'</span>' : '<span class="badge badge-pill badge-danger mt-1">'.trans("general_tran.no").'</span>' ;

    // }
}
