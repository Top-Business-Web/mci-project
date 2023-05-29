<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'images',
        'title_ar',
        'title_en',
        'sub_title_ar',
        'sub_title_en',
        'sku',
        'category_id',
        'tags',
        'desc_ar',
        'desc_en',
        'pdf',
        'details',
    ];

    protected $casts = [
        'tags' => 'array',
        'images' => 'array',
        'details' => 'array',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function quote()
    {
        return $this->hasMany(Quote::class);
    }
}
