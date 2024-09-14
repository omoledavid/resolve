<?php

namespace App\Filament\Resources\CoinsResource\Pages;

use App\Filament\Resources\CoinsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoins extends EditRecord
{
    protected static string $resource = CoinsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
