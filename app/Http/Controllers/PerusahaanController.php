<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Perusahaan;
use App\Models\Posting;

class PerusahaanController extends Controller
{
    //
    function view(){
        $data['Perusahaans'] = Perusahaan::all();
        return view ('Perusahaan')->with($data);
     }
     function tampil(){
        $data['Perusahaans'] = Perusahaan::all();
        $data['postings'] = Posting::all();
        return view('landingpage',$data);  
     }
    function post(request $req){
       $nama_perusahaan = $req->nama_perusahaan;
       $deskripsi = $req->deskripsi;
        $foto = $req->foto;

  Perusahaan::create([
            'nama_perusahaan' => $nama_perusahaan,
            'deskripsi' => $deskripsi,
            'foto' => $req->file('foto')->store('perusahaan'),
        ]);
        
        return redirect('/viewperusahaan');
    }
    function index(){

        $data['perusahaans'] = Perusahaan::all();
        return view('viewperusahaan')->with($data);
    }

     public function destroy($id)
     {
        $Perusahaan = Perusahaan::find($id);
        $hapus = $Perusahaan->delete();
        if($hapus){
            return back()->with('success','data berhasil dihapus');
        }else{
            return back()->with('failed','data gagal dihapus');
        }
    }

    function add(){
        $data=[
            'action'=>url('posting/create'),
            'tombol'=>'simpan',
            'pengajuan'=>(object)[
           'nama_perusahaan' =>"",
           'deskripsi' =>"",
           'foto' =>"",
            ],
        ];
        return view('perusahaan',$data);
    }

    function edit($id){
        $data['perusahaans'] = Perusahaan::find($id);
        $data['action'] = url('perusahaan/update').'/'.$data['perusahaans']->id;
        $data['tombol'] = 'update';
        return view('formperusahaan',$data);
    }

        function update(Request $req){
            if($req->file('foto')){
                $file = $req->file('foto')->store('foto');
            }else{
                $file = DB::row('foto');
            }
            Perusahaan::where('id',$req->id)->update([
                $nama_perusahaan = $req->nama_perusahaan,
                $deskripsi = $req->deskripsi,    
                $foto = $req->file('foto')->store('perusahaan'),
            ]);
        
        return redirect('viewperusahaan');
    }
 
}
