<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class Profile extends Page
{
    use InteractsWithForms;

    public ?array $data = [
        'name' => 'Your name',
        'title' => 'Your title',
        'bio' => 'Your bio',
        'skills' => ['PHP','Laravel'],
        'photo' => 'profile.png',
        'email' => 'test@example.com',
        'linkedin' => 'https://linkedin.com/',
        'github' => 'https://github.com/',
        'phone' =>  '+251-900-000-000'
    ];

    public ?\App\Models\Profile $profile;


    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static string $view = 'filament.pages.profile';

    public function mount () {
        $this->profile =  \App\Models\Profile::first();
        if(!empty($this->profile )){
           $this->data = $this->profile->toArray();
           $this->form->fill($this->data);
        }

    }

    public function form(Form $form): Form
    {
        return $form->schema([
            Split::make([
                Section::make([
                    TextInput::make('name')
                        ->required(),
                    TextInput::make('title')
                        ->required(),
                    TagsInput::make('skills')
                        ->placeholder('New skill')
                        ->splitKeys(['Tab',' '])
                        ->suggestions([
                            'tailwindcss',
                            'alpinejs',
                            'laravel',
                            'livewire',
                            'jQuery',
                            'PHP',
                            'CodeIgniter'
                        ]),

                ]),
                Section::make([
                    FileUpload::make('photo')
                        ->image()
                        ->avatar()
                        ->imageEditor()
                        ->directory('profile')
                        ->required()
                        ->getUploadedFileNameForStorageUsing( fn (TemporaryUploadedFile $file) : string => 'profile-photo.'.$file->getClientOriginalExtension()),
                    Textarea::make('bio')
                        ->rows(5)
                        ->required(),
                ])
            ]),

            Fieldset::make('Social')
                ->schema([
                    TextInput::make('email')
                        ->email()
                        ->prefixIcon('heroicon-m-envelope'),
                    TextInput::make('github')
                        ->url()
                        ->prefixIcon('heroicon-m-globe-alt'),
                    TextInput::make('linkedin')
                        ->url()
                        ->prefixIcon('heroicon-m-globe-alt'),
                    TextInput::make('phone')
                        ->tel()
                        ->prefixIcon('heroicon-m-phone')

                ])

        ])
            ->statePath('data')->model(\App\Models\Profile::class);
    }

    public function save (){
        if(empty($this->profile)){
            $this->profile = \App\Models\Profile::create($this->form->getState());
        }else{
            if($this->profile->update($this->form->getState())){
                //show success message
                Notification::make()
                    ->title('Profile Updated!')
                    ->success()
                    ->send();
            }{
                //show error message
            }
        }
    }
}
