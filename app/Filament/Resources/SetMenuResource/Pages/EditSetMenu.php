<?php

namespace App\Filament\Resources\SetMenuResource\Pages;

use App\Filament\Resources\SetMenuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSetMenu extends EditRecord
{
    protected static string $resource = SetMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
