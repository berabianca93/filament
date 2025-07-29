<?php

namespace App\Filament\Resources\PlacasResource\Pages;

use App\Filament\Resources\PlacasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlacas extends ListRecords
{
    protected static string $resource = PlacasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
