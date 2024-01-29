<?php

namespace App\Filament\Resources\PackagesResource\Pages;

use App\Models\Packages;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PackagesResource;

class EditPackages extends EditRecord
{
    protected static string $resource = PackagesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(Packages $record){
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            )
        ];
    }
}
