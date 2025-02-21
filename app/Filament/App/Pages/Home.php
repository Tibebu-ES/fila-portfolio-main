<?php

namespace App\Filament\App\Pages;

use App\Models\Profile;
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
        'name' => 'Your name',
        'title' => 'Your title',
        'bio' => 'Your bio',
        'skills' => ['PHP','Laravel'],
        'photo',
        'email' => 'test@example.com',
        'linkedin' => 'https://linkedin.com/',
        'github' => 'https://github.com/',
        'phone' =>  '+251-900-000-000'
    ];


    public function mount (){
        $profileModel =  Profile::first();
        if(!empty($profileModel)){
            $this->profile = $profileModel->toArray();
        }
    }
}
