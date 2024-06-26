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
        <p>Generated on {{ $currentDay }}, {{ $currentDate }} at {{ $currentTime }} </p>

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

        <div>
            <table class="deskripsi-umum" style="padding-top:10px;">
                <tr>
                    <td style="font-weight: bold;">Kejadian Bencana</td>
                    <td style="font-weight: bold; background-color:  white;">: Banjir</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Lokasi</td>
                    <td>: Surakarta</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Waktu Kejadian</td>
                    <td style="background-color: white;">: 02.00</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Update</td>
                    <td>: 06.30</td>
                </tr>
                <tr>
                    <td style="background-color: #f8d7da;">Pemerintah membutuhkan dukungan internasional</td>
                    <td>: TIDAK</td>
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">GAMBARAN UMUM SITUASI</th>
                </tr>
                <tr>
                    <td style="text-align: justify;" colspan="10">Hujan yang mengguyur kota Surakarta dan sekitarnya pada hari Kamis, 16 Februari 2023 sejak pukul 14.15 hingga pukul 16.00 WIB mengakibatkan debit air di sungai-sungai yang ada di Kota Surakarta meningkat cukup cepat. Ketinggian genangan antara 15-70 cm. hingga saat ini cuaca masih hujan ringan merata di wilayah Kota Surakarta. Terdapat beberapa genangan banjir di beberapa wilayah kota Surakarta antara lain: Jagalan, Gandekan, Sudiroprajan, Pucangsawit, Semanggi, Joyosuran, Mojo, sangkrah, dan Joyontakan. Terdapat beberapa tempat pengungsian yaitu di Pendopo kelurahan Gandekan kelurahan kedung lumbu masjid al anshor, Jagalan RW 14.</td>
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">KETERANGAN AKSES MENUJU LOKASI</th>
                </tr>
                <tr>
                    <td style="text-align: justify;" colspan="10">Beberapa jalan kampung di kelurahan Semanggi, Joyosuran, Joyontakan di tutup karena tergenang antara 50-70 cm.</td>
                </tr>
            </table>
        </div>

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
                    <td>650</td>
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
                    <td>2614</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th colspan="10">Korban Jiwa/Luka/Mengungsi</th>
                </tr>
                <tr>
                    <td colspan="2">Luka berat</td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Luka ringan</td>
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>2614</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table class="table dampak-table">
                <tr>
                    <th colspan="10">Kerusakan Rumah</th>
                </tr>
                <tr>
                    <td colspan="2">Rusak Berat</td>
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table class="table dampak-table">
                <tr>
                    <th colspan="10">Kerusakan Fasilitas Sosial/Umum</th>
                </tr>
                <tr>
                    <td colspan="2">Sekolah</td>
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table class="table dampak-table">
                <tr>
                    <th colspan="10">Kerusakan Infrastruktur</th>
                </tr>
                <tr>
                    <td style="text-align: justify;" colspan="10">Lorem ipsum dolor sit amet</td>
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
                <tr>
                    <td colspan="2">Pendopo Kelurahan Gandekan</td>
                    <td>25</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Masjid Al-Anshor, Jagalan, RW 14</td>
                    <td>190</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Kelurahan Kedung Lumbu</td>
                    <td>200</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>

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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Staf Markas Kab/Kota</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tr>
                <tr>
                    <td colspan="2">Staf Markas Provinsi</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Staf Markas Pusat</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Relawan PMI Kab/Kota</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Relawan PMI Provinsi</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">Relawan Lintas Provinsi</td>
                    <td></td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table class="dampak-table">
                <tr>
                    <th colspan="10">Personil Bantuan Teknis/Ahli/Spesialis (TSR)</th>
                </tr>
                <tr>
                    <td colspan="2">Medis</td>
                    <td></td>
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
                    <td></td>
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
                    <td></td>
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
                    <td></td>
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
                    <td></td>
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
                    <td></td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table class="dampak-table">
                <tr>
                    <th colspan="10">Alat Utama Sistem TDB</th>
                </tr>
                <tr>
                    <td colspan="2">Kend. Ops</td>
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
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
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
                    <td></td>
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <table class="dampak-table">
                <tr>
                    <th colspan="10">Layanan Korban Bencana - Lapsit #</th>
                </tr>
                <tr>
                    <th colspan="2"></th>
                    <th colspan="4">Tempat/Lokasi</th>
                    <th colspan="2">KK/Orang</th>
                    <th colspan="2">Jumlah</th>
                </tr>
                <tr>
                    <td colspan="2">Distribusi Food Item</td>
                    <td colspan="4"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="2">Distribusi Non-Food Item</td>
                    <td colspan="4"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="2">Layanan Kesehatan</td>
                    <td colspan="4"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="2">Layanan Air Bersih</td>
                    <td colspan="4"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="2">Lain-lain</td>
                    <td colspan="4"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">GIAT PEMERINTAH</th>
                </tr>
                <tr>
                    <td colspan="10"></td>
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">KEBUTUHAN</th>
                </tr>
                <tr>
                    <td colspan="10"></td>
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" colspan="10">HAMBATAN</th>
                </tr>
                <tr>
                    <td colspan="10"></td>
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
                    <td colspan="4">Jumadi</td>
                    <td colspan="3">Kepala Sie. PB PMI Solo</td>
                    <td colspan="3">081234583328</td>
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
                    <td colspan="5">Bambang</td>
                    <td colspan="5">081234562178</td>
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: white; color: black; width: 100px;" colspan="10">LAMPIRAN DOKUMENTASI</th>
                </tr>
                <tr>
                    <td colspan="5">
                        <img src="{{ public_path('img/banjir.jpg') }}" height="190px" alt="">
                    </td>
                    <td colspan="5">
                        <img src="{{ public_path('img/banjir.jpg') }}" height="190px" alt="">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>