<?php

namespace App\Filament\Resources\Tools\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ToolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('tagline')
                    ->default(null),
                TextInput::make('logo')
                    ->default(null),
            ]);
    }
}
