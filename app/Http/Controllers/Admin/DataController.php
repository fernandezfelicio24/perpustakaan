<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\Book;
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
        $books = Book::orderBy('title','ASC');
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
}
