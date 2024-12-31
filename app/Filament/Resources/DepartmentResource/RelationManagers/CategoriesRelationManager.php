<?php

namespace App\Filament\Resources\DepartmentResource\RelationManagers;

use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoriesRelationManager extends RelationManager
{
    protected static string $relationship = 'categories';

    public function form(Form $form): Form
    {   
        $department = $this->getOwnerRecord();

        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Select::make('parent_id')
                    ->options(function() use ($department){
                        return Category::query()
                        ->where('department_id',$department->id)
                        ->pluck('name','id')
                        ->toArray();
                    })
                    ->label('Parent Category')
                    ->preload()
                    ->searchable(),

                    Checkbox::make('active')

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
