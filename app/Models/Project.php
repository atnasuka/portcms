<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'category',
        'cover',
        'about',
        'purpose_title',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'og_image',
        'is_featured',
        'is_active',
        'order_no',
    ];

    public function screenshots()
    {
        return $this->hasMany(ProjectScreenshot::class)->orderBy('order_no');
    }

    public function tools()
    {
        return $this->belongsToMany(Tool::class, 'project_tools');
    }

    public function tags()
    {
        return $this->belongsToMany(ProjectTag::class, 'project_tag_items');
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class)->orderBy('order_no');
    }

    public function orders()
    {
        return $this->hasMany(ProjectOrder::class);
    }
}