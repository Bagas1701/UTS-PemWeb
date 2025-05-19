<?php

namespace App\Filament\Admin\Resources\EkskulResource\Pages;

use App\Filament\Admin\Resources\EkskulResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEkskuls extends ListRecords
{
    protected static string $resource = EkskulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
