<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Alle Groepen
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a type="button" class="btn btn-block btn-primary" href="{{route('stories.create')}}">make
                        a beautiful story</a>
                    <div class="row">
                        @foreach($stories as $story)
                            <div class="col-4">
                                <div class="card mt-6">
                                    <div class="card-header">
                                        {{$story->name}}
                                    </div>
                                        <div class="row">
                                            <a href="{{route('stories.show',$story->id)}}"
                                               class="btn m-1 btn-primary">Show</a>
                                            <a href="{{route('stories.edit',$story->id)}}"
                                               class="btn m-1 btn-primary">Edit</a>
                                            <form method="POST"
                                                  action="{{route('stories.destroy',$story->id)}}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="m-1 btn btn-danger">Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
