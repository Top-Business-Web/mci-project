<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $table = 'quotes';

    protected $fillable = [
        'product_id',
        // 'system_complete',
        // 'usage',
        // 'system_type',
        // 'panels_place',
        // 'your_roof',
        // 'message',
        'first_name',
        'last_name',
        'phone',
        'email',
        // 'prefer_contact',
        'address',
        // 'city',
        // 'zip',
        // 'state',
        // 'country'

    ];


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
