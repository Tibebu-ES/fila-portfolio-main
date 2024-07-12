<x-filament-panels::page>

    @if(!empty($selectedProject))
        <div class="grid md:grid-cols-2 gap-8">
            {{--  project info--}}
            <div class="mb-4">
                <h1 class="text-2xl">{{$selectedProject['title']}}</h1>
                <p class=" text-sm py-4">{{$selectedProject['description']}}</p>
                <div class="flex gap-2 ">
                    @foreach($selectedProject['skill_tags'] as $skill)
                        <span class="text-xs text-primary-500 ring-primary-500 ring-1 rounded-md p-1 font-mono">{{$skill}}</span>
                    @endforeach
                </div>
                {{--                     site url and repo url --}}
                <div class="mt-4 py-4 border-t border-t-white/10 flex gap-x-4">
                    @if(!empty($selectedProject['site_url']))
                        <div class="">
                            <a href= "{{$selectedProject['site_url']}}" target="_blank">
                                <svg class="rounded-full p-2 ring-1 ring-primary-500 hover:bg-primary-500  h-8  fill-primary-500 hover:text-gray-500 hover:fill-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>

                            </a>
                        </div>
                    @endif
                    @if(!empty($selectedProject['repo_url']))
                        <div class="">
                            <a href= "{{$selectedProject['repo_url']}}" target="_blank">
                                <svg class="rounded-full p-2 ring-1 ring-primary-500 hover:bg-primary-500  h-8  fill-primary-500 hover:fill-gray-500" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                            </a>
                        </div>
                    @endif
                </div>


            </div>

            {{-- featured image--}}
            <div class="order-first md:order-2 w-full overflow-x-hidden flex justify-center rounded-xl" >
                <img class=" h-[200px] max-w-none  aspect-auto rounded-lg drop-shadow-xl" src="{{asset('/storage/'.$selectedProject['featured_image'])}}">
            </div>

        </div>
    @else
        <div class="flex justify-center">
            <h1>Projects data not added yet!</h1>
        </div>
    @endif

</x-filament-panels::page>
