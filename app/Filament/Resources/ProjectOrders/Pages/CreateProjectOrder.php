<?php

namespace App\Filament\Resources\ProjectOrders\Pages;

use App\Filament\Resources\ProjectOrders\ProjectOrderResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProjectOrder extends CreateRecord
{
    protected static string $resource = ProjectOrderResource::class;
}
