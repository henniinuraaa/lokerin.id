<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pengajuan;


class PengajuanController extends Controller
{
    //
    function view(){
        $data['pengajuans'] = Pengajuan::all();
        return view ('pengajuan')->with($data);
     }
     
    function post(request $req){
        $nama_lengkap = $req->nama_lengkap;
        $ttl = $req->ttl;
        $alamat = $req->alamat;
        $no_hp = $req->no_hp;
        $email = $req->email;
        $tahun_lulus = $req->tahun_lulus;
        $foto = $req->foto;

        Pengajuan::create([
            'nama_lengkap' => $nama_lengkap,
            'ttl' => $ttl,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'email' => $email,
            'tahun_lulus' => $tahun_lulus,
            'foto' => $req->file('foto')->store('pengajuan'),
        ]);
        
        return redirect('/viewpengajuan');
    }
    function index(){

        $data['pengajuans'] = Pengajuan::all();
        return view('viewpengajuan')->with($data);
    }

     public function destroy($id)
     {
        $pengajuan = Pengajuan::find($id);
        $hapus = $pengajuan->delete();
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
            'nama_lengkap' =>"",
            'ttl' =>"",
            'alamat' =>"",
            'no_hp' => "",
            'email' => "",
            'tahun_lulus' => "",
            'foto' =>"",
            ],
        ];
        return view('pengajuan',$data);
    }

    function edit($id){
        $data['pengajuans'] = Pengajuan::find($id);
        $data['action'] = url('pengajuan/update').'/'.$data['pengajuans']->id;
        $data['tombol'] = 'update';
        return view('formpengajuan',$data);
    }

        function update(Request $req){
            if($req->file('foto')){
                $file = $req->file('foto')->store('foto');
            }else{
                $file = DB::row('foto');
            }
            Pengajuan::where('id',$req->id)->update([
                $nama_lengkap = $req->nama_lengkap,
                $ttl = $req->ttl,
                $alamat = $req->alamat,
                $no_hp = $req->no_hp,
                $email = $req->email,
                $tahun_lulus = $req->tahun_lulus,    
                $foto = $req->file('foto')->store('pengajuan'),
            ]);
        
        return redirect('viewpengajuan');
    }
}
