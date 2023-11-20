<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConsultationResource\Pages;
use App\Filament\Resources\ConsultationResource\RelationManagers;
use App\Models\Consultation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConsultationResource extends Resource
{
    protected static ?string $model = Consultation::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\select::make('citation_id')
                    ->relationship('citation','query_type')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm(
                        [Forms\Components\select::make('mascot_id')
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
                    ->required()]
                ),
                Forms\Components\select::make('professional_id')
                    ->relationship('professional','name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm(
                        [Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\select::make('speciality')
                    ->options([
                        'urgencia' => 'urgencia',
                    'medicina-general' => 'medicina general',
                    'cirugia' => 'cirugia',
                    'control' => 'control',
                    'limpieza' => 'limpieza',
                    'terapia' => 'terapia',
                    ])
                    ->required()
                    
                    ,
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('number')
                    ->required()
                    ->minLength(10)
                    ->maxLength(20),]
                ),
                Forms\Components\RichEditor::make('realization')
                    ->required()
                    ->maxLength(9999999),
                Forms\Components\RichEditor::make('treatment')
                    ->required()
                    ->maxLength(99999999),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('citation.query_type')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('professional.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('realization')
                    ->searchable(),
                Tables\Columns\TextColumn::make('treatment')
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
                
                
                Tables\Filters\SelectFilter::make('professional_id')
                ->relationship('professional','name'),
                Tables\Filters\SelectFilter::make('citation_id')
                ->relationship('citation','query_type'),
                
               
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
            'index' => Pages\ListConsultations::route('/'),
            'create' => Pages\CreateConsultation::route('/create'),
            'edit' => Pages\EditConsultation::route('/{record}/edit'),
        ];
    }    
}
