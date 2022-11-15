<?php 
namespace App\Traits;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\JadwalSekolah;

trait Notif{
    // https://realrashid.github.io/sweet-alert
    // Alert::image('Posting Jadwal Berhasil', 'Silahkan kembali ke halaman jadwal sekolah','/assets/img/dashboard/jadwal_sekolah/alert_berhasil.png', '120px', '200px' );
    public function alertCreate ($judul, $halaman){
        return Alert::image($judul . ' Berhasil', 'Silahkan kembali ke halaman '.$halaman,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
    }
    public function alertUpdate ($judul, $halaman){
        return Alert::image($judul . ' Berhasil Diubah', 'Silahkan kembali ke halaman '.$halaman,'/assets/img/alert/alert_berhasil.png', '120px', '200px' );
    }
}

?>