<?php

namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordController extends Controller
{
    use HasFactory;
    public function hasmany()
    {
        return view('record.hasmany',[
            'book'=>Book::find(1)
        ]);
    }
}
