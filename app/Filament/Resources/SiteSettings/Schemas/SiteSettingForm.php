<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('site_name')
                    ->default(null),
                TextInput::make('site_tagline')
                    ->default(null),
                Textarea::make('site_description')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('logo')
                    ->default(null),
                TextInput::make('favicon')
                    ->default(null),
                FileUpload::make('default_og_image')
                    ->image(),
                TextInput::make('contact_email')
                    ->email()
                    ->default(null),
                TextInput::make('contact_phone')
                    ->tel()
                    ->default(null),
                Textarea::make('address')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('hero_name')
                    ->default(null),
                TextInput::make('hero_title')
                    ->default(null),
                Textarea::make('hero_subtitle')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('hero_button_text')
                    ->default(null),
                TextInput::make('hero_button_link')
                    ->default(null),
                FileUpload::make('hero_image')
                    ->image(),
            ]);
    }
}
