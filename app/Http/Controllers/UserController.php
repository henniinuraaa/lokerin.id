<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function index(){
       return view('login');

    }
    function show(){
        return view('tampilperushaan');
     }
     public function register(){
        return view('register');
    }

    // function detail($id){
    //     $data['postings'] = Posting::where('id',$id)->first();
    //     // $data['rekomendasi'] = Produk::take(4)->get();
    //     return view('detail',$data);
    // }

    function regist(Request $req){
        $nisn = $req->nisn;
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;
        $tahun_lulus = $req->tahun_lulus;
     


            User::create([
                'nisn' =>$nisn,
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'tahun_lulus' => $tahun_lulus,
                // 'foto' => $file,
            
            ]);

            return redirect('/');
        }
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required'=> 'email harus diisi',
            'password.required'=> 'password harus diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($infologin)){

          if(Auth::user()->role == 'admin'){
            return redirect('/tampilan');

          }elseif (Auth::user()->role == 'user'){
            return redirect('/tampilperushaan');
          }
        }else{
            return redirect('')->withErrors('username dan password tidak sesuai')->withInput();
        }
    }
    function logout (){
        Auth::logout();
        return redirect('');
    }
}
