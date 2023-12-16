<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    function index()
    {
       return redirect('/login');
    }
    function show()
    {
       return view('/tampilan');
    }
    
    function admin()
    {
        echo "hallo, ukhty";
        echo "<a href='logout'>logout</a>";
    }
    
    function user()
    {
        echo "hallo, akhi";
        echo "<a href='logout'>logout</a>";
    }
    
}
