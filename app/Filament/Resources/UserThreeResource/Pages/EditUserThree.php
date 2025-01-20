<?php

namespace App\Filament\Resources\UserThreeResource\Pages;

use App\Filament\Resources\UserThreeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserThree extends EditRecord
{
    protected static string $resource = UserThreeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
