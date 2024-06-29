<!DOCTYPE html>
<html>

<head>
    <title>Laporan Situasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 10pt;
        }

        .container {
            width: 100%;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 4px;
            text-align: left;
            font-size: 10px;
            /* Sesuaikan ukuran font */
            word-wrap: break-word;
        }

        .padding-table {
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .deskripsi-umum,
        .dampak-table {
            border: 1px solid black;
        }

        .deskripsi-umum td,
        .dampak-table th,
        .dampak-table td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        .dukung-internasional,
        .situasi,
        .akses-lokasi {
            margin-top: 20px;
        }

        .situasi p,
        .akses-lokasi p {
            margin: 0;
        }

        .dampak-table th {
            background-color: yellow;
        }

        .dampak-table tr:nth-child(odd) td {
            background-color: white;
        }

        .dampak-table th,
        .dampak-table td {
            font-size: 12px;
        }

        .situasi h3,
        .akses-lokasi h3 {
            background-color: red;
            color: white;
            padding: 5px;
            margin: 0;
        }

        .table-2-col {
            display: table;
            width: 100%;
            border: 1px solid black;
        }

        .label {
            background-color: red;
            color: white;
            padding: 20px;
            width: 25%;
            font-size: 12px;
            text-align: center;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content {
            padding: 20px;
            width: 80%;
            font-size: 12px;
            border-left: 1px solid black;
            text-align: justify;
        }

        .deskripsi-umum td {
            font-size: 12px;
            width: 2%;
        }

        .deskripsi-umum td:nth-child(2) {
            background-color: #f8d7da;
            font-size: 12px;
            text-align: justify;
        }

        .deskripsi-umum tr:last-child td {
            border-top: solid #000;
            font-weight: bold;
            font-size: 12px;
        }

        .header {
            display: flex;
            align-items: center;
            width: 100%;
            height: 50px;
        }

        .gradient-bar {
            display: flex;
            height: 50px;
            flex: 1;
        }

        .color {
            height: 40px;
        }

        .color1 {
            background-color: #ff0000;
            width: 25%;
        }

        .color2 {
            background-color: #ff4d4d;
            width: 20%;
        }

        .color3 {
            background-color: #ff9999;
            width: 15%;
        }

        .color4 {
            background-color: #ffcccc;
            width: 10%;
        }

        .logo {
            width: 20%;
            text-align: center;
        }

        .logo-container {
            display: grid;
            align-items: center;
            justify-content: center;
            padding: 0 20px;
        }

        .logo-container img {
            height: 40px;
            margin-right: 10px;
        }

        .logo-container span {
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">


        <table>
            <tr>
                <td class="color color1"></td>
                <td class="color color2"></td>
                <td class="color color3"></td>
                <td class="color color4"></td>
                <td class="logo">
                    <img src="{{ public_path('img/logo-pmi-min.png') }}" height="50px" alt="">
                </td>
            </tr>
        </table>

        <h3 style="padding-top:15px; text-align: center;">LAPORAN SITUASI</h3>
        @foreach ($kejadians as $kejadian)
        <div>
            <table class="deskripsi-umum" style="padding-top:10px;">
                <tr>
                    <td style="font-weight: bold;">Kejadian Bencana</td>
                    <td style="font-weight: bold; background-color:  white;">: {{ $kejadian->nama_kejadian }}</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Lokasi</td>
                    <td>: {{ $kejadian->lokasi }}</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Waktu Kejadian</td>
                    <td style="background-color: white;">: {{ $kejadian->waktu_kejadian }}</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Update</td>
                    <td>: 06.30</td>
                </tr>
                <tr>
                    <td style="background-color: #f8d7da;">Pemerintah membutuhkan dukungan internasional</td>
                    <td>: {{ $kejadian->dukungan_inter }}</td>
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">GAMBARAN UMUM SITUASI</th>
                </tr>
                <tr>
                    <td style="text-align: justify;" colspan="10">{{ $kejadian->gambaran_situasi }}</td>
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">KETERANGAN AKSES MENUJU LOKASI</th>
                </tr>
                <tr>
                    <td style="text-align: justify;" colspan="10">{{ $kejadian->akses_lokasi }}</td>
                </tr>
            </table>
        </div>
        @endforeach

        @foreach ($laporans as $laporan)
        <div class="padding-table">
            <table class="table dampak-table">
                <tr>
                    <th style="background-color: red; color: white;" colspan="10">DAMPAK</th>
                </tr>
                <tr>
                    <th colspan="10">Korban Terdampak</th>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <th>Lapsit-awal</th>
                    <th>Lapsit-1</th>
                    <th>Lapsit-2</th>
                    <th>Lapsit-3</th>
                    <th>Lapsit-4</th>
                    <th>Lapsit-5</th>
                    <th>Lapsit-6</th>
                    <th>Lapsit-7</th>
                </tr>
                @foreach ($korban_terdampak as $kt)
                <tr>
                    <td colspan="2">KK</td>
                    <td>{{ $kt->jmlh_kk ?? 0 }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Jiwa</td>
                    <td>{{ $kt->jmlh_jiwa ?? 0 }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
                <tr>
                    <th colspan="10">Korban Jiwa/Luka/Mengungsi</th>
                </tr>
                @foreach ($korban_jiwa as $kj)
                <tr>
                    <td colspan="2">Luka berat</td>
                    <td>{{ $kj->luka_berat }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Luka Ringan</td>
                    <td>{{ $kj->luka_ringan }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Meninggal</td>
                    <td>{{ $kj->meninggal }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Hilang</td>
                    <td>{{ $kj->hilang }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Mengungsi</td>
                    <td>{{ $kj->mengungsi }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
            <table class="table dampak-table">
                <tr>
                    <th colspan="10">Kerusakan Rumah</th>
                </tr>
                @foreach ($kerusakan_rumah as $kr)
                <tr>
                    <td colspan="2">Rusak Berat</td>
                    <td>{{ $kr->rusak_berat }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Rusak Sedang</td>
                    <td>{{ $kr->rusak_sedang }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Rusak Ringan</td>
                    <td>{{ $kr->rusak_ringan }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
            <table class="table dampak-table">
                <tr>
                    <th colspan="10">Kerusakan Fasilitas Sosial/Umum</th>
                </tr>
                @foreach ($kerusakan_fasilitas as $kf)
                <tr>
                    <td colspan="2">Sekolah</td>
                    <td>{{ $kf->sekolah }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Tempat Ibadah</td>
                    <td>{{ $kf->tempat_ibadah }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Rumah Sakit</td>
                    <td>{{ $kf->rumah_sakit }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Pasar</td>
                    <td>{{ $kf->pasar }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Gedung Pemerintah</td>
                    <td>{{ $kf->gedung_pemerintah }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Lain-lain</td>
                    <td>{{ $kf->{'lain-lain'} }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
            <table class="table dampak-table">
                <tr>
                    <th colspan="10">Kerusakan Infrastruktur</th>
                </tr>
                @foreach ($kerusakan_infrastruktur as $ki)
                <tr>
                    <td style="text-align: justify;" colspan="10">{{ $ki->deskripsi_kerusakan }}</td>
                </tr>
                @endforeach
            </table>

            <table class="table dampak-table">
                <tr>
                    <th colspan="10">Pengungsian</th>
                </tr>
                <tr>
                    <th colspan="2">Nama, Lokasi, Kelurahan, Kecamatan</th>
                    <th>KK</th>
                    <th>Jiwa</th>
                    <th>L</th>
                    <th>P</th>
                    <th>
                        <p>&#60;5</p>
                    </th>
                    <th>
                        <p>&#62;5&ge;18</p>
                    </th>
                    <th>
                        <p>&#60;18</p>
                        </t>
                    <th>Jumlah</th>
                </tr>
                @foreach ($shelters as $sh)
                <tr>
                    <td colspan="2">{{ $sh->lokasi_shelter }}</td>
                    <td>{{ $sh->jumlah_kk }}</td>
                    <td>{{ $sh->jumlah_jiwa }}</td>
                    <td>{{ $sh->jumlah_laki }}</td>
                    <td>{{ $sh->jumlah_perempuan }}</td>
                    <td>{{ $sh->dibawah_lima }}</td>
                    <td>{{ $sh->antara_lima_dan_delapanbelas }}</td>
                    <td>{{ $sh->lebih_delapanbelas }}</td>
                    <td>{{ $sh->jumlah }}</td>
                </tr>
                @endforeach
            </table>

        </div>
        @endforeach

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">MOBILISASI SUMBER DAYA PMI</th>
                </tr>
                <tr>
                    <th colspan="10">PERSONIL</th>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <th>Lapsit-awal</th>
                    <th>Lapsit-1</th>
                    <th>Lapsit-2</th>
                    <th>Lapsit-3</th>
                    <th>Lapsit-4</th>
                    <th>Lapsit-5</th>
                    <th>Lapsit-6</th>
                    <th>Lapsit-7</th>
                </tr>
                @foreach($personil as $pr)
                <tr>
                    <td colspan="2">Pengurus</td>
                    <td>{{ $pr->pengurus }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Staf Markas</td>
                    <td>{{ $pr->staf_markas }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Relawan PMI</td>
                    <td>{{ $pr->relawan_pmi }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Sukarelawan Spesialis</td>
                    <td>{{ $pr->sukarelawan_spesialis }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
            <table class="dampak-table">
                <tr>
                    <th colspan="10">Personil Bantuan Teknis/Ahli/Spesialis (TSR)</th>
                </tr>
                @foreach($tsr as $tsr)
                <tr>
                    <td colspan="2">Medis</td>
                    <td>{{ $tsr->medis }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Paramedis</td>
                    <td>{{ $tsr->paramedis }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Relief</td>
                    <td>{{ $tsr->relief }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Logistics</td>
                    <td>{{ $tsr->logistics }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Watsan</td>
                    <td>{{ $tsr->watsan }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">IT-Telekom</td>
                    <td>{{ $tsr->it_telekom }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Sheltering</td>
                    <td>{{ $tsr->sheltering }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
            <table class="dampak-table">
                <tr>
                    <th colspan="10">Alat Utama Sistem TDB</th>
                </tr>
                @foreach ($tdb as $tdb)
                <tr>
                    <td colspan="2">Kend. Ops</td>
                    <td>{{ $tdb->kend_ops }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Truk Angkutan</td>
                    <td>{{ $tdb->truk_angkutan }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Truk Tangki</td>
                    <td>{{ $tdb->truk_tangki }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Double Cabin</td>
                    <td>{{ $tdb->double_cabin }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Alat DU</td>
                    <td>{{ $tdb->alat_du }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Ambulans</td>
                    <td>{{ $tdb->ambulans }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Alat Watsan</td>
                    <td>{{ $tdb->alat_watsan }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">RS Lapangan</td>
                    <td>{{ $tdb->rs_lapangan }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Alat PKDD</td>
                    <td>{{ $tdb->alat_pkdd }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Gudang Lapangan</td>
                    <td>{{ $tdb->gudang_lapangan }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Posko Aju</td>
                    <td>{{ $tdb->posko_aju }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Alat IT/Tel Lapangan</td>
                    <td>{{ $tdb->alat_it_lapangan }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">GIAT PMI</th>
                </tr>
                <tr>
                    <th colspan="10">Evakuasi Korban Luka-Luka</th>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <th>Lapsit-awal</th>
                    <th>Lapsit-1</th>
                    <th>Lapsit-2</th>
                    <th>Lapsit-3</th>
                    <th>Lapsit-4</th>
                    <th>Lapsit-5</th>
                    <th>Lapsit-6</th>
                    <th>Lapsit-7</th>
                </tr>
                @foreach ($evakuasi_korban as $ek)
                <tr>
                    <td colspan="2">Luka Ringan/Berat</td>
                    <td>{{ $ek->luka_ringan_berat }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Meninggal</td>
                    <td>{{ $ek->meninggal }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>

            <table class="dampak-table">
                <tr>
                    <th colspan="10">Layanan Korban Bencana - Lapsit</th>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <th colspan="4">Tempat/Lokasi</th>
                    <th colspan="2">KK/Orang</th>
                    <th colspan="2">Jumlah</th>
                </tr>
                @foreach ($distribusi_layanans as $dl)
                @if($dl->jenis_distribusi_layanan == 'Food Item')
                <tr>
                    <td colspan="2">Distribusi Food Item</td>
                    <td colspan="4">{{ $dl->lokasi }}</td>
                    <td colspan="2">{{ $dl->unit }}</td>
                    <td colspan="2">{{ $dl->jumlah }}</td>
                </tr>
                @elseif($dl->jenis_distribusi_layanan == 'Non-Food Item')
                <tr>
                    <td colspan="2">Distribusi Non-Food Item</td>
                    <td colspan="4">{{ $dl->lokasi }}</td>
                    <td colspan="2">{{ $dl->unit }}</td>
                    <td colspan="2">{{ $dl->jumlah }}</td>
                </tr>
                @elseif($dl->jenis_distribusi_layanan == 'Layanan Kesehatan')
                <tr>
                    <td colspan="2">Layanan Kesehatan</td>
                    <td colspan="4">{{ $dl->lokasi }}</td>
                    <td colspan="2">{{ $dl->unit }}</td>
                    <td colspan="2">{{ $dl->jumlah }}</td>
                </tr>
                @elseif($dl->jenis_distribusi_layanan == 'Layanan Air Bersih')
                <tr>
                    <td colspan="2">Layanan Air Bersih</td>
                    <td colspan="4">{{ $dl->lokasi }}</td>
                    <td colspan="2">{{ $dl->unit }}</td>
                    <td colspan="2">{{ $dl->jumlah }}</td>
                </tr>
                @else
                <tr>
                    <td colspan="2">Lain-lain</td>
                    <td colspan="4">{{ $dl->lokasi }}</td>
                    <td colspan="2">{{ $dl->unit }}</td>
                    <td colspan="2">{{ $dl->jumlah }}</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">GIAT PEMERINTAH</th>
                </tr>
                <tr>
                    @foreach ($laporans as $lp)
                    <td colspan="10">{{ $lp->giat_pemerintah }}</td>
                    @endforeach
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">KEBUTUHAN</th>
                </tr>
                <tr>
                    @foreach ($laporans as $lp)
                    <td colspan="10">{{ $lp->kebutuhan }}</td>
                    @endforeach
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">HAMBATAN</th>
                </tr>
                <tr>
                    @foreach ($laporans as $lp)
                    <td colspan="10">{{ $lp->hambatan }}</td>
                    @endforeach
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">PERSONIL YANG BISA DIHUBUNGI</th>
                </tr>
                <tr>
                    <th colspan="4">Nama Lengkap</th>
                    <th colspan="3">Posisi</th>
                    <th colspan="3">Kontak</th>
                </tr>
                <tr>
                    @foreach ($transaction_personil_dihubungi as $pd)
                        <td colspan="4">{{ $pd->nama_lengkap }}</td>
                        <td colspan="3">{{ $pd->posisi }}</td>
                        <td colspan="3">{{ $pd->kontak }}</td>
                    @endforeach
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">PETUGAS POSKO</th>
                </tr>
                <tr>
                    <th colspan="5">Nama Lengkap</th>
                    <th colspan="5">Kontak</th>
                </tr>
                <tr>
                    @foreach ($transaction_petugas_posko as $pp)
                        <td colspan="5">{{ $pp->nama_lengkap }}</td>
                        <td colspan="5">{{ $pp->kontak }}</td>
                    @endforeach
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: white; color: black; width: 100px;" colspan="10">LAMPIRAN DOKUMENTASI</th>
                </tr>
                <tr>

                </tr>
            </table>
        </div>
    </div>
</body>
</html>
