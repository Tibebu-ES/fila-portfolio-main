<x-filament-panels::page>

    <div class="grid md:grid-cols-2  gap-8">
        @foreach($services as $service)
            <div class="bg-gray-700 rounded-lg drop-shadow-lg p-6">
                <h1 class="text-primary-500 text-2xl">{{$service['title']}}</h1>
                <p class="text-sm p-2">{{$service['description']}}</p>
            </div>
        @endforeach
    </div>

</x-filament-panels::page>
