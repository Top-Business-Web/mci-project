<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';

    protected $fillable = [
        'image',
        'title_ar',
        'title_en',
        'client_count',
        'vision_ar',
        'vision_en',
        'goals_ar',
        'goals_en',
        'mission_ar',
        'mission_en',
        'desc_ar',
        'desc_en',
    ];
}
