<?php

namespace App\Filament\Resources\PlacasResource\Pages;

use App\Filament\Resources\PlacasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlacas extends EditRecord
{
    protected static string $resource = PlacasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
