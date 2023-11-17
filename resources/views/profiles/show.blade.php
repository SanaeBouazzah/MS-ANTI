@section('title')
    | {{ $profile->name }}
@endsection
<x-master>

    <div class="row m-5 ">
        <div class="col">
            <div class="card" style="width:500px">
                <img class="card-img-top" src="{{ asset('../storage/' . $profile->image) }}" alt="Card image"
                    style="width:500px; height:300px;object-fit:cover;display:block;">
                <div class="card-body">
                    <h4 class="card-title">{{ $profile->name }}</h4>
                    <p class="card-text">{{ $profile->bio }}</p>
                    @auth
                        @if (auth()->user()->id === $profile->id)
                            <div class="flex justify-content-between">
                                <a href="{{ route('profiles.edit', $profile) }}"
                                    class="btn btn-dark rounded-0 px-5 mt-3 mx-2">Modify Informations</a>
                                <form action="{{ route('profiles.destroy', $profile) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-dark rounded-0 px-5 mt-3 mx-2">Delete</button>
                                </form>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                @foreach ($profile->publications as $publication)
                    <div class="my-2 col-sm">
                        <div class="card pb-3" style="width:300px">
                            @if ($publication->image)
                                <img class="card-img-top" src="{{ asset('../storage/' . $publication->image) }}"
                                    alt="Card image" style="width:500px; height:300px;object-fit:cover;display:block;">
                            @endif
                            <div class="card-body">
                                <h4 class="card-title">{{ $publication->titre }}</h4>
                                <p class="card-text">{{ $publication->body }}</p>
                            </div>
                            @auth
                                @if (auth()->user()->id === $publication->profile_id)
                                    <div class="flex justify-content-between">
                                        <a href="{{ route('publications.edit', $publication) }}"
                                            class="btn btn-dark rounded-0 px-4 mt-3 mx-2">Edit Post</a>
                                        <form action="{{ route('publications.destroy', $publication) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-dark rounded-0 px-5 mt-3 mx-2">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div>
          <p class="bg-dark text-white px-4 py-2 d-inline rounded-5 m-3">Views : {{$compteur}}</p>
        </div>
    </div>
</x-master>
