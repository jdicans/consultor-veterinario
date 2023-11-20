<?php

namespace App\Filament\Resources\MascotResource\Pages;

use App\Filament\Resources\MascotResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMascot extends EditRecord
{
    protected static string $resource = MascotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
