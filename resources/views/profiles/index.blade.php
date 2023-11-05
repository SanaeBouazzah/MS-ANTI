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
            <div class="col-md-3 rounded-4 shadow-lg bg-white">
                <h2 class="h4 px-3 pt-4 pb-3 text-center">Discover Some Friends</h2>
                    @foreach ($profiles as $profile)
                    <ul class="flex justify-content-between">
                        <li>hi</li>
                        <li class="py-2"><a href="{{ route('profiles.show', $profile) }}">{{ $profile->name }}</a></li>
                    </ul>
                    @endforeach
                <div class="mx-5 my-4">{{ $profiles->links() }}</div>
            </div>
        </div>
    </div>
</x-master>
