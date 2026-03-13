<?php

namespace App\Filament\Resources\ProjectOrders\Pages;

use App\Filament\Resources\ProjectOrders\ProjectOrderResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProjectOrders extends ListRecords
{
    protected static string $resource = ProjectOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
