<?php

namespace App\Http\Controllers\Dashboard\Admin;

use Illuminate\Http\Request;
use App\Models\DataFasilitas;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class DataFasilitasController extends Controller
{
    public function index (){
        $barangs = DataFasilitas::select('id','nama', 'jumlah', 'kategori')->where('kategori', 'Barang')->get();
        $ruangans = DataFasilitas::select('id','nama', 'jumlah', 'kategori')->where('kategori', 'Ruangan')->get();
        // dd($barang);
        return view('dashboard.fasilitas.daftar_fasilitas.index' , compact('barangs', 'ruangans'));
    }

    public function create (DataFasilitas $fasilitas){
        return view('dashboard.fasilitas.daftar_fasilitas.create', compact('fasilitas'));
    }

    public function store (Request $request){
        $request->validate([
            'nama' => 'required',
            'jumlah' => 'required'
        ]);
        DataFasilitas::create($request->all());
        Alert::image('Data Fasilitas Diposting', 'Silahkan kembali ke halaman Daftar Fasilitas' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('daftar_fasilitas.index'));
    }

    public function editBarang ($id){
        // dd($barang);
        $fasilitas = DataFasilitas::where('id', $id)->first();

        // dd($daftar);
        return view('dashboard.fasilitas.daftar_fasilitas.editBarang', compact('fasilitas' ));
    }
    public function updateBarang ($id, Request $request){
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'jumlah' => 'required' 
        ]);
        DataFasilitas::find($id)->update($request->all());
        Alert::image('Data Fasilitas Diubah', 'Silahkan kembali ke halaman Daftar Fasilitas' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('daftar_fasilitas.index'));
    }
    

    public function storeRuangan (Request $request){
        dd($request->all());
        $request->validate([
            'nama' => 'required',
            'jumlah' => 'required'
        ]);
        DataFasilitas::create($request->all());
        Alert::image('Data Fasilitas Disimpan', 'Silahkan kembali ke halaman Daftar Fasilitas' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('daftar_fasilitas.index'));
    }
    public function editRuangan ($id){
        // dd($barang);
        $fasilitas = DataFasilitas::where('id', $id)->first();
        return view('dashboard.fasilitas.daftar_fasilitas.editRuangan', compact('fasilitas'));
    }
   
    public function updateRuangan ($id, Request $request){
        $request->validate([
            'nama' => 'required',
            'jumlah' => 'required' 
        ]);
        DataFasilitas::find($id)->update($request->all());
        Alert::image('Data Fasilitas Diubah', 'Silahkan kembali ke halaman Daftar Fasilitas' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('daftar_fasilitas.index'));
    }

    public function destory ($id){
        DataFasilitas::find($id)->delete();
        return back();
    }
    
}
