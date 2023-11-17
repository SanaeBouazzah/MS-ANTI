@section('title')
    | Home
@endsection
<x-master>
  <div class="mt-4">
    @if (session('message'))
    <x-alert-message type="success">{{session('message')}}</x-alert-message>
    @endif
  </div>
    <x-users-table :users="$users" />

    <h1>Views: {{$compteur}}</h1>
</x-master>
