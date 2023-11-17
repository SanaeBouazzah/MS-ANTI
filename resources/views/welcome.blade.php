@section('title')
    | Home
@endsection
<x-master>
  <div class="mt-4">
    @if (session('message'))
    <x-alert-message type="success">{{session('message')}}</x-alert-message>
    @endif
  </div>
  <div class="row m-3">
    <div class="col">jkfjkfjkdjkjf</div>
    <div class="col"><img src="pexels-brian-jr-asare-13221796.jpg" alt="image"></div>
  </div>
</x-master>
