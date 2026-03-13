<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'project_id',
        'client_name',
        'client_position',
        'client_photo',
        'company_logo',
        'content',
        'rating',
        'is_featured',
        'is_active',
        'order_no',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}