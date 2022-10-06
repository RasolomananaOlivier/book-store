@extends('layouts.app')

@section('content')
list of author
<ul>

  @forelse ($authors as $author)
  <li>
    <form action="{{route('authors.delete',[$author->id])}}" method="POST">
      @csrf
      @method('delete')
      <button class="btn btn-danger">Delete</button>
    </form>
    {{ $author }}
  </li>
  @empty
  Empty
  @endforelse
</ul>
@endsection