<?php

namespace App\Filament\Resources\UserThreeResource\Pages;

use App\Filament\Resources\UserThreeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUserThree extends ViewRecord
{
    protected static string $resource = UserThreeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
