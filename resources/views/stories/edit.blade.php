<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Change the story: {{$story->name}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container">

                            <form method="POST" action="{{route('stories.update',$story->id)}}">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Naam</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                           value="{{$story->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="text">Text</label>
                                    <input type="text" name="text" class="form-control" id="text"
                                           value="{{$story->text}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
