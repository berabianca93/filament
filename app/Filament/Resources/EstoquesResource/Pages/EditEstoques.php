<?php

namespace App\Filament\Resources\EstoquesResource\Pages;

use App\Filament\Resources\EstoquesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEstoques extends EditRecord
{
    protected static string $resource = EstoquesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
