<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Enums\Enums\ProductVariationTypesEnum;
use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;

class ProductVariationTypes extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected static ?string $navigationIcon = 'heroicon-s-squares-plus';
    protected static ?string $title = 'Product Variations';
    
    public function form(Form $form):Form {
      return $form->schema([
      Repeater::make ('variationTypes')
                 ->label(false)
                 ->collapsible(1)
                 ->relationship()
                 ->defaultItems(1)
                 ->addActionLabel("Add Variation Type")
                 ->columns(2)
                 ->columnSpan(2)
                 ->schema([
                  TextInput::make('name')->required(),
                  Select::make('type')
                  ->options(ProductVariationTypesEnum::labels())
                  ->required(),
                  Repeater::make('options')
                  ->relationship()
                  ->collapsible()
                  ->schema([
                    TextInput::make('name')
                    ->required()->columnSpan(2),
                    SpatieMediaLibraryFileUpload::make('images')
                    ->image()
                    ->openable()
                    ->multiple()
                    ->panelLayout('grid')
                    ->collection('images')
                    ->reorderable()
                    ->appendFiles()
                    ->preservefilenames()
                    ->columnSpan(2),
                  ])
                  ->columnSpan(2)
                  ,

                 ]),


      ]);
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
