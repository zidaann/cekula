<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Hari;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Pegawai;
use App\Models\JadwalKelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\JadwalKelasRequest;
use Carbon\Carbon;

class JadwalKelasController extends Controller
{
    public function index (){
      $hari = Hari::get();
      $mapels = Mapel::get();
      // $jadwalKelas = JadwalKelas::where('kelas_id',$kelas->id)->get();
      $jadwalMurid = JadwalKelas::where('kelas_id', auth()->user()->kelas_id)->get();
      $kelasMurid = JadwalKelas::where('kelas_id', auth()->user()->kelas_id)->first();
      $jadwals = JadwalKelas::get();
      $kelas = Kelas::get();
      //   dd($kelas);
        return view('dashboard.akademik.jadwal_kelas.index', 
        compact('kelas', 'jadwals', 'hari', 'mapels', 'jadwalMurid', 'kelasMurid')); 
     }
 
     public function create (){
      $submit = "Buat Jadwal";
      $haris = Hari::select('id','nama')->get();
      $mapels = Mapel::select('id','nama')->get();
      $kelas = Kelas::select('id', 'nama_kelas')->get();
      $pegawais = Pegawai::select('id', 'nama')->get();
        return view('dashboard.akademik.jadwal_kelas.create', compact('haris', 'mapels'
        , 'kelas', 'pegawais')); 
     }
 
     public function store (JadwalKelasRequest $request){
         JadwalKelas::create($request->all());
         Alert::image('Jadwal Kelas Berhasil Dibuat', 'Silahkan kembali ke halaman jadwal kelas' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
         return redirect(route('jadwal_kelas.index'));
     }

     public function edit ($id){
      $jadwal = JadwalKelas::where('id', $id)->first();
      $submit = "Simpan Perubahan";
      $haris = Hari::select('id','nama')->get();
      $mapels = Mapel::select('id','nama')->get();
      $kelas = Kelas::select('id', 'nama_kelas')->get();
      $pegawais = Pegawai::select('id', 'nama')->get();
         return view('dashboard.akademik.jadwal_kelas.edit', compact('jadwal', 'submit', 
         'haris', 'mapels', 'kelas', 'pegawais'));
     }

     public function update ($id, Request $request,){
          $kelas = Kelas::all()->first();
          $pilihanKelas = JadwalKelas::where('kelas_id', $kelas->id)->first();
          // dd($id);
         JadwalKelas::where('id', $id)->update([
            'mapel_id' => $request->mapel_id,
            'jam_masuk' => $request->jam_masuk,
            'jam_selesai' => $request->jam_selesai,
            'pegawai_id' => $request->pegawai_id,
         ]);
         Alert::image('Jadwal Kelas Berhasil Diubah', 'Silahkan kembali ke halaman jadwal kelas' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
         return redirect(route('jadwal_kelas.show', $pilihanKelas));
     }
     public function show (Kelas $kelas){
         $hari = Hari::get();
         $mapels = Mapel::get();
         $jadwalKelas = JadwalKelas::where('kelas_id',$kelas->id)->get();
      return view('dashboard.akademik.jadwal_kelas.show', compact( 'jadwalKelas', 'mapels', 'hari', 'kelas')); 
     }

     public function destroy ($id){
      JadwalKelas::where('id', $id)->delete();
      return back();
     }
}
