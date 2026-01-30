<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'image',
        'title',
        'description',
        'points',
        'property_type_id',
    ];

    protected $casts = [
        'points' => 'array',
    ];

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
