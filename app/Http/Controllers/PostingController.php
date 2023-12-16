<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Posting;



class PostingController extends Controller
{
    //
    function view(){
        $data['postings'] = Posting::all();
        return view ('posting')->with($data);
     }
     function show(){
        $data['postings'] = Posting::all();
        return view ('dataposting')->with($data);
     }

     
    function post(request $req){
        $nama_perusahaan = $req->nama_perusahaan;
        $bidang_usaha = $req->bidang_usaha;
        $lowongan_pekerjaan = $req->lowongan_pekerjaan;
        $tanggal_posting = $req->tanggal_posting;
        $tanggal_deadline = $req->tanggal_deadline;
        $deskripsi = $req->deskripsi;
        $lokasi = $req->lokasi;

        $foto = $req->file('foto')->store('posting');

        Posting::create([
            'nama_perusahaan' => $nama_perusahaan,
            'bidang_usaha' => $bidang_usaha,
            'lowongan_pekerjaan' => $lowongan_pekerjaan,
            'tanggal_posting' => $tanggal_posting,
            'tanggal_deadline' => $tanggal_deadline,
            'deskripsi' => $deskripsi,
            'lokasi' => $lokasi,
            'foto' => $foto,
        ]);
        
        return redirect('/viewposting');
    }
    function index(){

        $data['postings'] = Posting::all();
        return view('viewposting')->with($data);
    }

     public function destroy($id)
     {
        $Posting = Posting::find($id);
        $hapus = $Posting->delete();
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
            'posting'=>(object)[
            'nama_perusahaan' =>"",
            'bidang_usaha' =>"",
            'lowongan_pekerjaan' =>"",
            'tanggal_posting' => "",
            'tanggal_deadline' => "",
            'deskripsi' => "",
            'lokasi' =>"",
            'foto' =>"",
            ],
        ];
        return view('posting',$data);
    }
    
    // function create(Request $req){
    //     Posting::create([
    //         'nama_perusahaan' => $nama_perusahaan,
    //         'bidang_usaha' => $bidang_usaha,
    //         'lowongan_pekerjaan' => $lowongan_pekerjaan,
    //         'tanggal_posting' => $tanggal_posting,
    //         'tanggal_deadline' => $tanggal_deadline,
    //         'deskripsi' => $deskripsi,
    //         'foto' =>$foto,
    //     ]);
    //   return redirect('/viewposting');
    // }

    function edit($id){
        $data['postings'] = Posting::find($id);
        $data['action'] = url('posting/update').'/'.$data['postings']->id;
        $data['tombol'] = 'update';
        return view('formposting',$data);
    }

    function update(Request $req){
        if($req->file('foto')){
            $file = $req->file('foto')->store('foto');
        }else{
            $file = DB::row('foto');
        }
        Posting::where('id',$req->id)->update([
                'nama_perusahaan' => $req->nama_perusahaan,
                'bidang_usaha' => $req->bidang_usaha,
                'lowongan_pekerjaan' => $req->lowongan_pekerjaan,
                'tanggal_posting' => $req->tanggal_posting,
                'tanggal_deadline' => $req->tanggal_deadline,
                'deskripsi' => $req->deskripsi,
                'lokasi' => $req->lokasi,
                'foto' => $file
        
            ]);
        
        return redirect('viewposting');
    }
    function Dikonfirmasi(){
        Posting::where('id',)->update(['status' => 'Dikonfirmasi']);

        return back();
    }
}