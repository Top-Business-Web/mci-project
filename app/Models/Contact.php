<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'services',
        'message',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class,'services','id');
    }
}
