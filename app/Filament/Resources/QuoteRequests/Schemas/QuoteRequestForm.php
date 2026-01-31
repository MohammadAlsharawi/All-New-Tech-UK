<?php

namespace App\Filament\Resources\QuoteRequests\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class QuoteRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('post_code')
                    ->required(),
                TextInput::make('property_type_id')
                    ->required()
                    ->numeric(),
                TextInput::make('service_id')
                    ->required()
                    ->numeric(),
                Textarea::make('requirements')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('preferred_contact_method_id')
                    ->required()
                    ->numeric(),
                TextInput::make('budget_range_id')
                    ->required()
                    ->numeric(),
                TextInput::make('file')
                    ->default(null),
                Toggle::make('confirmation')
                    ->required(),
            ]);
    }
}
