<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CitationResource\Pages;
use App\Filament\Resources\CitationResource\RelationManagers;
use App\Models\Citation;
use App\Models\Owner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CitationResource extends Resource
{
    protected static ?string $model = Citation::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\select::make('mascot_id')
                    ->relationship('mascot','name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\select::make('owner_id')
                        ->relationship('owner','name')
                        ->required()
                        ->searchable()
                        ->preload(),
                        
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
                    ]),
                    
                Forms\Components\select::make('owner_id')
                    ->relationship('Owner','name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
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
                    ,
                    ])
                    ,
                    
                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\TimePicker::make('time')
                    ->required(),
                Forms\Components\select::make('query_type')
                ->options([
                    'urgencia' => 'urgencia',
                    'medicina-general' => 'medicina general',
                    'cirugia' => 'cirugia',
                    'control' => 'control',
                    'limpieza' => 'limpieza',
                    'terapia' => 'terapia',])
                    ->required()
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('mascot.name')
                    
                    ->sortable(),
                Tables\Columns\TextColumn::make('owner.name')
                ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('time'),
                Tables\Columns\TextColumn::make('query_type')
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
               
                Tables\Filters\SelectFilter::make('mascot_id')
                ->relationship('mascot','name'),
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
            'index' => Pages\ListCitations::route('/'),
            'create' => Pages\CreateCitation::route('/create'),
            'edit' => Pages\EditCitation::route('/{record}/edit'),
        ];
    }    
}
