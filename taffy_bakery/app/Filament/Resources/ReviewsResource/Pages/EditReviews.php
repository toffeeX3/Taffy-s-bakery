<?php

namespace App\Filament\Resources\ReviewsResource\Pages;

use App\Models\Reviews;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ReviewsResource;

class EditReviews extends EditRecord
{
    protected static string $resource = ReviewsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(Reviews $record){
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            )
        ];
    }
}
