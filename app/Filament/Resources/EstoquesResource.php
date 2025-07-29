<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EstoquesResource\Pages;
use App\Filament\Resources\EstoquesResource\RelationManagers;
use App\Models\Estoques;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EstoquesResource extends Resource
{
    protected static ?string $model = Estoques::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nome')->label('Nome')->required()->maxLength(255),
                TextInput::make('endereço')->label('Endereço')->required()->maxLength(255),
                TextInput::make('quantidade')
                    ->label('Quantidade')
                    ->required()
                    ->numeric()
                    ->rules(['integer', 'min:0'])


            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nome')->label('Nome')->sortable()->searchable(),
                TextColumn::make('endereço')->label('Endereço')->sortable()->searchable(),
                TextColumn::make('quantidade')->label('Quantidade')->sortable()->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEstoques::route('/'),
            'create' => Pages\CreateEstoques::route('/create'),
            'edit' => Pages\EditEstoques::route('/{record}/edit'),
        ];
    }
}
