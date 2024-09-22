<?php

namespace App\Filament\Resources\PowerStationResource\Pages;

use App\Filament\Resources\PowerStationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPowerStations extends ListRecords
{
    protected static string $resource = PowerStationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

}
