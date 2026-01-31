<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('challenges')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('solutions')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('service_id')
                    ->required()
                    ->numeric(),
                TextInput::make('property_type_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
