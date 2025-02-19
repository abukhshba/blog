<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class BlogAnalysis extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            BaseWidget\Stat::make('Blogs', Blog::query()->count())
                ->icon('heroicon-o-currency-dollar')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('info'),

            BaseWidget\Stat::make('Users', User::query()->count())
                ->icon('heroicon-o-currency-dollar')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('success'),

        ];
    }
}
