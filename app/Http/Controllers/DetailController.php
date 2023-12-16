<?php

namespace App\Http\Controllers;
use App\Models\Posting;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    function show(){
        $data['postings'] = Posting::all();
        return view ('detail')->with($data);
     }
}
