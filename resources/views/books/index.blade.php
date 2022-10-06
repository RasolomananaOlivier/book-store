@extends('layouts.app')

@section('content')
  collection of books :
<ul>
    @foreach ($books as $book)
  
        <li>
           <a href="/books/{{$book->id}}">
              <div>
            Title : {{ $book->title }} <br>
            Rating : {{ $book->rating }} /5  <br>
            Published Date : {{ $book->published_date }} <br>
            Published Date : {{ $book->published_date }} <br>
            Pages : {{$book->total_pages}} <br>
            {{ $book->genre }}
          </div>
    </a>
        </li>
    @endforeach
  </ul>
@endsection