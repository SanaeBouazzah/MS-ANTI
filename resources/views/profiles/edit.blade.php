@section('title')
    | Modify Informations
@endsection
<x-master>
  <div class="flex justify-center items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
      <div style="width:600px;" class="bg-white p-5 rounded">
        <h2 class="text-center mb-3 h2">Update Informations</h2>
        <form method="POST" action="{{route('profiles.update', $profile)}}">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" value="{{old('name', $profile->name)}}">
            @error('name')
                <p class="text-danger mb-2">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{old('email', $profile->email)}}">
            @error('email')
            <p class="text-danger mb-2">{{$message}}</p>
           @enderror
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="********">
            @error('password')
            <p class="text-danger mb-2">{{$message}}</p>
           @enderror
          </div>
          <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="********">
          </div>
          <div class="form-group">
            <label for="bio">Bio</label>
            <textarea class="form-control" id="bio" name="bio" rows="3" placeholder="write what's on your mind...">{{old('bio', $profile->bio)}}</textarea>
            @error('bio')
            <p class="text-danger mb-2">{{$message}}</p>
             @enderror
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            {{-- <div><img src="{{asset('../storage/'.$profile->image)}}" alt=""></div> --}}
            <input type="file" name="image" id="image" class="form-control" value="{{old('image', $profile->image)}}">
            @error('image')
            <p class="text-danger mb-2">{{$message}}</p>
             @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-dark mt-4 rounded-0 px-5 py-3 form-control">Modify Informations</button>
          </div>
        </form>
      </div>
  </div>  
</x-master>
