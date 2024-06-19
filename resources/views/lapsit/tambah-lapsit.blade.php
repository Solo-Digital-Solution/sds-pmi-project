@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-center_focus_strong"></i>
            </div>
            <div class="page-title">
                <h5>Form Laporan Situasi</h5>
                <h6 class="sub-heading">Lengkapi formulir berikut untuk menambahkan laporan situasi baru.</h6>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="right-actions">
                <span class="last-login">Last Login: 5 minutes ago</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- Row start -->
<div class="row gutters">

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Lapsit ke-</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">
                        Tanggal Update Kejadian <span style="color: red;">*</span>
                    </label>
                    <div class="col-sm-3">
                        <input type="datetime-local" class="form-control" id="colFormLabel" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">
                        Gambaran Umum Situasi <span style="color: red;">*</span>
                    </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">
                        Keterangan Akses Menuju Lokasi <span style="color: red;">*</span>
                    </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>


            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="d-flex justify-content-center">
            <h5 class="m-0 mb-2">DAMPAK</h5>
        </div>
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Korban Terdampak</div>
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jumlah_kk">Jumlah KK</label>
                            <input class="form-control" id="jumlah_kk" name="jumlah_kk" type="number" placeholder="Masukkan jumlah" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jumlah_jiwa">Jumlah Jiwa</label>
                            <input class="form-control" id="jumlah_jiwa" name="jumlah_jiwa" type="number" placeholder="Masukkan jumlah" required>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Korban Jiwa</div>
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Luka Berat</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Luka ringan</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Meninggal</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Hilang</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Mengungsi</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Kerusakan Rumah</div>
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Rusak Berat</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Rusak Sedang</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Rusak Ringan</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Kerusakan Fasilitas</div>
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Sekolah</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Tempat Ibadah</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Rumah Sakit</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Pasar</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Gedung Pemerintah</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Lain-lain</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Kerusakan Infrastruktur</div>
            <div class="card-body">

                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Pengungsian</div>
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-sm-12 col-12">
                        <div class="form-group">
                            <label for="deskripsiKerusakan">Lokasi</label>
                            <textarea class="form-control" id="deskripsiKerusakan" placeholder="Masukkan Nama Lokasi, Kel, Kec" name="deskripsi_kerusakan" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah KK</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah Jiwa</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah laki-laki</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah perempuan</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Balita</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">5 tahun - 18 tahun</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Lebih dari 18 tahun</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                </div>

                <hr>
                <div id="pengungsianContainer">
                    <!-- Form pengungsian akan ditambahkan di sini -->
                </div>
                <button type="button" id="addPengungsian" class="btn btn-primary btn-lg mt-3">+ Tambah pengungsian</button>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="d-flex justify-content-center">
            <h5 class="m-0 mb-2">MOBILISASI SUMBER DAYA PMI</h5>
        </div>
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Personil</div>
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Pengurus</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Staff Markas</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Relawan PMI</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Sukarelawan Spesialis</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Personil Bantuan Teknis/Ahli/Spesialis (TSR)</div>
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Medis</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Paramedis</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Relief</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Logistik</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Watsan</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">IT Telekom</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Sheltering</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Alat Utama Sistim TDB</div>
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Kendaraan Operasional</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Truk angkutan</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Truk tangki</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Double Cabin</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Alat DU</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Ambulans</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Alat Watsan</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">RS Lapangan</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Alat PKDD</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Gudang lapangan</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Posko Aju</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Alat IT/Tel Lapangan</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="col-sm-12">
        <div class="d-flex justify-content-center">
            <h5 class="m-0 mb-2">GIAT PMI</h5>
        </div>
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Evakuasi korban luka-luka</div>
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Luka Ringan Berat</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Meninggal</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Distribusi Layanan</div>
            <div class="card-body">

                <div id="formContainer">
                    <!-- Form petugas posko akan ditambahkan di sini -->
                </div>
                <div class="row gutters">
                    <div class="col-sm-12 col-12">
                        <button type="button" id="addForm" class="btn btn-primary btn-lg">+ Tambah distribusi layanan</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Giat Pemerintah</div>
            <div class="card-body">

                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Kebutuhan</div>
            <div class="card-body">

                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Hambatan</div>
            <div class="card-body">

                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Personil yang Bisa Dihubungi</div>
            <div class="card-body">

                <div class="row gutters">
                    <!-- Inputan Nama Lengkap -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input class="form-control" id="namaLengkap" type="text" placeholder="Masukkan nama lengkap" name="nama_lengkap[]">
                        </div>
                    </div>
                    <!-- Inputan Posisi -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <input class="form-control" id="posisi" type="text" placeholder="Masukkan posisi" name="posisi[]">
                        </div>
                    </div>
                    <!-- Inputan Kontak -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input class="form-control" id="kontak" type="text" placeholder="Masukkan kontak" name="kontak[]">
                        </div>
                    </div>
                </div>
                <hr>
                <div id="personilContainer">
                    <!-- Form personil dihubungi akan ditambahkan di sini -->
                </div>
                <button type="button" id="addPersonil" class="btn btn-primary btn-lg mt-3">+ Tambah personil dihubungi</button>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Petugas Posko</div>
            <div class="card-body">

                <div class="row gutters">
                    <!-- Inputan Nama Lengkap -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input class="form-control" id="namaLengkap" type="text" placeholder="Masukkan nama lengkap" name="nama_lengkap[]">
                        </div>
                    </div>
                    <!-- Inputan Kontak -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input class="form-control" id="kontak" type="text" placeholder="Masukkan kontak" name="kontak[]">
                        </div>
                    </div>
                </div>
                <hr>
                <div id="petugasContainer">
                    <!-- Form petugas posko akan ditambahkan di sini -->
                </div>
                <button type="button" id="addPetugas" class="btn btn-primary btn-lg mt-3">+ Tambah petugas posko</button>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Dokumentasi</div>
            <div class="card-body">

                <div class="row gutters">
                    <div class="col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="">
            <div class="">

                <div class="d-flex justify-content-center w-100 py-3">
                    <a href="#">
                        <button type="button" class="btn btn-primary btn-lg"><i class="icon-location-arrow"></i> Kirim Laporan</button>
                    </a>
                </div>



            </div>
        </div>
    </div>

</div>
<!-- Row end -->

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    // Inisialisasi peta
    var map = L.map('map').setView([-6.200000, 106.816666], 8);

    // Tambahkan tile layer dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker;

    // Fungsi untuk menambahkan marker dan mengisi input lokasi
    function onMapClick(e) {
        if (marker) {
            map.removeLayer(marker);
        }
        marker = L.marker(e.latlng).addTo(map);
        document.getElementById('location').value = `Lat: ${e.latlng.lat}, Lng: ${e.latlng.lng}`;
    }

    // Tambahkan event listener untuk klik pada peta
    map.on('click', onMapClick);
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- END: .app-main -->

<!-- Modal pengungsian start -->
<script>
    $(document).ready(function(){
        $('#addPengungsian').click(function(){
            var form = `
            <div class="pengungsian-form">

                <div class="row gutters">
                    <div class="col-sm-12 col-12">
                        <div class="form-group">
                            <label for="deskripsiKerusakan">Lokasi</label>
                            <textarea class="form-control" id="deskripsiKerusakan" placeholder="Masukkan Nama Lokasi, Kel, Kec" name="deskripsi_kerusakan" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah KK</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah Jiwa</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah laki-laki</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah perempuan</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Balita</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">5 tahun - 18 tahun</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Lebih dari 18 tahun</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                </div>

                <hr>
                
            </div>
            `;
            $('#pengungsianContainer').append(form);
        });
    });
</script>
<!-- Modal pengungsian start -->
<!-- Modal distribusi layanan start -->
<script>
    $(document).ready(function(){
        $('#addForm').click(function(){
            var form = `
            <div class="form-group-wrapper">
                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jenisDistribusiLayanan">Jenis Distribusi Layanan</label>
                            <select class="form-control" name="jenis_distribusi_layanan[]">
                                <option value="Distribusi Food Item">Distribusi Food Item</option>
                                <option value="Distribusi Non-food item">Distribusi Non-food item</option>
                                <option value="Layanan Yankes">Layanan Yankes</option>
                                <option value="Layanan air bersih">Layanan air bersih</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input class="form-control" type="text" placeholder="Masukkan lokasi" name="lokasi[]">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="unit">Unit</label>
                            <select class="form-control" name="unit[]">
                                <option value="KK">KK</option>
                                <option value="orang">Orang</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input class="form-control" type="number" placeholder="Masukkan jumlah" name="jumlah[]">
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            `;
            $('#formContainer').append(form);
        });
    });
</script>
<!-- Modal distribusi layanan end -->

<!-- Modal personil dihubungi start -->
<script>
    $(document).ready(function(){
        $('#addPersonil').click(function(){
            var form = `
            <div class="personil-form">
                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input class="form-control" type="text" placeholder="Masukkan nama lengkap" name="nama_lengkap[]">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <input class="form-control" type="text" placeholder="Masukkan posisi" name="posisi[]">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input class="form-control" type="text" placeholder="Masukkan kontak" name="kontak[]">
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            `;
            $('#personilContainer').append(form);
        });
    });
</script>
<!-- Modal personil dihubungi start -->
<!-- Modal petugas Posko start -->
<script>
    $(document).ready(function(){
        $('#addPetugas').click(function(){
            var form = `
            <div class="petugas-form">
                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input class="form-control" type="text" placeholder="Masukkan nama lengkap" name="nama_lengkap[]">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input class="form-control" type="text" placeholder="Masukkan kontak" name="kontak[]">
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            `;
            $('#petugasContainer').append(form);
        });
    });
</script>
<!-- Modal petugas Posko start -->
@endsection