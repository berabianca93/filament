<?php

namespace App\Filament\Resources\CurosResource\Pages;

use App\Filament\Resources\CurosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCuros extends ListRecords
{
    protected static string $resource = CurosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
