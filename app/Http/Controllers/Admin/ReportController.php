<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
class ReportController extends Controller
{
    public function topBook(){

        $books = Book::withCount('borrowed')
                        ->orderBy('borrowed_count','desc')
                        ->paginate(10);
        return view('admin.report.top-book',[
            'books' => $books,
        ]);
    }
}
