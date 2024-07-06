<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class Home extends Page
{
    protected static ?string $navigationIcon = '';

    protected static string $view = 'filament.app.pages.home';

    protected static ?string $title = '';

    protected static ?string $navigationLabel = 'Home';

    protected static ?string $slug = '/';

    /**
     * profile data
     * @var array
     */
    public array $profile = [
        'name' => 'Tibebu Eneyew',
        'links' => [
            'email' => 'tibebuenyew@gmail.com',
            'linkedin' => 'https://www.linkedin.com/in/tibebu-eneyew/',
            'github' => 'https://github.com/Tibebu-ES'
        ]
    ];
}
