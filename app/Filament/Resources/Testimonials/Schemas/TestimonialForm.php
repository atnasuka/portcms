<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('project_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('client_name')
                    ->required(),
                TextInput::make('client_position')
                    ->default(null),
                TextInput::make('client_photo')
                    ->default(null),
                TextInput::make('company_logo')
                    ->default(null),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('rating')
                    ->required()
                    ->numeric()
                    ->default(5),
                Toggle::make('is_featured')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('order_no')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
