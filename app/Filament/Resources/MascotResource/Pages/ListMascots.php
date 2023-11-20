<?php

namespace App\Filament\Resources\MascotResource\Pages;

use App\Filament\Resources\MascotResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMascots extends ListRecords
{
    protected static string $resource = MascotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
