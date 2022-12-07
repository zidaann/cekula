<?php

namespace App\Http\Controllers\Dashboard\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\JadwalSekolah;
use App\Http\Controllers\Controller;
use App\Http\Requests\JadwalSekolahRequest;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class JadwalSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jadwals = JadwalSekolah::latest()->get();
        return view('dashboard.akademik.jadwal_sekolah.index', compact('jadwals')); 
        // 'jadwals' => JadwalSekolah::all()->sortByDesc('created_at')
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(JadwalSekolah $jadwalSekolah)
    {
        $submit = 'Posting Jadwal';
        return view('dashboard.akademik.jadwal_sekolah.create', compact('jadwalSekolah', 'submit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JadwalSekolahRequest $request)
    {
    //   if($request->file('pamflet')){
    //     $validateData['pamflet'] = $request->file('pamflet')->store('pamflets');
    //   }
    if($request->pamflet == null){
        $pamflet = "";
    }
    else{
        $pamflet = $request->file('pamflet')->store('pamflets');
    }
      JadwalSekolah::create([
        'pamflet' => $pamflet,
        'judul' => $request->judul,
        'slug' => Str::slug($request->judul, '-'),
        'tgl_mulai' => $request->tgl_mulai,
        'tgl_selesai' => $request->tgl_selesai,
        'deskripsi' => $request->deskripsi
      ]);
        Alert::image('Posting Jadwal Berhasil', 'Silahkan kembali ke halaman jadwal sekolah' ,'/assets/img/alert/alert_berhasil.png', '120px','200px');
        return redirect()->route('jadwal_sekolah.index');
        // return redirect()->route('jadwal_sekolah.index')->withSuccessMessage('success_message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalSekolah $jadwalSekolah)
    {
        return view('dashboard.akademik.jadwal_sekolah.show', compact('jadwalSekolah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalSekolah $jadwalSekolah)
    {
        $submit = 'Update Jadwal';
        return view('dashboard.akademik.jadwal_sekolah.edit', compact('jadwalSekolah', 'submit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalSekolah $jadwalSekolah)
    {
        if($request->file('pamflet')){
            if($jadwalSekolah->pamflet){
                Storage::delete($request->pamflet);
            }
            $validatedData['pamflet'] = $request->file('pamflet')->store('pamflets');
        }
        $validatedData['slug'] = Str::slug($request->judul, '-');
        $jadwalSekolah->update($validatedData);
        Alert::image('Jadwal Sekolah Berhasil Diubah', 'Silahkan kembali ke halaman jadwal sekolah' ,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
        return redirect(route('jadwal_sekolah.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JadwalSekolah::find($id)->delete();
        return back();
    }
}
