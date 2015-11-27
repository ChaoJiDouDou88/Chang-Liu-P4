<?php
namespace p4\Http\Controllers;
use p4\Http\Controllers\Controller;
use Illuminate\Http\Request;
class PracticeController extends Controller {

    function getBookWithEloquent() {
        $book = new \p4\Book();
        $books = $book->all();
        foreach($books as $item){
            echo $item->title;
        }
        return 'getBookWithEloquent';
    }

    function getExample1(){
        $book = new \p4\Book();
        $first = $book->first();
        echo $first;
        return 'getExample1';
    }

    function getExample2(){
        $books = \p4\Book::all();
        dump($books);
    }

    function getExample3(){
        $books = \p4\Book::all();
        //return view('books.index')->with('books',$books);
    }
} # eoc
