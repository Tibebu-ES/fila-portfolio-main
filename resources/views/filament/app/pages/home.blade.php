<x-filament-panels::page >
    <div class="grid md:grid-cols-3">
        <div class="flex justify-center items-center mb-4 " >
            <div class="relative group">
                <div class="absolute inset-0 bg-primary-500 size-[200px] rounded-full blur group-hover:blur-lg "></div>
                <img src="{{asset('/storage/'.$profile['photo'])}}" class=" relative size-[200px]  bg-gray-700 rounded-full  " >
            </div>
        </div>
        <div class="md:col-span-2 flex justify-center  flex-col ">
            {{--    name and title        --}}
            <h1 class="text-primary-500 font-bold font-mono text-2xl mb-2 text-center md:text-left border-b border-b-white/10">{{$profile['name']." | ".$profile['title']}} </h1>
            {{--  bio          --}}
            <p class="font-mono mb-2 py-2 border-b border-b-white/10">{{$profile['bio']}}</p>
            {{-- skills - or core technoligies           --}}
            <p class="font-mono text-xs py-2 ">Core Technologies:</p>
            <div class="flex gap-2 ">
                @foreach($profile['skills'] as $skill)
                    <span class="text-xs text-primary-500 ring-primary-500 ring-1 rounded-md p-1 font-mono">{{$skill}}</span>
                @endforeach
            </div>



        </div>

    </div>




</x-filament-panels::page>
