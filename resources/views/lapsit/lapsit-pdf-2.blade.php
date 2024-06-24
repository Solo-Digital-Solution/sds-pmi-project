<!DOCTYPE html>
<html>

<head>
    <title>Laporan Situasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            font-size: 10px; /* Sesuaikan ukuran font */
            word-wrap: break-word; /* Tambahkan ini untuk word wrapping */
            page-break-inside: avoid;
        }

        .padding-table {
            margin-top: 10px;
            margin-bottom: 10px;
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
            height: 100%;
        }

        .color1 {
            background-color: #ff0000;
            width: 25%;
        }

        .color2 {
            background-color: #ff4d4d;
            width: 25%;
        }

        .color3 {
            background-color: #ff9999;
            width: 25%;
        }

        .color4 {
            background-color: #ffcccc;
            width: 25%;
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
        <p>Tanggal generate laporan: </p>

        <div class="header">
            <div class="gradient-bar">
                <div class="color color1"></div>
                <div class="color color2"></div>
                <div class="color color3"></div>
                <div class="color color4"></div>
            </div>
            <div class="logo-container">
            </div>
        </div>

        <h3 style="text-align: center;">LAPORAN SITUASI</h3>

        <div>
            <table class="deskripsi-umum padding-table">
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
                    <td style="background-color:  #f8d7da;">Pemerintah membutuhkan dukungan internasional</td>
                    <td>: TIDAK</td>
                </tr>
            </table>
        </div>

        <div class="table-2-col padding-table">
            <div class="label">
                <h3>Gambaran Umum Situasi</h3>
            </div>
            <div class="content">
                <p>Hujan yang mengguyur kota Surakarta dan sekitarnya pada hari Kamis, 16 Februari 2023 sejak pukul 14.15 hingga pukul 16.00 WIB mengakibatkan debit air di sungai-sungai yang ada di Kota Surakarta meningkat cukup cepat. Ketinggian genangan antara 15-70 cm. hingga saat ini cuaca masih hujan ringan merata di wilayah Kota Surakarta. Terdapat beberapa genangan banjir di beberapa wilayah kota Surakarta antara lain: Jagalan, Gandekan, Sudiroprajan, Pucangsawit, Semanggi, Joyosuran, Mojo, sangkrah, dan Joyontakan. Terdapat beberapa tempat pengungsian yaitu di Pendopo kelurahan Gandekan kelurahan kedung lumbu masjid al anshor, Jagalan RW 14.</p>
            </div>
        </div>

        <div class="table-2-col padding-table">
            <div class="label">
                <h3>Keterangan Akses menuju Lokasi</h3>
            </div>
            <div class="content">
                <p>Beberapa jalan kampung di kelurahan Semanggi, Joyosuran, Joyontakan di tutup karena tergenang antara 50-70 cm.</p>
            </div>
        </div>

        <div class="padding-table">
            <table class="table dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px; page-break-before: avoid;" rowspan="29">DAMPAK</th>
                    <th style="background-color: red; color: white;" colspan="9">DAMPAK</th>
                </tr>
                <tr>
                    <th colspan="9">Korban Terdampak</th>
                </tr>
                <tr>
                    <th></th>
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
                    <td>KK</td>
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
                    <td>Jiwa</td>
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
                    <th colspan="9">Korban Jiwa/Luka/Mengungsi</th>
                </tr>
                <tr>
                    <td>Luka berat</td>
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
                    <td>Luka ringan</td>
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
                    <td>Meninggal</td>
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
                    <td>Hilang</td>
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
                    <td>Mengungsi</td>
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
                    <th colspan="9">Kerusakan Rumah</th>
                </tr>
                <tr>
                    <td>Rusak Berat</td>
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
                    <td>Rusak Sedang</td>
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
                    <td>Rusak Ringan</td>
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
                    <th colspan="9">Kerusakan Fasilitas Sosial/Umum</th>
                </tr>
                <tr>
                    <td>Sekolah</td>
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
                    <td>Tempat Ibadah</td>
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
                    <td>Rumah Sakit</td>
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
                    <td>Pasar</td>
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
                    <td>Gedung Pemerintah</td>
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
                    <td>Lain-lain</td>
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
                    <th colspan="9">Kerusakan Infrastruktur</th>
                </tr>
                <tr>
                    <td colspan="9"></td>
                </tr>
                <tr>
                    <th colspan="9">Pengungsian</th>
                </tr>
                <tr>
                    <td>Nama, Lokasi, Kel, Kec</td>
                    <td>KK</td>
                    <td>Jiwa</td>
                    <td>L</td>
                    <td>P</td>
                    <td>
                        <p>&#60;5</p>
                    </td>
                    <td>
                        <p>&#62;5&ge;18</p>
                    </td>
                    <td>
                        <p>&#60;18</p>
                    </td>
                    <td>Jumlah</td>
                </tr>
                <tr>
                    <td>Pendopo Kelurahan Gandekan</td>
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
                    <td>Masjid Al-Anshor, Jagalan, RW 14</td>
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
                    <td>Kelurahan Kedung Lumbu</td>
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
                    <th style="background-color: red; color: white; width: 100px;" rowspan="32">MOBILISASI SUMBER DAYA PMI</th>
                    <th colspan="9">PERSONIL</th>
                </tr>
                <tr>
                    <th></th>
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
                    <td>Pengurus</td>
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
                    <td>Staf Markas Kab/Kota</td>
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
                    <td>Staf Markas Provinsi</td>
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
                    <td>Staf Markas Pusat</td>
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
                    <td>Relawan PMI Kab/Kota</td>
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
                    <td>Relawan PMI Provinsi</td>
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
                    <td>Relawan Lintas Provinsi</td>
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
                    <td>Sukarelawan Spesialis</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr></tr>
                <tr>
                    <th colspan="9">Personil Bantuan Teknis/Ahli/Spesialis (TSR)</th>
                </tr>
                <tr>
                    <td>Medis</td>
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
                    <td>Paramedis</td>
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
                    <td>Relief</td>
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
                    <td>Logistics</td>
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
                    <td>Watsan</td>
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
                    <td>IT-Telekom</td>
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
                    <td>Sheltering</td>
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
                    <th colspan="9">Alat Utama Sistem TDB</th>
                </tr>
                <tr>
                    <td>Kend. Ops</td>
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
                    <td>Truk Angkutan</td>
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
                    <td>Truk Tangki</td>
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
                    <td>Double Cabin</td>
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
                    <td>Alat DU</td>
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
                    <td>Ambulans</td>
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
                    <td>Alat Watsan</td>
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
                    <td>RS Lapangan</td>
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
                    <td>Alat PKDD</td>
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
                    <td>Gudang Lapangan</td>
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
                    <td>Posko Aju</td>
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
                    <td>Alat IT/Tel Lapangan</td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" rowspan="32">GIAT PMI</th>
                </tr>
                <tr>
                    <th colspan="9">Evakuasi Korban Luka-Luka</th>
                </tr>
                <tr>
                    <th></th>
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
                    <td>Luka Ringan/Berat</td>
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
                    <td>Meninggal</td>
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
                    <th colspan="9">Layanan Korban Bencana - Lapsit #</th>
                </tr>
                <tr>
                    <th></th>
                    <th colspan="4">Tempat/Lokasi</th>
                    <th colspan="2">KK/Orang</th>
                    <th colspan="2">Jumlah</th>
                </tr>
                <tr>
                    <td>Distribusi Food Item</td>
                    <td colspan="4"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td>Distribusi Non-Food Item</td>
                    <td colspan="4"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td>Layanan Kesehatan</td>
                    <td colspan="4"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td>Layanan Air Bersih</td>
                    <td colspan="4"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td>Lain-lain</td>
                    <td colspan="4"></td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" rowspan="32">GIAT PEMERINTAH</th>
                </tr>
                <tr>
                    <td colspan="9"></td>
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" rowspan="32">KEBUTUHAN</th>
                </tr>
                <tr>
                    <td colspan="9"></td>
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" rowspan="32">HAMBATAN</th>
                </tr>
                <tr>
                    <td colspan="9"></td>
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" rowspan="32">PERSONIL YANG BISA DIHUBUNGI</th>
                </tr>
                <tr>
                    <th style="font-weight:bold;">Nama Lengkap</th>
                    <th>Posisi</th>
                    <th>Kontak</th>
                </tr>
                <tr>
                    <td>Wanto</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Jumadi</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Indro SW</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>

        <div class="padding-table">
            <table class="dampak-table">
                <tr>
                    <th style="background-color: red; color: white; width: 100px;" rowspan="32">PETUGAS POSKO</th>
                </tr>
                <tr>
                    <th style="font-weight:bold;">Nama Lengkap</th>
                    <th>Kontak</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>