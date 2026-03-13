<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectOrder extends Model
{
    protected $fillable = [
        'project_id',
        'name',
        'email',
        'phone',
        'category',
        'budget',
        'message',
        'status',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}