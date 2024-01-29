<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
       public function homepage(){   
              $books = Book::paginate(10) ;
              return view('book.homepage') -> with('books', $books) ;
       }

       public function bookCreat(){
        return view('book.bookCreat');
       }

       public function show($id){
              $book = Book::find($id);
              return view('book.show' , compact('book'));
       }
       public function store(Request $request){
              $rules = [
                     'title' => 'required|max:255',
                     'author' => 'required|max:255',
                     'isbn' => 'required|numeric|digits_between:10,13',
                     'price' => 'required|numeric',
                     'stock' => 'required|numeric|integer|min:0',
              ];
              $this->validate($request, $rules);
              $book = new Book;
              $book->title = $request->title;
              $book->author = $request->author;
              $book->isbn = $request->isbn;
              $book->price = $request->price;
              $book->stock = $request->stock;
              $book->save();
              return redirect()->route('book.show' , $book->id);
       }
       public function edit($id){
              $book = Book::find($id);
              return view('book.edit' , compact('book'));
       }
       public function update(Request $request, $id){
              $rules = [
                     'title' => 'required|max:255',
                     'author' => 'required|max:255',
                     'isbn' => 'required|numeric|digits_between:10,13',
                     'price' => 'required|numeric',
                     'stock' => 'required|numeric|integer|min:0',
              ];
              $this->validate($request, $rules);
              $book = Book::find($request->id);
              // dd($book);
              $book->title = $request->title;
              $book->author = $request->author;
              $book->isbn = $request->isbn;
              $book->price = $request->price;
              $book->stock = $request->stock;
              $book->save();
              return redirect()->route('book.show' , $book->id);
       }
}