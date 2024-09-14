<?php

namespace App\Filament\Resources\CoinsResource\Pages;

use App\Filament\Resources\CoinsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoins extends ListRecords
{
    protected static string $resource = CoinsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
