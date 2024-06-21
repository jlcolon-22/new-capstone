<?php

namespace App\Livewire;

use Filament\Infolists\Components\Grid;
use Filament\Support\Colors\Color;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class AdminWidget extends BaseWidget
{
    protected int | string | array $grid = [
        'sm' => 1,
        'xl' => 1,
    ];
    protected function getStats(): array
    {
        return [

            Stat::make('EMPLOYEES', '192')->icon('heroicon-o-users'),
            Stat::make('CUSTOMERS', '21')->icon('heroicon-o-users'),
            Stat::make('PROJECTS', '3')->icon('heroicon-o-building-office-2')->url(route('admin.login'))

        ];
    }
}
