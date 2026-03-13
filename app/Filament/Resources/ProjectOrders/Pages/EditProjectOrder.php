<?php

namespace App\Filament\Resources\ProjectOrders\Pages;

use App\Filament\Resources\ProjectOrders\ProjectOrderResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProjectOrder extends EditRecord
{
    protected static string $resource = ProjectOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
