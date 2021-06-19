<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Alle Stories
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <a type="button" class="btn btn-block btn-primary" href="{{route('stories.create')}}">make
                        a beautiful story</a>
                                        <autocomplete-component> </autocomplete-component>

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
