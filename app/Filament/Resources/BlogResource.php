<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
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

class BlogResource extends Resource
{

    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'İçerik';

    protected static ?string $label = 'Blog';

    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Body')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Başlık')
                                    ->translatable(),
                                RichEditor::make('content')
                                    ->label('İçerik')
                                    ->translatable(),
                            ]),
                        Tabs\Tab::make('Info')
                            ->columns([
                                'sm' => 3,
                                'xl' => 6,
                                '2xl' => 12,
                            ])
                            ->schema([
                                Select::make('author_id')
                                    ->relationship('author', 'name')
                                    ->options(User::all()->pluck('name', 'id'))
                                    ->label('Yazar')
                                    ->required()
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 1,
                                        '2xl' => 3,
                                    ])
                                    ->native(false),
                                Select::make('category_id')
                                    ->relationship('category', 'title')
                                    ->options(BlogCategory::all()->pluck('title', 'id'))
                                    ->required()
                                    ->label('Kategori')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 2,
                                        '2xl' => 3,
                                    ])
                                    ->native(false),
                                Select::make('status')
                                    ->options([
                                        'published' => 'Published',
                                        'draft' => 'Draft'
                                    ])
                                    ->label('Durum')
                                    ->required()
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 1,
                                        '2xl' => 3,
                                    ])
                                    ->native(false),
                                DateTimePicker::make('created_at')
                                    ->seconds(false)
                                    ->native(false)
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 2,
                                        '2xl' => 3,
                                    ])
                                    ->label('Oluşturma Tarihi'),
                                FileUpload::make('image')
                                    ->label('Blog Görsel')
                                    ->image()
                                    ->maxSize(150000)
                                    ->disk('public')
                                    ->directory('blog_images')
                                    ->acceptedFileTypes([
                                        'image/*'
                                    ])
                                    ->translatable()
                                    ->columnSpan([
                                        'sm' => 3,
                                        'xl' => 6,
                                        '2xl' => 12,
                                    ]),
                            ]),
                        Tabs\Tab::make('Galleries')
                            ->schema([
                                Repeater::make('galleries')
                                    ->label('Galeri')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->label('Görsel')
                                            ->image()
                                            ->maxSize(150000)
                                            ->disk('public')
                                            ->directory('img')
                                            ->optimize('webp'),
                                    ])
                                    ->translatable(),
                            ]),
                        Tabs\Tab::make('SEO')
                            ->schema([
                                SEO::make(),
                            ]),
                    ])->columnSpan(2),
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
                TextColumn::make('status')
                    ->label(__('table.labels.status'))
                ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'draft' => 'gray',
                        'published' => 'success',
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('visit')
                    ->label(__('filament-fabricator::page-resource.actions.visit'))
                    ->url(fn ($record) => url('/haberler/' . $record->slug))
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
