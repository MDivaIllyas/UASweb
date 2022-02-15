<?php

namespace App\Http\Controllers;

use App\Models\ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function book(){
        $ebooks = ebook::all();
        return view('user', ['ebook' => $ebooks]);
    }

    public function urut($id){
        $ebooks = ebook::all()->where('ebook_id', $id);
        return view('more', ['ebook' => $ebooks]);
    }

    public function priv(){
        $ebooks = ebook::all();
        return view('profile', ['ebook' => $ebooks]);
    }

}
