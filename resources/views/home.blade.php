@extends('layouts.app')

@section('content')
<div class="h-100">
    <div class="home-container w-100">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col d-flex justify-content-center align-items-start flex-column">
                    <h1 class="fw-bold fs-1">
                        Enjoy ebook and video books for free.
                    </h1>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis
                        quas adipisci id necessitatibus asperiores, labore veritatis
                        nihil alias iusto odit mollitia fugiat repellat reprehenderit.
                    </p>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    <div class="container py-5 my-5">
        <div class="row h-100">
            <div class="col d-flex justify-content-center align-items-start flex-column">
                <h1 class="fw-bold fs-1">
                    Explore and read millions of books for free.
                </h1>
                <a href="{{ '/collections' }}">
                    <button class="btn btn-primary">Browse the collection</button>
                </a>

            </div>
            <div class="col"></div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="text-center px-5">
            <h1 class="fs-1 fw-bold">The new york time best seller</h1>
            <p class="px-5 mx-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Culpa labore iste, animi enim perspiciatis illum possimus
                minus mollitia assumenda fugiat!
            </p>
        </div>
        <hr>

        <div class="row">
            @foreach ($books as $book)
            <div class="col ">
                <a href="/books/{{$book->id}}">
                    <img src="{{ asset('images/book2.jpeg') }}" alt="" class="w-100">
                </a>
                <h6 class="pt-2 fw-bold">{{$book['title']}}</h6>
                <p>
                    {{ $book->author->first_name . ' ' . $book->author->last_name }} ( {{$book['total_pages']}} )
                </p>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container mb-5">
        <div class="text-center px-5">
            <h1 class="fs-1 fw-bold">Recommeded reads</h1>
            <p class="px-5 mx-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Culpa labore iste, animi enim.
            </p>
        </div>
        <hr>

        <div class="row">
            @foreach ($books as $book)
            <div class="col ">
                <a href="/books/{{$book->id}}">
                    <img src="{{ asset('images/book2.jpeg') }}" alt="" class="w-100">
                </a>
                <h6 class="pt-2 fw-bold">{{$book['title']}}</h6>
                <p>
                    {{ $book->author->first_name . ' ' . $book->author->last_name }} ( {{$book['total_pages']}} )
                </p>
            </div>
            @endforeach
        </div>
    </div>

    <hr class="my-3">
</div>
@endsection