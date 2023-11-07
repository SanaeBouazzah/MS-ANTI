@section('title')
    | Profile
@endsection
<x-master>
    <div class="container ">
        <div class="row my-4">
            <div class="col-md-8 rounded-4 shadow-lg bg-white p-3 column-spacing" >
              @if (session('message'))
                <x-alert-message type="success">{{session('message')}}</x-alert-message>
              @endif
              <div>
                hi
              </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3 parent">
                <div class="rounded-4 shadow-lg bg-white p-3 to_scroll">
                  <h2 class="h4 pt-4 pb-3 text-center">Discover Some Friends</h2>
                    @foreach ($profiles as $profile)
                    <ul>
                      <a href="{{ route('profiles.show', $profile) }}" class="bg-light flex justify-content-between my-2 rounded px-3 py-2 touch">
                        <li><img src="{{"../storage/$profile->image"}}" style="width:50px; height:50px; object-fit:cover; display:block; border-radius:50%;" alt=""></li>
                        <li class="py-2 mx-2"><p>{{ $profile->name }}</p></li>
                      </a>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-master>
