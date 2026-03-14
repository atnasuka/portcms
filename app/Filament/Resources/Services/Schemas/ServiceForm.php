<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('SEO Optimization'),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->placeholder('seo-optimization'),

                TextInput::make('category')
                    ->maxLength(255)
                    ->placeholder('Digital Marketing'),

                Textarea::make('short_description')
                    ->rows(3)
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->rows(8)
                    ->columnSpanFull(),

                TextInput::make('purpose_title')
                    ->maxLength(255)
                    ->placeholder('The First Purpose'),

                FileUpload::make('icon')
                    ->image()
                    ->disk('public')
                    ->directory('services')
                    ->visibility('public'),

                FileUpload::make('card_image')
                    ->image()
                    ->disk('public')
                    ->directory('services')
                    ->visibility('public'),

                FileUpload::make('cover_image')
                    ->image()
                    ->disk('public')
                    ->directory('services')
                    ->visibility('public'),

                TextInput::make('background_color')
                    ->default('#F4F5F8')
                    ->placeholder('#F4F5F8'),

                TextInput::make('icon_background_color')
                    ->default('#4920E5')
                    ->placeholder('#4920E5'),

                Toggle::make('is_featured')
                    ->default(false),

                Toggle::make('is_active')
                    ->default(true),

                TextInput::make('order_no')
                    ->numeric()
                    ->default(0)
                    ->required(),

                TextInput::make('seo_title')
                    ->maxLength(255),

                Textarea::make('seo_description')
                    ->rows(3)
                    ->maxLength(160)
                    ->columnSpanFull(),

                Textarea::make('seo_keywords')
                    ->rows(3)
                    ->columnSpanFull(),

                FileUpload::make('og_image')
                    ->image()
                    ->disk('public')
                    ->directory('services')
                    ->visibility('public'),
            ]);
    }
}