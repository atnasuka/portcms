<?php

namespace App\Filament\Resources\ProjectOrders;

use App\Filament\Resources\ProjectOrders\Pages\CreateProjectOrder;
use App\Filament\Resources\ProjectOrders\Pages\EditProjectOrder;
use App\Filament\Resources\ProjectOrders\Pages\ListProjectOrders;
use App\Filament\Resources\ProjectOrders\Schemas\ProjectOrderForm;
use App\Filament\Resources\ProjectOrders\Tables\ProjectOrdersTable;
use App\Models\ProjectOrder;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProjectOrderResource extends Resource
{
    protected static ?string $model = ProjectOrder::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Project Order';

    public static function form(Schema $schema): Schema
    {
        return ProjectOrderForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProjectOrdersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProjectOrders::route('/'),
            'create' => CreateProjectOrder::route('/create'),
            'edit' => EditProjectOrder::route('/{record}/edit'),
        ];
    }
}
