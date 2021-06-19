<x-app-layout>
   @section('content')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Maak Groep
        </h2>
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
                            <form method="POST" action="{{route('stories.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Naam</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Titel">
                                </div>

                                <div class="form-group">
                                    <label for="text">Text</label>
                                    <input type="text" class="form-control" id="text" name="text"
                                           placeholder="Text">
                                </div>
                                <button type="submit" class="btn btn-primary">Make the Story</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
