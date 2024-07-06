<x-filament-panels::page>
    <div class="flex gap-x-4 flex-col md:flex-row">
        <!-- form  -->
        <div class="mt-4 rounded-lg  pb-2 bg-gray-700 drop-shadow-xl ">
            <h1 class="p-2 text-center text-primary-500 text-2xl">Let's work together</h1>
            <form wire:submit="send" >
                {{ $this->form }}

                <div class="mt-2 flex justify-center">
                    <button class="bg-primary-500 hover:bg-primary-700 font-bold text-gray-600 p-2 rounded-lg " type="submit">
                        Send message
                        <span wire:loading><x-filament::loading-indicator class="h-5 w-5" /></span>
                    </button>

                </div>
            </form>
        </div>

        <!-- phone and email -->
        <div class="p-16">
            <div class="flex gap-x-4">
                <div class="bg-gray-700 p-2 text-primary-400 rounded-lg drop-shadow-lg">
                    <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>

                </div>
                <div class="flex flex-col">
                    <p class="text-sm text-primary-400">Phone</p>
                    <h1 class="">(+251) - 912 - 045 - 775</h1>
                </div>
            </div>
            <div class="flex gap-x-4 mt-4">
                <div class="bg-gray-700 p-2 text-primary-400 rounded-lg drop-shadow-lg">
                    <svg class=" size-6  fill-primary-500 " role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/></svg>
                </div>
                <div class="flex flex-col">
                    <p class="text-sm text-primary-400">Email</p>
                    <h1 class="">tibebuenyew@gmail.com</h1>
                </div>
            </div>
        </div>

    </div>

</x-filament-panels::page>
