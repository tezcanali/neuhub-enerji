<?php

namespace App\Filament\Fabricator\PageBlocks\Global;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Documents extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('global.documents')
            ->schema([
                Repeater::make('documents')
                ->schema([
                    TextInput::make('title')
                    ->label('Başlık'),
                    FileUpload::make('file')
                        ->label('Döküman PDF')
                        ->maxSize(150000)
                        ->disk('public')
                        ->required()
                        ->directory('file'),
                ])
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
