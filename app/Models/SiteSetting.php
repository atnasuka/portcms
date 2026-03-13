<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'site_name',
        'site_tagline',
        'site_description',
        'logo',
        'favicon',
        'default_og_image',
        'contact_email',
        'contact_phone',
        'address',
        'hero_name',
        'hero_title',
        'hero_subtitle',
        'hero_button_text',
        'hero_button_link',
        'hero_image',
    ];
} 