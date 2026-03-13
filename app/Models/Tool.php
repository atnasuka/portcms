<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $fillable = [
        'name',
        'tagline',
        'logo',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_tools');
    }
}