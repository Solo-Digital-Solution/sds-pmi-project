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
        @if (!empty($kejadians))
            @php $kejadian = $kejadians[0]; @endphp
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
        @endif

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

                <tr>
                    <td colspan="2">KK</td>
                    @foreach ($korban_terdampak as $kt)
                        <td>{{ $kt->jmlh_kk ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($korban_terdampak); $i < 8; $i++)
                        <td></td>
                    @endfor

                </tr>
                <tr>
                    <td colspan="2">Jiwa</td>
                    @foreach ($korban_terdampak as $kt)
                        <td>{{ $kt->jmlh_jiwa ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($korban_terdampak); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <th colspan="10">Korban Jiwa/Luka/Mengungsi</th>
                </tr>
                <tr>
                    <td colspan="2">Luka berat</td>
                    @foreach ($korban_jiwa as $kj)
                        <td>{{ $kj->luka_berat ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($korban_jiwa); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Luka Ringan</td>
                    @foreach ($korban_jiwa as $kj)
                        <td>{{ $kj->luka_ringan ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($korban_jiwa); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Meninggal</td>
                    @foreach ($korban_jiwa as $kj)
                        <td>{{ $kj->meninggal ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($korban_jiwa); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Hilang</td>
                    @foreach ($korban_jiwa as $kj)
                        <td>{{ $kj->hilang ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($korban_jiwa); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Mengungsi</td>
                    @foreach ($korban_jiwa as $kj)
                        <td>{{ $kj->mengungsi ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($korban_jiwa); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
            </table>
            <table class="table dampak-table">
                <tr>
                    <th colspan="10">Kerusakan Rumah</th>
                </tr>
                <tr>
                    <td colspan="2">Rusak Berat</td>
                    @foreach ($kerusakan_rumah as $kr)
                        <td>{{ $kr->rusak_berat ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($kerusakan_rumah); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Rusak Sedang</td>
                    @foreach ($kerusakan_rumah as $kr)
                        <td>{{ $kr->rusak_sedang ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($kerusakan_rumah); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Rusak Ringan</td>
                    @foreach ($kerusakan_rumah as $kr)
                        <td>{{ $kr->rusak_ringan ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($kerusakan_rumah); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
            </table>
            <table class="table dampak-table">
                <tr>
                    <th colspan="10">Kerusakan Fasilitas Sosial/Umum</th>
                </tr>
                <tr>
                    <td colspan="2">Sekolah</td>
                    @foreach ($kerusakan_fasilitas as $kf)
                        <td>{{ $kf->sekolah ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($kerusakan_fasilitas); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Tempat Ibadah</td>
                    @foreach ($kerusakan_fasilitas as $kf)
                        <td>{{ $kf->tempat_ibadah ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($kerusakan_fasilitas); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Rumah Sakit</td>
                    @foreach ($kerusakan_fasilitas as $kf)
                        <td>{{ $kf->rumah_sakit ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($kerusakan_fasilitas); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Pasar</td>
                    @foreach ($kerusakan_fasilitas as $kf)
                        <td>{{ $kf->pasar ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($kerusakan_fasilitas); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Gedung Pemerintah</td>
                    @foreach ($kerusakan_fasilitas as $kf)
                        <td>{{ $kf->gedung_pemerintah ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($kerusakan_fasilitas); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Lain-lain</td>
                    @foreach ($kerusakan_fasilitas as $kf)
                        <td>{{ $kf->lain_lain ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($kerusakan_fasilitas); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
            </table>
            <table class="table dampak-table">
                <tr>
                    <th colspan="10">Kerusakan Infrastruktur</th>
                </tr>
                <tr>
                    <td colspan="10">
                        <ul style="text-align: left;">
                            @foreach ($kerusakan_infrastruktur as $ki)
                            <li>{{ $ki->deskripsi_kerusakan }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
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
                @foreach ($transaction_shelter as $sh)
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
                <tr>
                    <td colspan="2">Pengurus</td>
                    @foreach ($personil as $pr)
                        <td>{{ $pr->pengurus ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($personil); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Staf Markas</td>
                    @foreach ($personil as $pr)
                        <td>{{ $pr->staf_markas ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($personil); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Relawan PMI</td>
                    @foreach ($personil as $pr)
                        <td>{{ $pr->relawan_pmi ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($personil); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Sukarelawan Spesialis</td>
                    @foreach ($personil as $pr)
                        <td>{{ $pr->sukarelawan_spesialis ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($personil); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
            </table>
            <table class="dampak-table">
                <tr>
                    <th colspan="10">Personil Bantuan Teknis/Ahli/Spesialis (TSR)</th>
                </tr>
                <tr>
                    <td colspan="2">Medis</td>
                    @foreach ($tsr as $ts)
                        <td>{{ $ts->medis ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tsr); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Paramedis</td>
                    @foreach ($tsr as $ts)
                        <td>{{ $ts->paramedis ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tsr); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Relief</td>
                    @foreach ($tsr as $ts)
                        <td>{{ $ts->relief ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tsr); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Logistics</td>
                    @foreach ($tsr as $ts)
                        <td>{{ $ts->logistics ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tsr); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Watsan</td>
                    @foreach ($tsr as $ts)
                        <td>{{ $ts->watsan ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tsr); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">IT-Telekom</td>
                    @foreach ($tsr as $ts)
                        <td>{{ $ts->it_telekom ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tsr); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Sheltering</td>
                    @foreach ($tsr as $ts)
                        <td>{{ $ts->sheltering ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tsr); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
            </table>
            <table class="dampak-table">
                <tr>
                    <th colspan="10">Alat Utama Sistem TDB</th>
                </tr>
                <tr>
                    <td colspan="2">Kend. Ops</td>
                    @foreach ($tdb as $td)
                        <td>{{ $td->kend_ops ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tdb); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Truk Angkutan</td>
                    @foreach ($tdb as $td)
                        <td>{{ $td->truk_angkutan ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tdb); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Truk Tangki</td>
                    @foreach ($tdb as $td)
                        <td>{{ $td->truk_tangki ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tdb); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Double Cabin</td>
                    @foreach ($tdb as $td)
                        <td>{{ $td->double_cabin ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tdb); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Alat DU</td>
                    @foreach ($tdb as $td)
                        <td>{{ $td->alat_du ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tdb); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Ambulans</td>
                    @foreach ($tdb as $td)
                        <td>{{ $td->ambulans ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tdb); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Alat Watsan</td>
                    @foreach ($tdb as $td)
                        <td>{{ $td->alat_watsan ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tdb); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">RS Lapangan</td>
                    @foreach ($tdb as $td)
                        <td>{{ $td->rs_lapangan ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tdb); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Alat PKDD</td>
                    @foreach ($tdb as $td)
                        <td>{{ $td->alat_pkdd ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tdb); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Gudang Lapangan</td>
                    @foreach ($tdb as $td)
                        <td>{{ $td->gudang_lapangan ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tdb); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Posko Aju</td>
                    @foreach ($tdb as $td)
                        <td>{{ $td->posko_aju ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tdb); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Alat IT/Tel Lapangan</td>
                    @foreach ($tdb as $td)
                        <td>{{ $td->it_lapangan ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($tdb); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
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
                <tr>
                    <td colspan="2">Luka Ringan/Berat</td>
                    @foreach ($evakuasi_korban as $ek)
                        <td>{{ $ek->luka_ringan_berat ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($evakuasi_korban); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
                <tr>
                    <td colspan="2">Meninggal</td>
                    @foreach ($evakuasi_korban as $ek)
                        <td>{{ $ek->meninggal ?? 0 }}</td>
                    @endforeach
                    @for ($i = count($evakuasi_korban); $i < 8; $i++)
                        <td></td>
                    @endfor
                </tr>
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
                @foreach ($laporans as $lp)
                <tr>
                    <td colspan="10">{{ $lp->giat_pemerintah ?? 0 }}</td>
                </tr>
                @endforeach
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">KEBUTUHAN</th>
                </tr>
                @foreach ($laporans as $lp)
                <tr>
                    <td colspan="10">{{ $lp->kebutuhan }}</td>
                </tr>
                @endforeach
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">HAMBATAN</th>
                </tr>
                @foreach ($laporans as $lp)
                <tr>
                    <td colspan="10">{{ $lp->hambatan }}</td>
                </tr>
                @endforeach
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
                @foreach ($transaction_personil_dihubungi as $pd)
                <tr>
                    <td colspan="4">{{ $pd->nama_lengkap }}</td>
                    <td colspan="3">{{ $pd->posisi }}</td>
                    <td colspan="3">{{ $pd->kontak }}</td>
                </tr>
                @endforeach
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
                @foreach ($transaction_petugas_posko as $pp)
                <tr>
                        <td colspan="5">{{ $pp->nama_lengkap }}</td>
                        <td colspan="5">{{ $pp->kontak }}</td>
                </tr>
                @endforeach
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: white; color: black; width: 100px;" colspan="10">LAMPIRAN DOKUMENTASI</th>
                </tr>
                @foreach ($transaction_dokumentasi as $index => $dk)
                    @if ($index % 2 == 0)
                        <tr>
                    @endif
                    <td colspan="5">
                        <img src="{{ public_path('dokumentasi/'.$dk->file_path) }}" height="190px" alt="">
                    </td>
                    @if ($index % 2 == 1)
                        </tr>
                    @endif
                @endforeach
                @if (count($transaction_dokumentasi) % 2 != 0)
                    <td colspan="5"></td></tr>
                @endif
            </table>
        </div>

    </div>
</body>
</html>
