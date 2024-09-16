<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class book_controller extends Controller
{
    public function viewbook(){
        $viewbook = Book::all();
        return view('bookview', compact('viewbook'));
    }

    public function insertbook(Request $request){
        // dd($request);
        $data = $request->validate([    
            'title'=>'required',
            'page_count'=>'required',
            'author_name'=>'required',
            'author_email'=>'required',
        ]
        );
        Book::create($request->all());
        return redirect('bookview');
    }
    public function viewinsertbook(){
        return view('viewinsertbook');
    }
}
