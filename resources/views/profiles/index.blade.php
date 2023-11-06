@section('title')
    | Profile
@endsection
<x-master>
   
    <div class="container">
        <div class="row my-4">
            <div class="col-md-9">
              @if (session('message'))
                <x-alert-message type="success">{{session('message')}}</x-alert-message>
              @endif
            </div>
            <div class="col-md-3 rounded-4 shadow-lg bg-white px-3">
                <h2 class="h4 pt-4 pb-3 text-center">Discover Some Friends</h2>
                    @foreach ($profiles as $profile)
                    <ul>
                      <a href="{{ route('profiles.show', $profile) }}" class="bg-light flex justify-content-between my-2">
                        <li><img src="{{"../storage/$profile->image"}}" style="width:50px; height:50px; object-fit:cover; display:block; border-radius:50%;" alt=""></li>
                        <li class="py-2 mx-2"><p>{{ $profile->name }}</p></li>
                      </a>
                    </ul>
                    @endforeach
                <div class="mx-5 my-4">{{ $profiles->links() }}</div>
            </div>
        </div>
    </div>
</x-master>
