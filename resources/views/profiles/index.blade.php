@section('title')
    | Profile
@endsection
<x-master>

    <div class="container">
        <div class="row my-4">
            <div class="col-md-9">hi</div>
            <div class="col-md-3 rounded-4 shadow-lg bg-white">
                <h2 class="h4 px-3 pt-4 pb-3 text-center">Discover Some Friends</h2>
                <table class="table">
                    @foreach ($profiles as $profile)
                        <tr>
                            <td class="px-3"><a href="{{ route('profiles.show', $profile) }}">{{ $profile->name }}</a>
                            </td>
                            <td class="px-3">{{ Str::limit($profile->bio, 10) }}</td>
                        </tr>
                    @endforeach
                </table>
                <div class="mx-5 my-4">{{ $profiles->links() }}</div>
            </div>
        </div>
    </div>
</x-master>
