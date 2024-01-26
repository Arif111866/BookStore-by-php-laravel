<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BookController extends Controller
{
       public function homepage(){    
            return view('book.homepage');
       }

       public function bookCreat(){
        return view('book.bookCreat');
       }
   
}