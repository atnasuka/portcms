<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'short_description',
        'description',
        'purpose_title',
        'icon',
        'card_image',
        'cover_image',
        'background_color',
        'icon_background_color',
        'is_featured',
        'is_active',
        'order_no',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'og_image',
    ];
}