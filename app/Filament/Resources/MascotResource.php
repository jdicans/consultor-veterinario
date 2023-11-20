<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MascotResource\Pages;
use App\Filament\Resources\MascotResource\RelationManagers;
use App\Models\Mascot;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MascotResource extends Resource
{
    protected static ?string $model = Mascot::class;

    protected static ?string $navigationIcon = 'heroicon-o-bug-ant';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\select::make('owner_id')
                    ->relationship('owner','name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('number')
                    ->required()
                    ->minLength(10)
                    ->maxLength(20),
                Forms\Components\TextInput::make('CC')
                    ->required()
                    ->minLength(10)
                    ->maxLength(20)
                    ,]),
                    
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\select::make('tapy_animal')
                ->options([
                    'gato' => 'gato',
                    'perro' => 'perro',
                    'conejo' => 'conejo',
                    'otro' => 'otro',
                ])
                    ->required()
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('owner.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tapy_animal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('owner_id')
                ->relationship('owner','name'),
                
            
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
            
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMascots::route('/'),
            'create' => Pages\CreateMascot::route('/create'),
            'edit' => Pages\EditMascot::route('/{record}/edit'),
        ];
    }    
}
