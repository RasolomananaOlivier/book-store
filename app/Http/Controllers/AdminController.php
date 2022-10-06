<?php


namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookGenre;
use App\Models\Genre;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// TODO: implement user authentication > user delete/edit/pub his own book
// user > become > author > gain > admin power
// control when a user is an author, whether by make a column :is_author or *Auth()->user->auth not null


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the author data of the current user
        $author = auth()->user()->author;

        // Get all the books of the author
        $books = $author->book;

        return view('admin.index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->file('cover')->getClientOriginalExtension());
        // TODO: Implement A validation request
        $newName = $request
            ->title . '-' . time() . '.' . $request
            ->file('cover')
            ->getClientOriginalExtension();

        $request
            ->file('cover')
            ->move(public_path('images'), $newName);

        $document_filename = $request
            ->title . '-' . time() . '.' . $request
            ->file('document')
            ->getClientOriginalExtension();
        $request
            ->file('document')
            ->move(public_path('ebooks'), $document_filename);

        // Get the author corresponding to the authentified user
        $author = Author::where('user_id', Auth::user()->id)->first();
        $publisher = Publisher::where('name', $request->input('publisher'))->first();

        $book = Book::create([
            'title' => $request->input('title'),
            'total_pages' => $request->input('total_pages'),
            'published_date' => $request->input('published_date'),
            'publisher_id' => $publisher->id,
            'author_id' => $author->id,
            'image_path' => $newName
        ]);

        $book_id = $book->id;

        foreach ($request->genres as $key => $genre) {
            $current_genre = Genre::where('genre', $genre)->first();
            BookGenre::create([
                'book_id' => $book_id,
                'genre_id' => $current_genre->id
            ]);
        }

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = auth()->user()->author;


        $book = $author->book->where('id', $id)->first();

        return view('admin.show', [
            'book' => $book,
            'author' => $author->first_name . ' ' . $author->last_name,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id)->first();
        return view('admin.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $publisher = Publisher::where('name', $request->input('publisher'))->first();
        $book = Book::where('id', $id)->update([
            'title' => $request->input('title'),
            'total_pages' => $request->input('total_pages'),
            'published_date' => $request->input('published_date'),
            'publisher_id' => $publisher->id,
            'author_id' => Author::where('user_id', Auth::user()->id)->first()->id
        ]);

        return redirect('/admin');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id)->first();
        $book->delete();

        return redirect('/admin');
    }
}
