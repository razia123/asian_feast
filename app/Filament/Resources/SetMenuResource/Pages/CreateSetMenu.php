<?php

namespace App\Filament\Resources\SetMenuResource\Pages;

use App\Filament\Resources\SetMenuResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSetMenu extends CreateRecord
{
    protected static string $resource = SetMenuResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}