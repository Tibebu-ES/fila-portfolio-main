<?php

namespace App\Providers\Filament;

use Filament\Enums\ThemeMode;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\View\PanelsRenderHook;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets as GoogleWidgets;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $widgets = [
            Widgets\AccountWidget::class,
            Widgets\FilamentInfoWidget::class,
        ];
        if($this->app->environment('production')){
            $widgets[] = GoogleWidgets\PageViewsWidget::class;
            $widgets[] = GoogleWidgets\VisitorsWidget::class;
            $widgets[] = GoogleWidgets\ActiveUsersOneDayWidget::class;
            $widgets[] = GoogleWidgets\ActiveUsersSevenDayWidget::class;
            $widgets[] = GoogleWidgets\ActiveUsersTwentyEightDayWidget::class;

        }
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => "#00ff99",
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets($widgets)
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
                Authenticate::class,
            ])
            ->favicon(fn() => $this->app->environment('production') ? secure_asset('storage/favicon.png') : asset('storage/favicon.png'))
            ->brandLogo(fn() => view('logos.logo'))
            ->darkModeBrandLogo(fn() => view('logos.logo-dark'))
            ->defaultThemeMode(ThemeMode::Dark)
            ->renderHook(
                PanelsRenderHook::SCRIPTS_AFTER,
                fn (): string => Blade::render(
                    '<script>
                            localStorage.setItem(\'theme\', \'dark\')
                            </script>')
            );
    }
}
