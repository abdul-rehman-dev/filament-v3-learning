<?php

namespace App\Filament\Resources\UserTwoResource\Pages;

use App\Filament\Resources\UserTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserTwo extends EditRecord
{
    protected static string $resource = UserTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
