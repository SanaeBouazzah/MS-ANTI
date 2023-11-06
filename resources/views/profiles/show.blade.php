@section('title')
    | {{$profile->name}}
@endsection
<x-master>

  <div class="m-5">
    <div class="card" style="width:500px">
      <img class="card-img-top" src="{{asset('../storage/'.$profile->image)}}" alt="Card image" style="width:500px; height:300px;object-fit:cover;display:block;">
      <div class="card-body">
        <h4 class="card-title">{{$profile->name}}</h4>
        <p class="card-text">{{$profile->bio}}</p>
        <div class="flex justify-content-between">
          <a href="{{route('profiles.edit', $profile)}}" class="btn btn-dark rounded-0 px-5 mt-3 mx-2">Modify Informations</a>
          <form action="{{route('profiles.destroy', $profile)}}" method="POST">
          @method('DELETE')
          @csrf
          <button class="btn btn-dark rounded-0 px-5 mt-3 mx-2">Delete</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</x-master>
