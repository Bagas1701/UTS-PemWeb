<?php

namespace App\Filament\Admin\Resources\PendaftaranMuridResource\Pages;

use App\Filament\Admin\Resources\PendaftaranMuridResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPendaftaranMurids extends ListRecords
{
    protected static string $resource = PendaftaranMuridResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
