<?php

namespace App\Filament\App\Pages;

use App\Mail\Contacted;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Support\Facades\Mail;

class Contact extends Page
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static ?string $navigationIcon = '';

    protected static string $view = 'filament.app.pages.contact';

    protected static ?string $title = '';

    protected static ?string $navigationLabel = 'Contact';

    protected static ?int $navigationSort = 3;

    public function getMaxContentWidth(): MaxWidth|string|null
    {
        return MaxWidth::ScreenLarge;
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make([
                TextInput::make('name')
                    ->label('Your Name')
                    ->required(),
                TextInput::make('phone')
                    ->label('Your Phone'),
                TextInput::make('email')
                    ->label('Your E-mail')
                    ->required()
                    ->email(),
                TextInput::make('subject')
                    ->required(),
                Textarea::make('body')
                    ->columnSpanFull(),
                ])->columns(2)
        ])->statePath('data');
    }

    /**
     * form handler
     * @return void
     */
    public function send()  {
        Mail::to('tibebuenyew@gmail.com')->send(new Contacted($this->form->getState()));
        //send notification
        Notification::make()
            ->title('Message sent successfully! I will get back to you ASAP.')
            ->icon('heroicon-o-envelope')
            ->iconColor('success')
            ->success()
            ->send();
        // Reinitialize the form to clear its data.
        $this->form->fill();
    }


}
