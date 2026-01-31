<?php

namespace App\Filament\Resources\SiteVisits\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SiteVisitForm
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
                TextInput::make('address')
                    ->required(),
                TextInput::make('service_id')
                    ->required()
                    ->numeric(),
                DatePicker::make('preferred_date')
                    ->required(),
                TextInput::make('preferred_time_id')
                    ->required()
                    ->numeric(),
                Textarea::make('notes')
                    ->default(null)
                    ->columnSpanFull(),
                Toggle::make('confirmation')
                    ->required(),
            ]);
    }
}
