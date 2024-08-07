<?php

namespace App\Providers\Filament;

use Filament\Enums\ThemeMode;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\MaxWidth;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AppPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('app')
            ->path('/')
            ->colors([
                'primary' => "#00ff99",
                'gray' => "#1c1c22"

            ])
            ->discoverResources(in: app_path('Filament/App/Resources'), for: 'App\\Filament\\App\\Resources')
            ->discoverPages(in: app_path('Filament/App/Pages'), for: 'App\\Filament\\App\\Pages')
            ->pages([
                //Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/App/Widgets'), for: 'App\\Filament\\App\\Widgets')
            ->widgets([
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
            ])
            ->topNavigation(true)
            ->favicon(fn() => $this->app->environment('production') ? secure_asset('storage/favicon.png') : asset('storage/favicon.png'))
            ->brandLogo(fn() => view('logos.logo-dark'))
            ->darkModeBrandLogo(fn() => view('logos.logo-dark'))
            ->viteTheme('resources/css/filament/app/theme.css')
            ->darkMode(false,true)
            ->renderHook(
            // This line tells us where to render it
                'panels::body.end',
                // This is the view that will be rendered
                fn () => view('footer'),
            )
            ->renderHook(
            // This line tells us where to render it
                'panels::head.start',
                // This is the view that will be rendered
                fn () => view('analyticsTag'),
            )
            ->maxContentWidth(MaxWidth::ScreenLarge);
    }
}
