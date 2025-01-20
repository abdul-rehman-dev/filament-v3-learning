<?php

namespace App\Filament\Resources\UserTwoResource\Pages;

use App\Filament\Resources\UserTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserTwos extends ListRecords
{
    protected static string $resource = UserTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
