<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReportResource\Pages;
use App\Filament\Resources\ReportResource\RelationManagers;
use App\Models\Report;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReportResource extends Resource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box-arrow-down';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\select::make('consultation_id')
                    ->relationship('consultation','treatment')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([ Forms\Components\select::make('citation_id')
                    ->relationship('citation','query_type')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([Forms\Components\select::make('mascot_id')
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
                    ->required()]),
                Forms\Components\select::make('professional_id')
                    ->relationship('professional','name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([Forms\Components\TextInput::make('name')
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
                    ->maxLength(20),]),
                Forms\Components\RichEditor::make('realization')
                    ->required()
                    ->maxLength(9999999),
                Forms\Components\RichEditor::make('treatment')
                    ->required()
                    ->maxLength(99999999),])
                    ,
                Forms\Components\select::make('professional_id')
                ->relationship('professional','name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([Forms\Components\TextInput::make('name')
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
                    ->maxLength(20),])
                    ,
                Forms\Components\select::make('mascot_id')
                ->relationship('mascot','name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([Forms\Components\select::make('owner_id')
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
                    ->required()])
                    ,
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
                    ])
                    ,
                    Forms\Components\DatePicker::make('date_entered')
                    ->required(),
                    Forms\Components\DatePicker::make('date_deperture')
                    ->required(),
                    Forms\Components\TimePicker::make('time_entered')
                    ->required(),
                    Forms\Components\TimePicker::make('time_deperture')
                    ->required(),
                Forms\Components\RichEditor::make('characteristics')
                    ->required()
                    ->maxLength(99999999999999),
                
                Forms\Components\RichEditor::make('general_note')
                    ->required()
                    ->maxLength(99999999999999),
                Forms\Components\RichEditor::make('important_note')
                    ->required()
                    ->maxLength(99999999999999)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('consultation.treatment')
                    
                    ->numeric()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('professional.name')
                    ->numeric()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mascot.name')
                    ->numeric()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('owner.name')
                    ->numeric()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('characteristics')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_entered')
                    ->date()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_deperture')
                    ->date()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('time_entered')
                    ->time()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('time_deperture')
                    ->time()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('general_note')
                    ->searchable(),
                Tables\Columns\TextColumn::make('important_note')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->searchable()
                    ->sortable(),
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
                Tables\Filters\SelectFilter::make('professional_id')
                ->relationship('professional','name'),
                Tables\Filters\SelectFilter::make('consultation_id')
                ->relationship('consultation','treatment')
                
                
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
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReport::route('/create'),
            'edit' => Pages\EditReport::route('/{record}/edit'),
        ];
    }    
}
