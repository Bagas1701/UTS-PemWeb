<?php

namespace App\Filament\Admin\Resources\EkskulResource\Pages;

use App\Filament\Admin\Resources\EkskulResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEkskul extends EditRecord
{
    protected static string $resource = EkskulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
