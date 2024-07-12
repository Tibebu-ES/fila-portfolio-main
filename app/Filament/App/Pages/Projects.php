<?php

namespace App\Filament\App\Pages;

use App\Models\Project;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\IconPosition;
use Filament\Support\Enums\IconSize;

class Projects extends Page
{

    public array $projects = [];

    public array $selectedProject;

    public int $selectedProjectIndex;

    protected static ?string $navigationIcon = '';

    protected static string $view = 'filament.app.pages.projects';

    public function mount (){
        foreach (Project::all() as $project){
            $this->projects[] = $project->toArray();
        }
        if(!empty($this->projects)){
            $this->selectedProject =  $this->projects[0];
            $this->selectedProjectIndex = 0;
        }
    }

    public function showNextProject () {
        if(empty($this->projects)){
            return;
        }
        $this->selectedProjectIndex = ($this->selectedProjectIndex +1 ) % count($this->projects);
        $this->selectedProject = $this->projects[$this->selectedProjectIndex];
    }

    public function showPreviousProject () {
        if(empty($this->projects)){
            return;
        }
        $this->selectedProjectIndex = $this->selectedProjectIndex == 0 ? count($this->projects) - 1 : $this->selectedProjectIndex - 1;
        $this->selectedProject = $this->projects[$this->selectedProjectIndex];
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('previous')
                ->icon('heroicon-m-chevron-left')
                ->button()
                ->outlined()
                ->labeledFrom('md')
                ->action(fn() => $this->showPreviousProject())
                ->hidden(empty($this->projects)),
            Action::make('next')
                ->icon('heroicon-m-chevron-right')
                ->iconPosition(IconPosition::After)
                ->button()
                ->outlined()
                ->labeledFrom('md')
                ->action(fn() => $this->showNextProject())
                ->hidden(empty($this->projects))
        ];
    }




}
