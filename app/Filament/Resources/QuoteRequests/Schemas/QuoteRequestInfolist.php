<?php

namespace App\Filament\Resources\QuoteRequests\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class QuoteRequestInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('first_name'),
                TextEntry::make('last_name'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('phone'),
                TextEntry::make('post_code'),
                TextEntry::make('property_type_id')
                    ->numeric(),
                TextEntry::make('service_id')
                    ->numeric(),
                TextEntry::make('preferred_contact_method_id')
                    ->numeric(),
                TextEntry::make('budget_range_id')
                    ->numeric(),
                TextEntry::make('file'),
                IconEntry::make('confirmation')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
