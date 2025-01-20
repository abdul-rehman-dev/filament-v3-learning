<?php

namespace App\Filament\Resources\UserThreeResource\Pages;

use App\Filament\Resources\UserThreeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserThrees extends ListRecords
{
    protected static string $resource = UserThreeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
