<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class ArtikelController extends Controller
{
    public function show()
    {
        $articles = DB::table('artikel')->orderby('id', 'desc')->get();
        return view('show', ['articles'=>$articles]);
    }
 
    public function add()
    {
        return view('add');
    }
    
 
    public function add_process(Request $article)
    {
        DB::table('artikel')->insert([
            'nama_depan'=>$article->nama_depan,
            'nama_belakang'=>$article->nama_belakang,
            'alamat'=>$article->alamat,
            'pekerjaan'=>$article->pekerjaan,
            'riwayat'=>$article->riwayat,
            'lokasi'=>$article->lokasi,
            'tanggal'=>$article->tanggal
        ]);
        
        return redirect()->action('ArtikelController@add');
    }
    public function detail($id)
    {
        $article = DB::table('artikel')->where('id', $id)->first();
        return view('detail', ['article'=>$article]);
    }
    public function show_by_admin()
    {
        $articles = DB::table('artikel')->orderby('id', 'desc')->get();
        return view('adminshow', ['articles'=>$articles]);
    }
    public function edit($id)
    {
        $article = DB::table('artikel')->where('id', $id)->first();
        return view('edit', ['article'=>$article]);
    }
    public function edit_process(Request $article)
    {
        $id = $article->id;
        $nama_depan = $article->nama_depan;
        $nama_belakang = $article->nama_belakang;
        $alamat =$article->alamat;
        $pekerjaan =$article->pekerjaan;
        $riwayat =$article->riwayat;
        $lokasi =$article->lokasi;
        $tanggal =$article->tanggal;
        DB::table('artikel')->where('id', $id)
                            ->update(['nama_depan' => $nama_depan, 
                            'nama_belakang' => $nama_belakang,  'alamat'=>$alamat,
                             'pekerjaan'=>$pekerjaan, 'riwayat'=>$riwayat,
                             'lokasi'=>$lokasi,'tanggal'=>$tanggal]);
        Session::flash('success', 'Artikel berhasil diedit');
        return redirect()->action('ArtikelController@show_by_admin');
    }

    public function delete($id)
    {
        //menghapus artikel dengan ID sesuai pada URL
        DB::table('artikel')->where('id', $id)
                            ->delete();
 
        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus
        Session::flash('success', 'Artikel berhasil dihapus');
        return redirect()->action('ArtikelController@show_by_admin');
    }
      public function index()
    {
        return view('index');
    }
}