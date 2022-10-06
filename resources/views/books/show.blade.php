@extends('layouts.app')

@section('content')
<div class="row bg-primary book-cover">
  <div class="col-5 position-relative">
    <img src="{{ asset('images/book2.jpeg') }}" alt="" srcset="" class="position-absolute top-50" style="left: 15rem;">
  </div>
  <div class="col-7 d-flex align-items-end">
    <div class="d-flex flex-column ps-4">
      <h1 class="fw-bold"> {{$book->title}} </h1>
      <h6>ebook</h6>

      <h5 class="pt-3">by <a href="" class="text-black"> {{$author}} </a></h5>
    </div>

  </div>


</div>

<div class="container">
  <div class="row mb-5">
    <div class="col-5 ">

    </div>
    <div class="col-7 d-flex flex-column">
      <p class="py-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ab fugiat repellat quasi, laborum rem error unde
        minus expedita beatae inventore reiciendis eligendi, tenetur in debitis, perspiciatis esse? Sed incidunt labore
        laudantium dicta, ex sit atque harum eius explicabo provident tempore, quidem cumque voluptatibus doloremque
        corporis temporibus in eaque, quam eum! Numquam molestias sapiente, dolorem ducimus eveniet nobis, et minus
        placeat qui at ipsa facilis in deleniti error quos, dignissimos ullam consequuntur? Dolore quaerat culpa
        obcaecati
        fuga adipisci quo. Consectetur quia ipsa earum, reprehenderit, distinctio quod aut reiciendis quas repellendus
        sequi possimus cumque ducimus corrupti assumenda iure neque eligendi rem?
      </p>
      <div>

        <a href="{{ asset('ebooks/test.pdf') }}" download="{{$book->title}}" class="btn btn-primary">Get The book</a>
      </div>
    </div>
  </div>
  <div class="row py-4">
    <div class="col-5 ps-5">
      <ul class="list-group list-group-flush ps-5 ms-4">
        <li class="list-group-item bg-transparent">
          Author : <span class="fw-bold"> {{ $author }} </span>
        </li>
        <li class="list-group-item bg-transparent">
          Publisher : <span class="fw-bold"> {{ $book->publisher->name }} </span>
        </li>
        <li class="list-group-item bg-transparent">
          Release : <span class="fw-bold"> {{ $book->published_date }}</span>
        </li>
        <li class="list-group-item bg-transparent">
          Pages : <span class="fw-bold"> {{ $book->total_pages }}</span>
        </li>
        <li class="list-group-item bg-transparent">
          Genre :
          @foreach ($book->genre as $genre)
          <a href="/collections/{{$genre->id}}" class="fw-bold pe-2">
            {{$genre->genre}}
          </a>
          @endforeach
        </li>

      </ul>
    </div>
    <div class="col-7 d-flex align-items-end">


    </div>
  </div>
</div>
@endsection