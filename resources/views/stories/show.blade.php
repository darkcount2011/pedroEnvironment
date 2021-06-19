<x-app-layout>
    @section('content')
    <div name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            The story: {{$story->name}}
        </h2>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <div class="text-green-100 text-center">
                            {{$story->text}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
</x-app-layout>
