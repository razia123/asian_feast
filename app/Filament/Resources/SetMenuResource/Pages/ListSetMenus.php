<?php

namespace App\Filament\Resources\SetMenuResource\Pages;

use App\Filament\Resources\SetMenuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSetMenus extends ListRecords
{
    protected static string $resource = SetMenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
