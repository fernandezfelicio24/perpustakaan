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
        if($user->borrow()->where('books.id',$book->id)->count() > 0){
            return redirect()->back()->with('toast',
            'Voce ja estava emprestar esse Livro com este Titulo : '.$book->title);
        }
        $user->borrow()->attach($book);
        $book->decrement('qty');
        return redirect()->back()->with('toast','Sucesso de Emprestar Livro !');
    }
}
