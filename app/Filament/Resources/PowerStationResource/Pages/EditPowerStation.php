<?php

namespace App\Filament\Resources\PowerStationResource\Pages;

use App\Filament\Resources\PowerStationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPowerStation extends EditRecord
{

    protected static string $resource = PowerStationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
