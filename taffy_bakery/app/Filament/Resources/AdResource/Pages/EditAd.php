<?php

namespace App\Filament\Resources\AdResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Resources\AdResource;
use App\Models\Ad;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;

class EditAd extends EditRecord
{
    protected static string $resource = AdResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(Ad $record){
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            )
        ];
    }
}
