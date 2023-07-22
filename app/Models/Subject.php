<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','active'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}


