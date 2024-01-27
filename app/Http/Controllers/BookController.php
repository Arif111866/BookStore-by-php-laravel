<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
       public function homepage(){   
          $books = Book::all();
            return view('book.homepage' , compact('books'));
       }

       public function bookCreat(){
        return view('book.bookCreat');
       }

       public function show($id){
              $book = Book::find($id);
              return view('book.show' , compact('book'));
       }
}