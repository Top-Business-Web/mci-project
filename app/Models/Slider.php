<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';

    protected $fillable = [
        'image_about',
        'image_services',
        'image_product',
        'image_faqs',
        'image_project'
    ];

    public $timestamps = false;
}

