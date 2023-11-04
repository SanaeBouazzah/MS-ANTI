@section('title')
    | Home
@endsection
<x-master>
    <x-users-table :users="$users" />
</x-master>
