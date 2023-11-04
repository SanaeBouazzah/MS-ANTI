@section('title')
    | Login In 
@endsection
<x-master>
  <div class="flex justify-center items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div style="width:600px;" class="bg-white p-5 rounded">
      <h2 class="text-center mb-3 h2">Sign Up in MS-ANTI</h2>
      <form method="POST" action="{{route('profiles.store')}}">
        @csrf
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{old('email')}}">
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
          <button class="btn btn-dark mt-4 rounded-0 px-5 py-3 form-control">Sign Up</button>
        </div>
      </form>
    </div>
</div> 
</x-master>