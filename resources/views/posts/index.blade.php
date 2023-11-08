@section('title')
    | Posts
@endsection
<x-master>
    @if (session('message'))
        <x-alert-message type="success">{{ session('message') }}</x-alert-message>
    @endif
    <table class="table">
      <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Description</th>
          <th>Image</th>
      </tr>
      @foreach ($posts as $post)
          <tr>
              <td>{{ $post->id }}</td>
              <td>{{ $post->titre }}</td>
              <td>{{ $post->body }}</td>
              <td>{{ $post->image }}</td>
          </tr>
      @endforeach
  </table>

</x-master>
