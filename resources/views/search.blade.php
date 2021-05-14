<x-app-layout >
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('search the world of animated GIF') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full text-center p-6 bg-white border-b border-gray-200">
                    Type your keyword here to search
                </div>

                <div class="w-full px-4 md:px-8 lg:px-12">

                    <form class="w-full py-6 flex justify-center" action="/search" method="get">                
                        <input class="flex-1 border-gray-500 hover:ring-2 ring-gray-300" name='q' id='q' type="text" 
                                placeholder="Search"
                                value="{{old('q')}}" >
                        
                        <button class="text-white bg-blue-400 hover:bg-blue-600 focus:outline-none px-2" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                       
                    </form>
                    <div class="w-full">
                        @if ($pagination)
                            @if ($pagination['total_count'] == 0)
                                <div>There are no search results</div>     
                                
                            @else
                                <x-gifs-grid :data="$data" />

                                <x-pagination-links :pagination="$pagination" />

                            
                            @endif
                        @endif
                        
                    </div>

                </div>

              
                
            </div>
        </div>
    </div>
</x-app-layout>
