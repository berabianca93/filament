<?php

namespace App\Filament\Resources\CoresResource\Pages;

use App\Filament\Resources\CoresResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCores extends EditRecord
{
    protected static string $resource = CoresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
