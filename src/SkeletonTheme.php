<?php

namespace VendorName\Skeleton;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class SkeletonTheme implements Plugin
{
    public function getId(): string
    {
        return 'skeleton';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('skeleton', __DIR__ . '/../resources/dist/skeleton.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->colors([
                'primary' => Color::Amber,
                'gray' => Color::Gray,
                'warning' => Color::Amber,
                'danger' => Color::Rose,
                'success' => Color::Green,
            ])
            ->theme('skeleton');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
