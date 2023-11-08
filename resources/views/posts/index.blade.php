@section('title')
    | Posts
@endsection
<x-master>
    <div class="mt-3">
      @if (session('message'))
        <x-alert-message type="success">{{ session('message') }}</x-alert-message>
      @endif
    </div>


<div class="row">
  @foreach ($posts as $post)
  <div class="m-5 col-sm">
    <div class="card" style="width:500px">
      <img class="card-img-top" src="{{asset('../storage/'.$post->image)}}" alt="Card image" style="width:500px; height:300px;object-fit:cover;display:block;">
      <div class="card-body">
        <h4 class="card-title">{{$post->titre}}</h4>
        <p class="card-text">{{$post->body}}</p>
        {{-- <div class="flex justify-content-between">
          <a href="{{route('profiles.edit', $profile)}}" class="btn btn-dark rounded-0 px-5 mt-3 mx-2">Modify Informations</a>
        </div> --}}
      </div>
    </div>
  </div>
  @endforeach
</div>  


</x-master>
