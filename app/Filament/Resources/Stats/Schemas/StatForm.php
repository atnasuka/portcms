<?php

namespace App\Filament\Resources\Stats\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class StatForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('value')
                    ->label('Value')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('$230M'),

                TextInput::make('label')
                    ->label('Label')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Valuation'),

                TextInput::make('order_no')
                    ->label('Order')
                    ->numeric()
                    ->default(0)
                    ->required(),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }
}