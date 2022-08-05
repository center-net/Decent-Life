<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Translatable\HasTranslations;

class Initiative extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasTranslations;

    public $translatable = ['title', 'description', 'subject'];

    protected $guarded = [];
    protected $table = 'initiatives';

    public function getStatusAttribute($value)
    {
        echo $value === ('yes') ? '<span class="badge badge-pill badge-success mt-1">'.trans("general_tran.yes").'</span>' : '<span class="badge badge-pill badge-danger mt-1">'.trans("general_tran.no").'</span>' ;

    }
}
