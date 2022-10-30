@extends('dashboard.main')
@section('styles')
    <style>
      .capaian-rapot table,
      .capaian-rapot tr,
      .capaian-rapot th,
      .capaian-rapot td {
        border: 1px solid black;
      }
      .capaian-rapot th {
        background-color: grey
      }
      @media print {
        body * {
            visibility: hidden;
        }

        .print-container,
        .print-container * {
            visibility: visible;
        }

        .print-container {
            position: absolute;
            left: 0px;
            top: 0px;
        }
        .capaian-rapot table,
        .capaian-rapot tr,
        .capaian-rapot th,
        .capaian-rapot td {
          border: 1px solid black;
        }
        .capaian-rapot th {
          background-color: grey
        }
      }
    </style>
@endsection
@section('content')
  <div class="header-schedule">
    <div class="d-flex align-items-center px-4">
        <a href="#" class="text-white "><i class="bi bi-arrow-left"></i></a>
        <span class="text-white mx-auto">Rapor Murid</span>
    </div>
  </div>
  <div class="container-fluid">
    <div class="px-5 mx-3">
      <div
        class="container d-flex px-2 justify-content-center font-20 font-noto fw-semibold">
        <div>Adhe Junaidi</div>
      </div>
    </div>
    <!-- Rapor -->
    <div class="px-5 mx-3 print-container">
      <div class="px-4">
        <table style="width: 100%">
          <tr>
            <td style="width: 25%">Nama Sekolah</td>
            <td style="width: 1%">:</td>
            <td style="width: 54%">SMP Negeri 123 Nusantara</td>
            <td style="width: 14%">Kelas</td>
            <td style="width: 1%">:</td>
            <td style="width: 5%">7-2</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td rowspan="1">Jl. Kemuning Raya Perumnas Halvetia Medan</td>
            <td>Semester</td>
            <td>:</td>
            <td>1 (Satu)</td>
          </tr>
          <tr>
            <td colspan="3"></td>
            <td>Tahun Pelajaran</td>
            <td>:</td>
            <td>2014/2015</td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td>Adhe Junaidi</td>
          </tr>
          <tr>
            <td>Nomor Induk Siswa/NISN</td>
            <td>:</td>
            <td>1</td>
          </tr>
        </table>
      </div>
      <div class="font-noto font-16 fw-semibold mt-2">CAPAIAN</div>
      <div>
        <table style="width: 100%" class="capaian-rapot mb-4 font-noto">
          <tr class="text-center">
            <th style="width: 40%" rowspan="2" colspan="2">Mata Pelajaran</th>
            <th style="width: 12%" colspan="2">Pengetahuan <br />(KI-3)</th>
            <th style="width: 12%" colspan="2">Keterampilan <br />(KI-4)</th>
            <th style="width: 36%" colspan="2">
              Sikap Spiritual dan Sosial <br />(KI-1 dan KI-2)
            </th>
          </tr>
          <tr class="text-center">
            <th style="width: 6%">Nilai</th>
            <th style="width: 6%">Predikat</th>
            <th style="width: 6%">Nilai</th>
            <th style="width: 6%">Predikat</th>
            <th style="width: 10%">Dalam Mapel</th>
            <th style="width: 26%">Antar Mapel</th>
          </tr>
          <tr class="text-start">
            <td colspan="6" class="fw-semibold">Kelompok A</td>
            <td colspan="2"></td>
          </tr>
          <tr class="text-center">
            <td style="width: 5%;">1</td>
            <td class="text-start"><p>Pendidikan Agama dan Budi Pekerti</p></td>
            <td>3,56</td>
            <td>A-</td>
            <td>3,00</td>
            <td>B</td>
            <td>SB</td>
            <td rowspan="11" class="text-start align-text-top ps-2">Adhe Junaidi menunjukkan sikap sangat baik, konsisten, dan sungguh-sungguh dalam menerapkan sikap spiritual, jujur, disiplin, tanggung jawab, toleransi, gotong royong, santun, dan percaya diri dalam mata pelajaran Pendidikan Agama dan Budi Pekerti, IPS, Seni Budaya. Cukup dalam mapel Bahasa Indonesia</td>
          </tr>
          <tr class="text-center">
            <td style="width: 5%;">2</td>
            <td class="text-start"><p>Pendidikan Pancasila dan Kewarganegaraan</p></td>
            <td>3,56</td>
            <td>A-</td>
            <td>3,00</td>
            <td>B</td>
            <td>SB</td>
          </tr>
          <tr class="text-center">
            <td style="width: 5%;">3</td>
            <td class="text-start"><p>Bahasa Indonesia</p></td>
            <td>3,56</td>
            <td>A-</td>
            <td>3,00</td>
            <td>B</td>
            <td>SB</td>
          </tr>
          <tr class="text-center">
            <td style="width: 5%;">4</td>
            <td class="text-start"><p>Matematika</p></td>
            <td>3,56</td>
            <td>A-</td>
            <td>3,00</td>
            <td>B</td>
            <td>SB</td>
          </tr>
          <tr class="text-center">
            <td style="width: 5%;">5</td>
            <td class="text-start"><p>Ilmu Pengetahuan Alam</p></td>
            <td>3,56</td>
            <td>A-</td>
            <td>3,00</td>
            <td>B</td>
            <td>SB</td>
          </tr>
          <tr class="text-center">
            <td style="width: 5%;">6</td>
            <td class="text-start"><p>Ilmu Pengetahuan Sosial</p></td>
            <td>3,56</td>
            <td>A-</td>
            <td>3,00</td>
            <td>B</td>
            <td>SB</td>
          </tr>
          <tr class="text-center">
            <td style="width: 5%;">7</td>
            <td class="text-start"><p>Bahasa Inggris</p></td>
            <td>3,56</td>
            <td>A-</td>
            <td>3,00</td>
            <td>B</td>
            <td>SB</td>
          </tr>
          <tr class="text-start">
            <td colspan="7" class="fw-semibold">Kelompok B</td>
          </tr>
          <tr class="text-center">
            <td style="width: 5%;">1</td>
            <td class="text-start"><p>Seni Budaya</p></td>
            <td>3,56</td>
            <td>A-</td>
            <td>3,00</td>
            <td>B</td>
            <td>SB</td>
          </tr>
          <tr class="text-center">
            <td style="width: 5%;">2</td>
            <td class="text-start"><p>Pendidikan Jasmani, Olahraga dan Kesehata</p></td>
            <td>3,56</td>
            <td>A-</td>
            <td>3,00</td>
            <td>B</td>
            <td>SB</td>
          </tr>
          <tr class="text-center">
            <td style="width: 5%;">3</td>
            <td class="text-start"><p>Prakarya</p></td>
            <td>3,56</td>
            <td>A-</td>
            <td>3,00</td>
            <td>B</td>
            <td>SB</td>
          </tr>
        </table>
        <table style="width: 100%" class="capaian-rapot mb-4 font-noto">
          <tr class="text-center">
            <th style="width: 40%" colspan="2">Kegiatan Ekstrakulikuler</th>
            <th style="width: 60%">Keterangan</th>
          </tr>
          <tr class="text-start">
            <td style="width: 5%" class="text-center">1</td>
            <td>Praja Muda Karana (Pramuka)</td>
            <td>Memuaskan, Aktif dalam perkemahan dan latihan mingguan</td>
          </tr>
          <tr class="text-start">
            <td style="width: 5%" class="text-center">2</td>
            <td>Palang Merah Remaja (PMR)</td>
            <td>Memuaskan, Aktif dalam perkemahan Wirakarya dan Raimuna Cabang Jakarta Selatan</td>
          </tr>
          <tr class="text-start">
            <td style="width: 5%" class="text-center">3</td>
            <td>Bola Kaki</td>
            <td>Memuaskan, Aktif dalam latihan, pertandingan LPI Cup</td>
          </tr>
        </table>
        <table style="width: 50%; border: 1px solid black" class="mb-4 font-noto">
          <tr class="text-center" style="border: 1px solid black; background-color: grey;">
            <th colspan="3" style="border: 1px solid black;">Ketidakhadiran</th>
          </tr>
          <tr>
            <td class="ps-2">Sakit</td>
            <td>:</td>
            <td>2 Hari</td>
          </tr>
          <tr>
            <td class="ps-2">Izin</td>
            <td>:</td>
            <td>1 Hari</td>
          </tr>
          <tr>
            <td class="ps-2">Tanpa Keterangan</td>
            <td>:</td>
            <td>3 Hari</td>
          </tr>
        </table>
        <table style="width: 100%;" class="mb-4 font-noto">
          <tr>
            <td style="width: 65%;"></td>
            <td style="width: 35%;">Tebing Tinggi, 21 Desember 2015</td>
          </tr>
          <tr>
            <td style="width: 65%;">Mengetahui:</td>
            <td style="width: 35%;"></td>
          </tr>
          <tr>
            <td style="width: 65%;" class="align-text-top">Orang Tua / Wali</td>
            <td style="width: 35%; height: 130px;" class="align-text-top">Wali Kelas</td>
          </tr>
          <tr>
            <td style="width: 65%;"><p class="text-decoration-underline">....................................</p></td>
            <td style="width: 35%;">Purnawanto, S.Pd., M.Si.</td>
          </tr>
          <tr>
            <td style="width: 65%;"></td>
            <td style="width: 35%;">NIP. 196802281993031004</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  {{-- button unduh --}}
  <div class="d-flex justify-content-center my-3">
    <button class="btn-blue px-5 py-2 font-20" onclick="window.print();">Unduh</button>
  </div>
@endsection