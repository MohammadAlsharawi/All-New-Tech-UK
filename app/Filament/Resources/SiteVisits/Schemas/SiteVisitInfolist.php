<?php

namespace App\Filament\Resources\SiteVisits\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SiteVisitInfolist
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
                TextEntry::make('address'),
                TextEntry::make('service_id')
                    ->numeric(),
                TextEntry::make('preferred_date')
                    ->date(),
                TextEntry::make('preferred_time_id')
                    ->numeric(),
                IconEntry::make('confirmation')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
