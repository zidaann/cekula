<?php

namespace App\Http\Controllers\Dashboard\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\JadwalSekolah;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
// use RealRashid\SweetAlert\Facades\Alert;
use App\Traits\Notif;

class JadwalSekolahController extends Controller
{
    use Notif;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.akademik.jadwal_sekolah.index',[
            'jadwals' => JadwalSekolah::all()->sortByDesc('created_at')
        ]); 
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
    public function store(Request $request)
    {
        
        // dd($request->all());
       $request->validate([
        'pamflet' => 'required|image|file|max:1024|mimes:jpg,jpeg,png',
        'judul' => 'required',
        'tanggal_pelaksanaan' => 'required',
        'tanggal_selesai_pelaksanaan' => 'required',
        'deskripsi' => 'required'
      ]);

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
        'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
        'tanggal_selesai_pelaksanaan' => $request->tanggal_selesai_pelaksanaan,
        'deskripsi' => $request->deskripsi
      ]);
        $this->alertCreate('Posting Jadwal', 'jadwal sekolah');
        return redirect(route('jadwal_sekolah.index'));
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
        // dd($request->all());
        $validatedData = $request->validate([
            'pamflet' => 'image|file|max:1024|mimes:jpg,jpeg,png',
            'judul' => 'required',
            'tanggal_pelaksanaan' => 'required',
            'tanggal_selesai_pelaksanaan' => 'required',
            'deskripsi' => 'required'
        ]);
        if($request->file('pamflet')){
            if($jadwalSekolah->pamflet){
                Storage::delete($request->pamflet);
            }
            $validatedData['pamflet'] = $request->file('pamflet')->store('pamflets');
        }
        $valida['slug'] = Str::slug($request->judul, '-');
        $jadwalSekolah->update($validatedData);
        $this->alertUpdate('Jadwal Sekolah', 'jadwal sekolah'); // base ada di trait notif
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
        // return response()->json(['status' => 'Jadwal Sekolah Berhasil Dihapus!']);
        return back();
    }
}
