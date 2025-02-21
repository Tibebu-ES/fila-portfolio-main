<x-filament-panels::page>
    <form wire:submit="save" >
        {{ $this->form }}

        <div class="mt-2 flex justify-center">
            <button class="bg-primary-500 hover:bg-primary-700 font-bold text-white p-2 rounded-lg " type="submit">
                Save
                <span wire:loading><x-filament::loading-indicator class="h-5 w-5" /></span>
            </button>

        </div>
    </form>

</x-filament-panels::page>
