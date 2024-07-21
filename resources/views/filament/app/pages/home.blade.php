<x-filament-panels::page >
    <div class="grid md:grid-cols-3">
        <div class="flex justify-center items-center mb-4 " >
            <div class="relative group">
                <div class="absolute inset-0 bg-primary-500 size-[200px] rounded-full blur group-hover:blur-lg "></div>
                <img src="{{asset('/storage/profile.png')}}" class=" relative size-[200px]  bg-gray-700 rounded-full  " >
            </div>
        </div>
        <div class="md:col-span-2 flex justify-center  flex-col ">
            <h1 class="text-primary-500 font-bold font-mono text-2xl mb-4 text-center md:text-left">{{$profile['name']}}</h1>
            <p class="font-mono mb-4">I am a Full Stack Web Developer with industry experience building websites and web applications.
                I specialize in PHP and have professional experience working with CodeIgniter, Laravel, Livewire, Tailwind and more.
            </p>

            <div class="grid grid-cols-4 mt-4 mb-4 md:px-12 ">
                <div class="flex flex-col items-center justify-center h-12 gap-2 ">
                    <svg class="h-1/2 w-auto" viewBox="0 0 200 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M100 0C73.333 0 56.667 13.333 50 40c10-13.333 21.667-18.333 35-15 7.607 1.9 13.044 7.422 19.063 13.53C113.867 48.48 125.215 60 150 60c26.667 0 43.333-13.333 50-40-10 13.333-21.667 18.333-35 15-7.607-1.9-13.044-7.422-19.063-13.53C136.133 11.52 124.785 0 100 0ZM50 60C23.333 60 6.667 73.333 0 100c10-13.333 21.667-18.333 35-15 7.607 1.904 13.044 7.422 19.063 13.53C63.867 108.48 75.215 120 100 120c26.667 0 43.333-13.333 50-40-10 13.333-21.667 18.333-35 15-7.607-1.9-13.044-7.422-19.063-13.53C86.133 71.52 74.785 60 50 60Z" fill="#38BDF8" class=""></path>
                    </svg>
                    <p class="text-sm font-mono">Tailwind</p>
                </div>
                <div class="flex flex-col items-center justify-center h-12 gap-2">
                    <svg class="h-1/2 w-auto" viewBox="0 0 200 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M155.556 0 200 44.25l-44.444 44.249-44.445-44.25L155.556 0Z" fill="#77C1D2" class=""></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="m44.444 0 92.139 91.735H47.694L0 44.249 44.444 0Z" fill="#2D3441" class=""></path>
                    </svg>
                    <p class="text-sm font-mono">AlpineJS</p>
                </div>
                <div class="flex flex-col items-center justify-center h-12 gap-2">
                    <svg class="h-1/2 w-auto" viewBox="0 0 200 206" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M199.887 46.582c.074.275.112.558.113.842v44.198a3.226 3.226 0 0 1-1.619 2.796l-37.093 21.358v42.333a3.231 3.231 0 0 1-1.611 2.796l-77.428 44.576c-.177.101-.37.166-.564.234-.072.024-.14.069-.217.089a3.254 3.254 0 0 1-1.652 0c-.088-.024-.169-.073-.253-.105-.178-.065-.363-.121-.532-.218L1.619 160.905A3.23 3.23 0 0 1 0 158.109V25.514c0-.29.04-.572.113-.845.024-.093.08-.178.113-.27.06-.17.116-.343.205-.5.06-.105.149-.19.222-.286.092-.129.177-.262.285-.374.093-.093.214-.162.319-.242.117-.097.221-.202.354-.278h.004L40.323.43a3.23 3.23 0 0 1 3.222 0l38.708 22.288h.008c.13.08.238.181.355.274.104.08.221.153.314.242.113.116.193.25.29.378.068.097.161.181.217.286.093.161.145.33.21.5.032.092.088.177.113.274.074.274.112.557.112.842v82.817l32.256-18.575V47.42c0-.282.04-.568.112-.838.029-.096.081-.18.113-.274.065-.169.121-.342.21-.5.06-.104.149-.188.217-.285.097-.129.177-.262.29-.375.093-.092.21-.16.314-.241.121-.097.226-.202.355-.278h.004l38.712-22.289a3.224 3.224 0 0 1 3.222 0l38.708 22.289c.137.08.241.18.362.274.101.08.218.153.31.241.113.117.194.25.29.379.073.097.162.181.218.286.093.157.145.33.209.5.037.092.089.177.113.273Zm-6.34 43.175V53.003l-13.545 7.8-18.714 10.775v36.754l32.263-18.575h-.004Zm-38.707 66.487v-36.778l-18.408 10.514-52.564 30.002v37.125l70.972-40.863ZM6.453 31.094v125.15l70.963 40.859v-37.117l-37.073-20.983-.012-.008-.016-.008c-.125-.073-.23-.177-.346-.266-.101-.081-.218-.145-.306-.234l-.009-.012c-.104-.1-.177-.225-.265-.338-.081-.109-.178-.202-.242-.314l-.004-.012c-.073-.121-.117-.266-.17-.403-.052-.121-.12-.234-.152-.363v-.004c-.04-.153-.049-.314-.065-.471-.016-.121-.048-.242-.048-.363V49.668l-18.71-10.78-13.545-7.79v-.004ZM41.938 6.948 9.687 25.515 41.93 44.08l32.247-18.57L41.93 6.948h.008ZM58.71 122.817l18.71-10.771V31.094l-13.546 7.798L45.16 49.668v80.952l13.55-7.803Zm99.356-93.959-32.247 18.566 32.247 18.567 32.243-18.57-32.243-18.563Zm-3.226 42.72-18.714-10.776-13.546-7.799v36.754l18.71 10.772 13.55 7.803V71.578Zm-74.202 82.825 47.299-27.006 23.644-13.494-32.223-18.554-37.1 21.361-33.815 19.469 32.195 18.224Z" fill="#FF2D20"></path>
                    </svg>
                    <p class="text-sm font-mono">Laravel</p>
                </div>
                <div class="flex flex-col items-center justify-center  h-12 gap-2">
                    <svg class="h-1/2 w-auto" viewBox="0 0 200 228" height="228" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M189.821 151.122c-3.708 5.607-6.525 12.514-14.065 12.514-12.688 0-13.374-19.565-26.069-19.565-12.695 0-12.009 19.565-24.698 19.565-12.688 0-13.374-19.565-26.07-19.565-12.695 0-12.009 19.565-24.697 19.565-12.688 0-13.374-19.565-26.07-19.565-12.695 0-12.009 19.565-24.697 19.565-3.988 0-6.79-1.932-9.152-4.582C5.223 143.253 0 124.737 0 104.941 0 46.984 44.772 0 100 0s100 46.984 100 104.941c0 16.571-3.66 32.246-10.179 46.181Z" fill="#FB70A9"></path>
                        <mask id="a" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="31" y="122" width="133" height="106">
                            <path d="M60.065 140.762v43.467c0 7.8-6.323 14.123-14.123 14.123-7.8 0-14.124-6.323-14.124-14.123v-52.474c2.636-4.838 5.647-9.028 11.076-9.028 8.838 0 11.926 11.102 17.17 18.035Zm53.355 2.265v68.735c0 8.667-7.026 15.693-15.693 15.693-8.666 0-15.692-7.026-15.692-15.693v-77.795c2.955-5.698 6-11.24 12.245-11.24 9.885 0 12.577 13.891 19.14 20.3Zm50.216-1.262v49.9c0 7.801-6.323 14.124-14.123 14.124-7.8 0-14.123-6.323-14.123-14.124v-61.332c2.459-4.209 5.387-7.606 10.275-7.606 9.278 0 12.219 12.236 17.971 19.038Z" fill="#fff"></path>
                        </mask>
                        <g mask="url(#a)">
                            <path d="M60.065 140.762v43.467c0 7.8-6.323 14.123-14.123 14.123-7.8 0-14.124-6.323-14.124-14.123v-52.474c2.636-4.838 5.647-9.028 11.076-9.028 8.838 0 11.926 11.102 17.17 18.035Zm53.355 2.265v68.735c0 8.667-7.026 15.693-15.693 15.693-8.666 0-15.692-7.026-15.692-15.693v-77.795c2.955-5.698 6-11.24 12.245-11.24 9.885 0 12.577 13.891 19.14 20.3Zm50.216-1.262v49.9c0 7.801-6.323 14.124-14.123 14.124-7.8 0-14.123-6.323-14.123-14.124v-61.332c2.459-4.209 5.387-7.606 10.275-7.606 9.278 0 12.219 12.236 17.971 19.038Z" fill="#4E56A6" class=""></path>
                        </g>
                        <mask id="b" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="31" y="97" width="133" height="73">
                            <path d="M60.065 154.084c-2.505-3.068-5.471-5.344-9.76-5.344-10.185 0-12.054 12.835-18.487 18.622v-55.365c0-7.8 6.323-14.123 14.124-14.123 7.8 0 14.123 6.323 14.123 14.123v42.087Zm53.355.99c-2.672-3.555-5.795-6.334-10.535-6.334-11.33 0-12.37 15.887-20.85 20.28v-24.485c0-8.667 7.026-15.693 15.692-15.693 8.667 0 15.693 7.026 15.693 15.693v10.539Zm50.216-2.748c-2.174-2.14-4.752-3.586-8.17-3.586-10.977 0-12.295 14.909-20.076 19.835v-49.696c0-7.8 6.323-14.124 14.123-14.124 7.8 0 14.123 6.324 14.123 14.124v33.447Z" fill="#fff"></path>
                        </mask>
                        <g mask="url(#b)">
                            <path d="M60.065 154.084c-2.505-3.068-5.471-5.344-9.76-5.344-10.185 0-12.054 12.835-18.487 18.622v-55.365c0-7.8 6.323-14.123 14.124-14.123 7.8 0 14.123 6.323 14.123 14.123v42.087Zm53.355.99c-2.672-3.555-5.795-6.334-10.535-6.334-11.33 0-12.37 15.887-20.85 20.28v-24.485c0-8.667 7.026-15.693 15.692-15.693 8.667 0 15.693 7.026 15.693 15.693v10.539Zm50.216-2.748c-2.174-2.14-4.752-3.586-8.17-3.586-10.977 0-12.295 14.909-20.076 19.835v-49.696c0-7.8 6.323-14.124 14.123-14.124 7.8 0 14.123 6.324 14.123 14.124v33.447Z" fill="#000" fill-opacity=".299"></path>
                        </g>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M189.821 151.122c-3.708 5.607-6.525 12.514-14.065 12.514-12.688 0-13.374-19.565-26.069-19.565-12.695 0-12.009 19.565-24.698 19.565-12.688 0-13.374-19.565-26.07-19.565-12.695 0-12.009 19.565-24.697 19.565-12.688 0-13.374-19.565-26.07-19.565-12.695 0-12.009 19.565-24.697 19.565-3.988 0-6.79-1.932-9.152-4.582C5.223 143.253 0 124.737 0 104.941 0 46.984 44.772 0 100 0s100 46.984 100 104.941c0 16.571-3.66 32.246-10.179 46.181Z" fill="#FB70A9" class=""></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M168.182 161.546c26.205-38.985 26.883-82.227 2.031-129.728C188.634 50.69 200 76.587 200 105.162c0 16.509-3.794 32.124-10.55 46.007-3.844 5.586-6.764 12.467-14.579 12.467-2.674 0-4.834-.806-6.689-2.09Z" fill="#E24CA6"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M94.639 131.119c34.775 0 49.417-20.174 49.417-48.824s-22.125-55.022-49.417-55.022c-27.293 0-49.417 26.372-49.417 55.022s14.642 48.824 49.417 48.824Z" fill="#fff"></path>
                        <path d="M81.352 83.916c10.234 0 18.531-9.158 18.531-20.454 0-11.297-8.296-20.455-18.531-20.455S62.82 52.165 62.82 63.462c0 11.296 8.297 20.454 18.532 20.454Z" fill="#030776"></path>
                        <path d="M78.263 68.182c5.118 0 9.266-4.227 9.266-9.44 0-5.215-4.148-9.441-9.266-9.441-5.117 0-9.266 4.226-9.266 9.44 0 5.214 4.149 9.44 9.266 9.44Z" fill="#fff"></path>
                    </svg>
                    <p class="text-sm font-mono">Livewire</p>
                </div>


            </div>
            {{--    social links--}}

            <div class="flex justify-center gap-4 mt-4 mb-6">
                {{-- Mail  --}}
                @if(isset($profile['links']['email']))
                    <div class=" ">
                        <a href= "mailto: {{$profile['links']['email']}}" target="_blank">
                            <svg class="rounded-full p-2 ring-1 ring-primary-500 hover:bg-primary-500  h-10  fill-primary-500 hover:fill-gray-500" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/></svg>
                        </a>
                    </div>
                @endif
                {{-- Linkedin  --}}
                @if(isset($profile['links']['linkedin']))
                    <div class="">
                        <a href= "{{$profile['links']['linkedin']}}" target="_blank">
                            <svg class="rounded-full p-2 ring-1 ring-primary-500 hover:bg-primary-500  h-10  fill-primary-500 hover:fill-gray-500" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                @endif
                {{-- Github  --}}
                @if(isset($profile['links']['github']))
                    <div class="">
                        <a href= "{{$profile['links']['github']}}" target="_blank">
                            <svg class="rounded-full p-2 ring-1 ring-primary-500 hover:bg-primary-500  h-10  fill-primary-500 hover:fill-gray-500" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                    </div>
                @endif
            </div>
        </div>

    </div>




</x-filament-panels::page>
