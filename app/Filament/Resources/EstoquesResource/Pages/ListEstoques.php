<?php

namespace App\Filament\Resources\EstoquesResource\Pages;

use App\Filament\Resources\EstoquesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEstoques extends ListRecords
{
    protected static string $resource = EstoquesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
