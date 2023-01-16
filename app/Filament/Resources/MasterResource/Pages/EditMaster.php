<?php

namespace App\Filament\Resources\MasterResource\Pages;

use App\Filament\Resources\MasterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaster extends EditRecord
{
    protected static string $resource = MasterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
