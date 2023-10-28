@section('title')
    | Home
@endsection
<x-master>
    <x-alert-message type="primary">Something's wrong!!!!</x-alert-message>
    <x-users-table :users="$users" />
</x-master>
