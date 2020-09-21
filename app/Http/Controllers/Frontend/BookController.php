<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\BorrowHistory;
class BookController extends Controller
{
    public function index(){
        //$books = Book::get();
        $books = Book::paginate(10);
        return view('frontend.books.index',[
            'books' => $books,
        ]);
    }

    public function show(Book $book){
        return view('frontend.books.show',[
            'book' => $book,
        ]);
    }
    
    public function borrow(book $book){
        //dd(auth()->id());
        // BorrowHistory::create([
        //     'user_id' =>auth()->id(),
        //     'book_id' => $book->id
        // ]);
        $user = auth()->user();

        $user->borrow()->attach($book);
        return redirect()->back();
    }
}
