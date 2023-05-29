<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'title_ar',
        'title_en',
        'desc_ar',
        'desc_en',
    ];

    public function project()
    {
        return $this->hasMany(Project::class);
    }

    public function contact()
    {
        return  $this->hasMany(Contact::class,'services','id');
    }
}
