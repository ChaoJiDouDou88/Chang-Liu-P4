<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;
use p4\Http\Requests;
use p4\Http\Controllers\Controller;

class BookController extends Controller {
    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }
    /**
    * Responds to requests to GET /books
    */
    public function getIndex(Request $request) {
        $books = \p4\Book::orderBy('id','DESC')->get();
        //dump($books->toArray());
        return view('books.index')->with('books',$books);
    }
    /**
    * Responds to requests to GET /books/edit/{$id}
    */
    public function getEdit($id = null) {

        $book = \p4\Book::find($id);
        /*
        $authors = \p4\Author::orderby('last_name','ASC')->get();
        $authors_for_dropdown = [];
        foreach($authors as $author) {
            $authors_for_dropdown[$author->id] = $author->last_name.', '.$author->first_name;
        }
        dump($authors_for_dropdown);
        */
        if(is_null($book)) {
            \Session::flash('flash_message','Book not found.');
            return redirect('/books');
        }

        //return view('books.edit')->with(['book'=>$book, 'authors_for_dropdown' => $authors_for_dropdown]);

        return view('books.edit')->with('book',$book);
    }
    /**
    * Responds to requests to POST /books/edit
    */
    public function postEdit(Request $request) {
        // Validation
        $book = \p4\Book::find($request->id);
        $book->title = $request->title;
        //$book->author_id = $request->author;
        $book->cover = $request->cover;
        $book->published = $request->published;
        $book->purchase_link = $request->purchase_link;
        $book->save();
        \Session::flash('flash_message','Your book was updated.');
        return redirect('/books/edit/'.$request->id);
    }
    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
        return view('books.create');
    }
    /**
     * Responds to requests to POST /books/create
     */
    public function postCreate(Request $request) {
        $this->validate(
            $request,
            [
                'title' => 'required|min:5',
                'author' => 'required|min:5',
                'cover' => 'required|url',
                'published' => 'required|min:4',
              ]
        );
        // Code here to enter book into the database
        $book = new \p4\Book();
        $book->title = $request->title;
        $book->author = $request->author;
        //$book->author_id = 1;
        $book->cover = $request->cover;
        $book->published = $request->published;
        $book->purchase_link = $request->purchase_link;
        $book->save();
        // Confirm book was entered:
        //return 'Process adding new book: '.$request->input('title');
        //return view()
        \Session::flash('flash_message','Your book was added!');
        return redirect('/books');
    }
    /**
     * Responds to requests to GET /books/show/{title}
     */
    public function getShow($title = null) {
        return view('books.show')->with('title', $title);
    }

}
