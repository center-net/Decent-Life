<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Translatable\HasTranslations;
use phpDocumentor\Reflection\Types\Self_;

class Setting extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasTranslations;

    public $translatable = ['title', 'content', 'address', 'team'];

    protected $guarded = [];
    protected $table = 'settings';

    public static function checkSettings()
    {
        $settings = Self::all();
        if (count($settings) < 1) {
            $data = [
                'id' => 1,
            ];
            Self::create($data);
        }

        return Self::first();
    }
}
