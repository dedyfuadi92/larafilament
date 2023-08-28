<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\Widget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    // protected static string $view = 'filament.resources.post-resource.widgets.stats-overview';
    protected function getCards(): array
    {
        return [
            Card::make('All Post', Post::all()->count())
                ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up'),
            Card::make('Published', Post::where('status', true)->count())
                ->description('32k increase'),
            Card::make('Draft', Post::where('status', false)->count())
                ->description('32k increase')
        ];
    }
}
