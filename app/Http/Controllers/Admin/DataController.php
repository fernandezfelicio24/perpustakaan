<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\Book;
use App\BorrowHistory;
class DataController extends Controller
{
    public function authors(){
       // return datatables()->of(Author::query())->toJson();
       $authors = Author::orderBy('name','ASC');
       return datatables()->of($authors)
                ->addColumn('action', 'admin.author.action')
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->toJson();


    }

    public function books(){
        // return datatables()->of(Author::query())->toJson();
        
        //cara lain untuk masaLah n+1(query yang berulang)
       // $books = Book::with('author')->orderBy('title','ASC');

        //pake lazy loads untuk masalah n+1
        $books = Book::orderBy('title','ASC')->get();
        $books->load('author');
        return datatables()->of($books)
                ->addColumn('author',function(Book $model){
                    return $model->author->name;
                })
                ->editColumn('cover', function(Book $model){
                    return '  <img src="'.$model->getcover().'" height="150px"  >';  
                })
                ->addColumn('action', 'admin.book.action')
                 ->addIndexColumn()
                 ->rawColumns(['cover','action'])
                 ->toJson();
 
 
     }

     public function borrows(){

        $borrows = BorrowHistory::isBorrowed()->latest()->get();
        $borrows->load('user','book');
        return datatables()->of($borrows)
             ->addColumn('user',function(BorrowHistory $model){
                    return $model->user->name;
                })   
                ->addColumn('book_title',function(BorrowHistory $model){
                    return $model->book->title;
                })    
                ->addColumn('action', 'admin.borrow.action')
                 ->addIndexColumn()
                 ->rawColumns(['action'])
                 ->toJson();
 
     }
}
