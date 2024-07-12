<?php

namespace App\Filament\App\Pages;

use App\Models\Service;
use Filament\Pages\Page;
use Filament\Support\Enums\MaxWidth;

class Services extends Page
{
    public array $services = [];

    protected static ?string $navigationIcon = '';

    protected static string $view = 'filament.app.pages.services';

    public function getMaxContentWidth(): MaxWidth|string|null
    {
        return MaxWidth::ScreenLarge;
    }

    public function mount() {
        foreach (Service::all() as $service){
            $this->services[] = $service->toArray();
        }
    }
}
