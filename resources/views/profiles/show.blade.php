@section('title')
    | {{$profile->name}}
@endsection
<x-master>

  <div class="m-5">
    <div class="card" style="width:400px">
      <img class="card-img-top" src="https://picsum.photos/id/237/200/100" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">{{$profile->name}}</h4>
        <p class="card-text">{{$profile->bio}}</p>
        <div class="text-center">
          <a href="#" class="btn btn-dark rounded-0 px-5 mt-3">Modify Informations</a>
        </div>
      </div>
    </div>
  </div>
</x-master>
