<?php

namespace App\Filament\Admin\Resources\PendaftaranMuridResource\Pages;

use App\Filament\Admin\Resources\PendaftaranMuridResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendaftaranMurid extends EditRecord
{
    protected static string $resource = PendaftaranMuridResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
