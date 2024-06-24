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
        <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">

                    <div class="form-group row">
                        <label for="nama_laporan" class="col-sm-3 col-form-label">Lapsit ke-</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="nama_laporan" name="nama_laporan" placeholder="">
                            <div id="error-message" style="color: red;"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="update" class="col-sm-3 col-form-label">
                            Tanggal Update Kejadian <span style="color: red;">*</span>
                        </label>
                        <div class="col-sm-3">
                            <input type="datetime-local" class="form-control" id="update" name="update">
                        </div>
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
                            <label for="luka_berat">Luka Berat</label>
                            <input class="form-control" name="luka_berat" id="luka_berat" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="luka_ringan">Luka ringan</label>
                            <input class="form-control" name="luka_ringan" id="luka_ringan" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="meninggal">Meninggal</label>
                            <input class="form-control" name="meninggal" id="meninggal" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="hilang">Hilang</label>
                            <input class="form-control" name="hilang" id="hilang" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="mengungsi">Mengungsi</label>
                            <input class="form-control" name="mengungsi" id="mengungsi" type="number" placeholder="Masukkan jumlah">
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
                            <label for="rusak_berat">Rusak Berat</label>
                            <input class="form-control" id="rusak_berat" name="rusak_berat" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="rusak_sedang">Rusak Sedang</label>
                            <input class="form-control" id="rusak_sedang" name="rusak_sedang" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="rusak_ringan">Rusak Ringan</label>
                            <input class="form-control" id="rusak_ringan" name="rusak_ringan" type="number" placeholder="Masukkan jumlah">
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
                            <label for="sekolah">Sekolah</label>
                            <input class="form-control" id="sekolah" name="sekolah" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="tempat_ibadah">Tempat Ibadah</label>
                            <input class="form-control" id="tempat_ibadah" name="tempat_ibadah" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="rumah_sakit">Rumah Sakit</label>
                            <input class="form-control" id="rumah_sakit" name="rumah_sakit" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="pasar">Pasar</label>
                            <input class="form-control" id="pasar" name="pasar" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="gedung_pemerintah">Gedung Pemerintah</label>
                            <input class="form-control" id="gedung_pemerintah" name="gedung_pemerintah" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="lain-lain">Lain-lain</label>
                            <input class="form-control" id="lain-lain" name="lain_lain" type="number" placeholder="Masukkan jumlah">
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
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi_kerusakan" rows="3"></textarea>
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
                            <label for="lokasi_shelter">Lokasi_shelter</label>
                            <textarea class="form-control" id="lokasi_shelter" name="lokasi_shelter" placeholder="Masukkan Nama Lokasi, Kel, Kec" name="deskripsi_kerusakan" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jumlah_kk">Jumlah KK</label>
                            <input class="form-control" id="jumlah_kk" name="jumlah_kk" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jumlah_jiwa">Jumlah Jiwa</label>
                            <input class="form-control" id="jumlah_jiwa" name="jumlah_jiwa" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jumlah_laki">Jumlah laki-laki</label>
                            <input class="form-control" id="jumlah_laki" name="jumlah_laki" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jumlah_perempuan">Jumlah perempuan</label>
                            <input class="form-control" id="jumlah_perempuan" name="jumlah_perempuan" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="dibawah_lima">Balita</label>
                            <input class="form-control" id="dibawah_lima" name="dibawah_lima" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="antara_lima_dan_delapanbelas">5 tahun - 18 tahun</label>
                            <input class="form-control" id="antara_lima_dan_delapanbelas" name="antara_lima_dan_delapanbelas" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="lebih_delapanbelas">Lebih dari 18 tahun</label>
                            <input class="form-control" id="lebih_delapanbelas" name="lebih_delapanbelas" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input class="form-control" id="jumlah" name="jumlah" type="number" placeholder="Masukkan jumlah">
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
                            <label for="pengurus">Pengurus</label>
                            <input class="form-control" id="pengurus" name="pengurus" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="staf_markas">Staff Markas</label>
                            <input class="form-control" id="staf_markas" name="staf_markas" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="relawan_pmi">Relawan PMI</label>
                            <input class="form-control" id="relawan_pmi" name="relawan_pmi" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="sukarelawan_spesialis">Sukarelawan Spesialis</label>
                            <input class="form-control" id="sukarelawan_spesialis" name="sukarelawan_spesialis" type="number" placeholder="Masukkan jumlah">
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
                            <label for="medis">Medis</label>
                            <input class="form-control" id="medis" name="medis" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="paramedis">Paramedis</label>
                            <input class="form-control" id="paramedis" name="paramedis" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="relief">Relief</label>
                            <input class="form-control" id="relief" name="relief" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="logistics">Logistik</label>
                            <input class="form-control" id="logistics" name="logistics" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="watsan">Watsan</label>
                            <input class="form-control" id="watsan" name="watsan" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="it_telekom">IT Telekom</label>
                            <input class="form-control" id="it_telekom" name="it_telekom" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="sheltering">Sheltering</label>
                            <input class="form-control" id="sheltering" name="sheltering" type="number" placeholder="Masukkan jumlah">
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
                            <label for="kend_ops">Kendaraan Operasional</label>
                            <input class="form-control" id="kend_ops" name="kend_ops" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="truk_angkutan">Truk angkutan</label>
                            <input class="form-control" id="truk_angkutan" name="truk_angkutan" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="truk_tangki">Truk tangki</label>
                            <input class="form-control" id="truk_tangki" name="truk_tangki" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="double_cabin">Double Cabin</label>
                            <input class="form-control" id="double_cabin" name="double_cabin" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="alat_du">Alat DU</label>
                            <input class="form-control" id="alat_du" name="alat_du" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="ambulans">Ambulans</label>
                            <input class="form-control" id="ambulans" name="ambulans" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="alat_watsan">Alat Watsan</label>
                            <input class="form-control" id="alat_watsan" name="alat_watsan" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="rs_lapangan">RS Lapangan</label>
                            <input class="form-control" id="rs_lapangan" name="rs_lapangan" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="alat_pkdd">Alat PKDD</label>
                            <input class="form-control" id="alat_pkdd" name="alat_pkdd" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="gudang_lapangan">Gudang lapangan</label>
                            <input class="form-control" id="gudang_lapangan" name="gudang_lapangan" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="posko_aju">Posko Aju</label>
                            <input class="form-control" id="posko_aju" name="posko_aju" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="alat_it_lapangan">Alat IT/Tel Lapangan</label>
                            <input class="form-control" id="alat_it_lapangan" name="alat_it_lapangan" type="number" placeholder="Masukkan jumlah">
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
                            <label for="luka_ringan_berat">Luka Ringan Berat</label>
                            <input class="form-control" id="luka_ringan_berat" name="luka_ringan_berat" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="meninggal">Meninggal</label>
                            <input class="form-control" id="meninggal" name="meninggal" type="number" placeholder="Masukkan jumlah">
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
                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Jenis Distribusi Layanan</label>
                            <select class="form-control" name="jenis_distribusi_layanan" id="jenis_distribusi_layanan">
                                <option selected>-- Pilih Jenis Distribusi Layanan --</option>
                                <option value="Food Item">Food Item</option>
                                <option value="Non-Food Item">Non-Food Item</option>
                                <option value="Layanan Kesehatan">Layanan Kesehatan</option>
                                <option value="Layanan Air Bersih">Layanan Air Bersih</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input class="form-control" type="text" placeholder="Masukkan lokasi" name="lokasi">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Unit</label>
                            <select class="form-control" name="unit" id="unit">
                                <option selected>-- Pilih Unit --</option>
                                <option value="KK">KK</option>
                                <option value="orang">Orang</option>
                                <option value="orang">Liter</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input class="form-control" type="number" placeholder="Masukkan jumlah" name="jumlah">
                        </div>
                    </div>
                    <div class="col-sm-12 col-12">
                        <button type="button" id="addForm" class="btn btn-primary btn-lg">+ Tambah distribusi layanan</button>
                    </div>
                </div>
                <div id="formContainer" class="mt-3">
                    <!-- Form will be appended here -->
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Giat Pemerintah</div>
            <div class="card-body">

                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="giat_pemerintah"></textarea>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Kebutuhan</div>
            <div class="card-body">

                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="kebutuhan"></textarea>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Hambatan</div>
            <div class="card-body">

                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="hambatan"></textarea>
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
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input class="form-control" id="nama_lengkap" type="text" placeholder="Masukkan nama lengkap" name="nama_lengkap">
                        </div>
                    </div>
                    <!-- Inputan Posisi -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <input class="form-control" id="posisi" type="text" placeholder="Masukkan posisi" name="posisi">
                        </div>
                    </div>
                    <!-- Inputan Kontak -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input class="form-control" id="kontak" type="text" placeholder="Masukkan kontak" name="kontak">
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
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input class="form-control" id="nama_lengkap" type="text" placeholder="Masukkan nama lengkap" name="nama_lengkap">
                        </div>
                    </div>
                    <!-- Inputan Kontak -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input class="form-control" id="kontak" type="text" placeholder="Masukkan kontak" name="kontak">
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
            <div class="card-header">Laporan Dokumentasi</div>
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-sm-12 col-12">
                        <div class="form-group">
                            <label for="dokumentasi">Unggah Dokumentasi</label>
                            <input type="file" class="form-control-file" id="dokumentasi" name="dokumentasi" accept=".jpg,.jpeg,.png" multiple>
                            <small class="form-text text-muted">Format yang diperbolehkan: JPG, JPEG, PNG</small>
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
                    <button type="submit" class="btn btn-primary btn-lg"><i class="icon-location-arrow"></i> Kirim Laporan Situasi</button>
                </div>
            </div>
        </div>
    </div>


    </form>
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
    $(document).ready(function() {
        $('#addPengungsian').click(function() {
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
    $(document).ready(function() {
        $('#addForm').click(function() {
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
    $(document).ready(function() {
        $('#addPersonil').click(function() {
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
    $(document).ready(function() {
        $('#addPetugas').click(function() {
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

    document.getElementById('nama_laporan').addEventListener('input', function() {
        let reportNumber = parseInt(this.value);
        $.ajax({
            url: '/check-report-number',
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({
                nama_laporan: reportNumber
            }),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.status === 'error') {
                    // Tampilkan pesan error
                    document.getElementById('error-message').textContent = response.message;
                } else {
                    // Hapus pesan error kalau ada
                    document.getElementById('error-message').textContent = '';
                }
            }
        });
    });

    let reportNumber = parseInt(this.value);
    $.ajax({
        url: '/check-report-number',
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            nama_laporan: reportNumber
        }),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            if (response.status === 'error') {
                // Tampilkan pesan error
                document.getElementById('error-message').textContent = response.message;
            } else {
                // Hapus pesan error kalau ada
                document.getElementById('error-message').textContent = '';
            }
        }
    });
</script>
<!-- Modal petugas Posko start -->
@endsection