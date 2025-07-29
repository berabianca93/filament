<?php

namespace App\Filament\Resources\CurosResource\Pages;

use App\Filament\Resources\CurosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCuros extends EditRecord
{
    protected static string $resource = CurosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
