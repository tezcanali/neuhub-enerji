<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PowerStationResource\Pages;
use App\Filament\Resources\PowerStationResource\RelationManagers;
use App\Models\PowerStation;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use RalphJSmit\Filament\SEO\SEO;

class PowerStationResource extends Resource
{

    protected static ?string $model = PowerStation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Santral';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('İkonlar')
                            ->schema([
                                Repeater::make('icons.company')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Şirket İsmi')
                                            ,
                                        TextInput::make('description')
                                            ->label('Kısa Metin')
                                            ,
                                    ])
                                    ->label('Şirket')
                                    ->addable(false)
                                    ->reorderable(false)
                                    ->deletable(false)
                                    ->columns(2)
                                    ->translatable(),
                                Repeater::make('icons.location')
                                    ->schema([
                                        TextInput::make('year')
                                            ->label('Yıl')
                                            ,
                                        TextInput::make('location')
                                            ->label('Konum')
                                            ,
                                        TextInput::make('description')
                                            ->label('Kısa Metin')
                                            ,
                                    ])
                                    ->label('Konum')
                                    ->addable(false)
                                    ->reorderable(false)
                                    ->deletable(false)
                                    ->columns(3)
                                    ->translatable(),
                                Repeater::make('icons.energy')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Başlık')
                                            ,
                                        TextInput::make('description')
                                            ->label('Kısa Metin')
                                            ,
                                    ])
                                    ->label('Enerji')
                                    ->addable(false)
                                    ->reorderable(false)
                                    ->deletable(false)
                                    ->columns(2)
                                    ->translatable(),
                                Repeater::make('icons.turbin')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Başlık')
                                            ,
                                        TextInput::make('description')
                                            ->label('Kısa Metin')
                                            ,
                                    ])
                                    ->label('Türbin')
                                    ->addable(false)
                                    ->reorderable(false)
                                    ->deletable(false)
                                    ->columns(2)
                                    ->translatable(),
                                Repeater::make('icons.tuketim')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Başlık')
                                            ,
                                        TextInput::make('description')
                                            ->label('Kısa Metin')
                                            ,
                                    ])
                                    ->label('Tüketim')
                                    ->addable(false)
                                    ->reorderable(false)
                                    ->deletable(false)
                                    ->columns(2)
                                    ->translatable(),
                                Repeater::make('icons.emisyon')
                                    ->schema([
                                        TextInput::make('title')
                                            ->label('Başlık')
                                            ,
                                        TextInput::make('description')
                                            ->label('Kısa Metin')
                                            ,
                                    ])
                                    ->label('Emisyon')
                                    ->addable(false)
                                    ->reorderable(false)
                                    ->deletable(false)
                                    ->columns(2)
                                    ->translatable(),
                            ]),
                        Tabs\Tab::make('Galeri')
                            ->schema([
                                Repeater::make('galleries')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->label('Görsel')
                                            ->image()
                                            ->maxSize(150000)
                                            ->disk('public')
                                            ->directory('img')

                                            ->optimize('webp'),
                                    ])
                                    ->collapsible()
                                    ->label('Galeri')
                                    ->translatable(),
                            ]),
                        Tabs\Tab::make('Dosyalar')
                            ->schema([
                                TextInput::make('file1_name')
                                    ->label('PDF 1 Başlık')
                                    ->translatable(),
                                FileUpload::make('file1')
                                    ->label('PDF 1')
                                    ->maxSize(150000)
                                    ->preserveFilenames()
                                    ->disk('public')
                                    ->directory('file')
                                    ->optimize('webp')
                                    ->translatable(),
                                TextInput::make('file2_name')
                                    ->label('PDF 2 Başlık')
                                    ->translatable(),
                                FileUpload::make('file2')
                                    ->label('PDF 2')
                                    ->preserveFilenames()
                                    ->maxSize(150000)
                                    ->disk('public')
                                    ->directory('file')
                                    ->optimize('webp')
                                    ->translatable(),
                            ]),
                        Tabs\Tab::make('SEO')
                            ->schema([
                                SEO::make()
                            ]),
                    ])
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 4,
                        '2xl' => 4,
                    ]),
                Section::make('Genel')
                    ->schema([
                        TextInput::make('title')
                            ->label('Başlık')

                            ->translatable(),
                        TextInput::make('slug')
                            ->label('Slug')

                            ->translatable(),
                        TextInput::make('location')
                            ->label('Konum')

                            ->translatable(),
                        FileUpload::make('image')
                            ->label('Kapak Görsel')
                            ->image()
                            ->maxSize(150000)
                            ->disk('public')
                            ->directory('img')

                            ->optimize('webp')
                            ->translatable(),
                    ])
                    ->columnSpan([
                        'sm' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
            ])->columns([
                'sm' => 2,
                'xl' => 6,
                '2xl' => 6,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->size(50)
                    ->label(__('table.labels.image')),
                TextColumn::make('title')
                    ->label(__('table.labels.title')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('visit')
                    ->label(__('filament-fabricator::page-resource.actions.visit'))
                    ->url(fn ($record) => url('/santrallerimiz/' . $record->slug))
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->openUrlInNewTab()
                    ->color('success'),
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
            'index' => Pages\ListPowerStations::route('/'),
            'create' => Pages\CreatePowerStation::route('/create'),
            'edit' => Pages\EditPowerStation::route('/{record}/edit'),
        ];
    }
}
