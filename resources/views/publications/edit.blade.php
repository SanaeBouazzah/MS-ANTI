@section('title')
    | Edit Post
@endsection
<x-master>
    <div
        class="flex justify-center items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div style="width:600px;" class="bg-white p-5 rounded">
            <h2 class="text-center mb-3 h2">What's on your Mind?</h2>
            <form method="POST" action="{{route('publications.update', $publication)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Title..."
                        value="{{ old('titre', $publication->titre) }}">
                    @error('titre')
                        <p class="text-danger mb-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Description</label>
                    <textarea class="form-control" id="body" name="body" placeholder="Description..." cols="30" rows="5">{{ old('body', $publication->body) }}</textarea>
                    @error('body')
                        <p class="text-danger mb-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <div class="flex justify-content-between">
                        <img src="{{ asset('../storage/' . $publication->image) }}" alt="Image" width="40px"
                            height="40px">
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    @error('image')
                        <p class="text-danger mb-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-dark mt-4 rounded-0 px-5 py-3 form-control">Edit Post</button>
                </div>
            </form>
        </div>
    </div>
</x-master>
