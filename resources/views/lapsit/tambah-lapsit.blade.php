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
    
<form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_kejadian" value="{{ $id_kejadian }}">
    <div class="col-sm-12 mb-3">
        <a href="{{ route('kejadian.view-lapsit', ['id_kejadian' => $id_kejadian]) }}" class="btn btn-primary">
           <i class="icon-arrow-left-thick"></i> Cancel
        </a>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">

                <div class="form-group row">
                    <label for="nama_laporan" class="col-sm-3 col-form-label">
                        Lapsit ke- <span style="color: red;">*</span>
                    </label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="nama_laporan" name="nama_laporan" placeholder="" required>
                        <div id="error-message" style="color: red;"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="update" class="col-sm-3 col-form-label">
                        Tanggal Update Kejadian <span style="color: red;">*</span>
                    </label>
                    <div class="col-sm-3">
                        <input type="datetime-local" class="form-control" id="update" name="update" required>
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
                            <label for="jumlah_kk">Jumlah KK <span style="color: red;">*</span></label>
                            <input class="form-control" id="jmlh_kk" name="jmlh_kk" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jumlah_jiwa">Jumlah Jiwa <span style="color: red;">*</span></label>
                            <input class="form-control" id="jmlh_jiwa" name="jmlh_jiwa" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
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
                            <label for="luka_berat">Luka Berat <span style="color: red;">*</span></label>
                            <input class="form-control" id="luka_berat" name="luka_berat" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="luka_ringan">Luka Ringan <span style="color: red;">*</span></label>
                            <input class="form-control" id="luka_ringan" name="luka_ringan" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="meninggal">Meninggal <span style="color: red;">*</span></label>
                            <input class="form-control" id="md" name="md" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="hilang">Hilang <span style="color: red;">*</span></label>
                            <input class="form-control" id="hilang" name="hilang" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="mengungsi">Mengungsi <span style="color: red;">*</span></label>
                            <input class="form-control" id="mengungsi" name="mengungsi" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
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
                            <label for="inputNumber">Rusak Berat <span style="color: red;">*</span></label>
                            <input class="form-control" id="rusak_berat" name="rusak_berat" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Rusak Sedang <span style="color: red;">*</span></label>
                            <input class="form-control" id="rusak_sedang" name="rusak_sedang" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Rusak Ringan <span style="color: red;">*</span></label>
                            <input class="form-control" id="rusak_ringan" name="rusak_ringan" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
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
                            <label for="inputNumber">Sekolah <span style="color: red;">*</span></label>
                            <input class="form-control" id="sekolah" name="sekolah" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Tempat Ibadah <span style="color: red;">*</span></label>
                            <input class="form-control" id="tempat_ibadah" name="tempat_ibadah" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Rumah Sakit <span style="color: red;">*</span></label>
                            <input class="form-control" id="rumah_sakit" name="rumah_sakit" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Pasar <span style="color: red;">*</span></label>
                            <input class="form-control" id="pasar" name="pasar" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Gedung Pemerintah <span style="color: red;">*</span></label>
                            <input class="form-control" id="gedung_pemerintah" name="gedung_pemerintah" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Lain-lain <span style="color: red;">*</span></label>
                            <input class="form-control" id="lain_lain" name="lain_lain" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Kerusakan infrastruktur</div>
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-sm-12 col-12">
                        <div class="form-group">
                            <label for="deskripsiKerusakan">Deskripsi Kerusakan <span style="color: red;">*</span></label>
                            <textarea class="form-control" id="deskripsi_kerusakan" name="deskripsi_kerusakan" placeholder="Masukkan deskripsi kerusakan" rows="3" required></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Shelter</div>
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-sm-12 col-12">
                        <div class="form-group">
                            <label for="deskripsiKerusakan">Lokasi Shelter <span style="color: red;">*</span></label>
                            <textarea class="form-control" id="lokasi_shelter" name="inp[0][lokasi_shelter]" placeholder="Masukkan lokasi shelter" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah KK <span style="color: red;">*</span></label>
                            <input class="form-control" id="jumlah_kk" name="inp[0][jumlah_kk]" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah Jiwa <span style="color: red;">*</span></label>
                            <input class="form-control" id="jumlah_jiwa" name="inp[0][jumlah_jiwa]" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah laki-laki <span style="color: red;">*</span></label>
                            <input class="form-control" id="jumlah_laki" name="inp[0][jumlah_laki]" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah perempuan <span style="color: red;">*</span></label>
                            <input class="form-control" id="jumlah_perempuan" name="inp[0][jumlah_perempuan]" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Balita <span style="color: red;">*</span></label>
                            <input class="form-control" id="dibawah_lima" name="inp[0][dibawah_lima]" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">5 tahun - 18 tahun <span style="color: red;">*</span></label>
                            <input class="form-control" id="antara_lima_dan_delapanbelas" name="inp[0][antara_lima_dan_delapanbelas]" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Lebih dari 18 tahun <span style="color: red;">*</span></label>
                            <input class="form-control" id="lebih_delapanbelas" name="inp[0][lebih_delapanbelas]" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah <span style="color: red;">*</span></label>
                            <input class="form-control" id="jumlah" name="inp[0][jumlah]" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="shelterContainer">
                    <!-- Form personil dihubungi akan ditambahkan di sini -->
                </div>
                <button type="button" id="addShelter" class="btn btn-primary btn-lg mt-3">+ Tambah shelter</button>
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
                            <label for="inputNumber">Pengurus <span style="color: red;">*</span></label>
                            <input class="form-control" id="pengurus" name="pengurus" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Staff Markas <span style="color: red;">*</span></label>
                            <input class="form-control" id="staf_markas" name="staf_markas" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Relawan PMI <span style="color: red;">*</span></label>
                            <input class="form-control" id="relawan_pmi" name="relawan_pmi" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Sukarelawan Spesialis <span style="color: red;">*</span></label>
                            <input class="form-control" id="sukarelawan_spesialis" name="sukarelawan_spesialis" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
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
                            <label for="inputNumber">Medis <span style="color: red;">*</span></label>
                            <input class="form-control" id="medis" name="medis" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Paramedis <span style="color: red;">*</span></label>
                            <input class="form-control" id="paramedis" name="paramedis" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Relief <span style="color: red;">*</span></label>
                            <input class="form-control" id="relief" name="relief" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Logistik <span style="color: red;">*</span></label>
                            <input class="form-control" id="logistics" name="logistics" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Watsan <span style="color: red;">*</span></label>
                            <input class="form-control" id="watsan" name="watsan" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">IT Telekom <span style="color: red;">*</span></label>
                            <input class="form-control" id="it_telekom" name="it_telekom" type="number" placeholder="Masukkan jumlah" min="0" value="0" equired>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Sheltering <span style="color: red;">*</span></label>
                            <input class="form-control" id="sheltering" name="sheltering" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
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
                            <label for="inputNumber">Kendaraan Operasional <span style="color: red;">*</span></label>
                            <input class="form-control" id="kend_ops" name="kend_ops" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Truk angkutan <span style="color: red;">*</span></label>
                            <input class="form-control" id="truk_angkutan" name="truk_angkutan" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Truk tangki <span style="color: red;">*</span></label>
                            <input class="form-control" id="truk_tangki" name="truk_tangki" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Double Cabin <span style="color: red;">*</span></label>
                            <input class="form-control" id="double_cabin" name="double_cabin" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Alat DU <span style="color: red;">*</span></label>
                            <input class="form-control" id="alat_du" name="alat_du" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Ambulans <span style="color: red;">*</span></label>
                            <input class="form-control" id="ambulans" name="ambulans" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Alat Watsan <span style="color: red;">*</span></label>
                            <input class="form-control" id="alat_watsan" name="alat_watsan" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">RS Lapangan <span style="color: red;">*</span></label>
                            <input class="form-control" id="rs_lapangan" name="rs_lapangan" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Alat PKDD <span style="color: red;">*</span></label>
                            <input class="form-control" id="alat_pkdd" name="alat_pkdd" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Gudang lapangan <span style="color: red;">*</span></label>
                            <input class="form-control" id="gudang_lapangan" name="gudang_lapangan" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Posko Aju <span style="color: red;">*</span></label>
                            <input class="form-control" id="posko_aju" name="posko_aju" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Alat IT/Tel Lapangan <span style="color: red;">*</span></label>
                            <input class="form-control" id="alat_it_lapangan" name="alat_it_lapangan" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
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
            <div class="card-header" style="font-weight: bold;">Evakuasi Korban</div>
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="luka_ringan_berat">Luka Ringan Berat <span style="color: red;">*</span></label>
                            <input class="form-control" id="luka_ringan_berat" name="luka_ringan_berat" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="meninggal">Meninggal <span style="color: red;">*</span></label>
                            <input class="form-control" id="meninggal" name="meninggal" type="number" placeholder="Masukkan jumlah" min="0" value="0" required>
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
                            <label for="exampleFormControlTextarea1">Jenis Distribusi Layanan <span style="color: red;">*</span></label>
                            <select class="form-control" name="inpu[0][jenis_distribusi_layanan]" id="jenis_distribusi_layanan" required>
                                <option value="" selected>-- Pilih Jenis Distribusi Layanan --</option>
                                <option value="Food Item">Food Item</option>
                                <option value="Non-Food Item">Non-Food Item</option>
                                <option value="Layanan Kesehatan">Layanan Kesehatan</option>
                                <option value="Layanan Air Bersih">Layanan Air Bersih</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="lokasi">Lokasi <span style="color: red;">*</span></label>
                            <input class="form-control" name="inpu[0][lokasi]" type="text" placeholder="Masukkan lokasi" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Unit <span style="color: red;">*</span></label>
                            <select class="form-control" name="inpu[0][unit]" id="unit" required>
                                <option value="" selected>-- Pilih Unit --</option>
                                <option value="KK">KK</option>
                                <option value="orang">Orang</option>
                                <option value="orang">Liter</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jumlah">Jumlah <span style="color: red;">*</span></label>
                            <input class="form-control" type="number" placeholder="Masukkan jumlah" name="inpu[0][jumlah]" min="0" value="0" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="distribusiContainer">
                    <!-- Form personil dihubungi akan ditambahkan di sini -->
                </div>
                <button type="button" id="addDistribusi" class="btn btn-primary btn-lg mt-3">+ Tambah distribusi layanan</button>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Giat Pemerintah <span style="color: red;">*</span></div>
            <div class="card-body">
                <textarea class="form-control" id="giatPemerintah" placeholder="Masukkan giat pemerintah" name="giat_pemerintah" rows="3" required></textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Kebutuhan <span style="color: red;">*</span></div>
            <div class="card-body">
                <textarea class="form-control" id="kebutuhan" placeholder="Masukkan kebutuhan" name="kebutuhan" rows="3" required></textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Hambatan <span style="color: red;">*</span></div>
            <div class="card-body">
                <textarea class="form-control" id="hambatan" placeholder="Masukkan hambatan" name="hambatan" rows="3" required></textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Personil Dihubungi</div>
            <div class="card-body">
                <div class="row gutters">
                    <!-- Inputan Nama Lengkap -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap <span style="color: red;">*</span></label>
                            <input class="form-control" id="nama_lengkap" name="inputs[0][nama_lengkap]" type="text" placeholder="Masukkan nama lengkap" required>
                        </div>
                    </div>
                    <!-- Inputan Posisi -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="posisi">Posisi <span style="color: red;">*</span></label>
                            <input class="form-control" id="posisi" name="inputs[0][posisi]" type="text" placeholder="Masukkan posisi" required>
                        </div>
                    </div>
                    <!-- Inputan Kontak -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="kontak">Kontak <span style="color: red;">*</span></label>
                            <input class="form-control" id="kontak" name="inputs[0][kontak]" type="tel" placeholder="Masukkan kontak" pattern="^[0-9]{10,15}$"
                                title="Nomor telepon harus terdiri dari 10 hingga 15 digit angka dan hanya boleh berisi angka."
                                oninvalid="this.setCustomValidity('Nomor telepon harus terdiri dari 10 hingga 15 digit angka dan hanya boleh berisi angka.')"
                                oninput="this.setCustomValidity('');
                                        if(this.checkValidity()) {
                                            this.classList.add('valid-input');
                                        } else {
                                            this.classList.remove('valid-input');
                                        }"
                                required>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="personilContainer">
                    <!-- Form personil dihubungi akan ditambahkan di sini -->
                </div>
                <button type="button" name="addPersonil" id="addPersonil" class="btn btn-primary btn-lg mt-3">+ Tambah personil dihubungi</button>
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
                            <label for="namaLengkap">Nama Lengkap <span style="color: red;">*</span></label>
                            <input class="form-control" id="namaLengkap" name="input[0][nm]" type="text" placeholder="Masukkan nama lengkap" required>
                        </div>
                    </div>
                    <!-- Inputan Kontak -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="kontak">Kontak <span style="color: red;">*</span></label>
                            <!-- <input class="form-control" id="kontak" name="input[0][ktk]" type="text" placeholder="Masukkan kontak" required> -->
                            <input class="form-control" id="kontak" name="input[0][ktk]" type="tel" placeholder="Masukkan kontak" pattern="^[0-9]{10,15}$"
                                title="Nomor telepon harus terdiri dari 10 hingga 15 digit angka dan hanya boleh berisi angka."
                                oninvalid="this.setCustomValidity('Nomor telepon harus terdiri dari 10 hingga 15 digit angka dan hanya boleh berisi angka.')"
                                oninput="this.setCustomValidity('');
                                        if(this.checkValidity()) {
                                            this.classList.add('valid-input');
                                        } else {
                                            this.classList.remove('valid-input');
                                        }"
                                required>
                            <small class="form-text text-muted">Masukkan nomor telepon yang valid (10-15 digit angka).</small>
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
            <div class="card-header" style="font-weight: bold;">Laporan Dokumentasi</div>
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-sm-12 col-12">
                        <div class="form-group">
                            <label for="dokumentasi">Unggah Dokumentasi <span style="color: red;">*</span></label>
                            <input type="file" class="form-control-file" id="dokumentasi" name="in[0][dokumentasi]" accept=".jpg,.jpeg,.png" multiple>
                            <small class="form-text text-muted">Format yang diperbolehkan: JPG, JPEG, PNG</small>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="dokumentasiContainer">
                    <!-- Form personil dihubungi akan ditambahkan di sini -->
                </div>
                <button type="button" id="addDokumentasi" class="btn btn-primary btn-lg mt-3">+ Tambah dokumentasi</button>
            </div>
        </div>
    </div>
    <!-- <button type="submit" class="btn btn-primary mt-3 w-100">Kirim</button> -->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- start modal personil dihubungi -->
<script>
    var i = 0;
    $('#addPersonil').click(function(){
        ++i;
        var newRow = 
            '<div class="personil-form">' +
            '<div class="row gutters">' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="namaLengkap">Nama Lengkap <span style="color: red;">*</span></label>' +
                        '<input class="form-control" name="inputs[' + i + '][nama_lengkap]" type="text" placeholder="Masukkan nama lengkap" required>' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="posisi">Posisi <span style="color: red;">*</span></label>' +
                        '<input class="form-control" name="inputs[' + i + '][posisi]" type="text" placeholder="Masukkan posisi" required>' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="kontak">Kontak <span style="color: red;">*</span></label>' +
                        '<input class="form-control" id="kontak_' + i + '" name="inputs[' + i + '][kontak]" type="tel" placeholder="Masukkan kontak" pattern="^[0-9]{10,15}$" ' +
                            'title="Nomor telepon harus terdiri dari 10 hingga 15 digit angka dan hanya boleh berisi angka." ' +
                            'oninvalid="this.setCustomValidity(\'Nomor telepon harus terdiri dari 10 hingga 15 digit angka dan hanya boleh berisi angka.\')" ' +
                            'oninput="this.setCustomValidity(\'\'); ' +
                                    'if(this.checkValidity()) { ' +
                                        'this.classList.add(\'valid-input\'); ' +
                                    '} else { ' +
                                        'this.classList.remove(\'valid-input\'); ' +
                                    '}" ' +
                            'required>' +
                        '<small class="form-text text-muted">Masukkan nomor telepon yang valid (10-15 digit angka).</small>' +
                        '<div class="error-message">Nomor telepon harus terdiri dari 10 hingga 15 digit angka dan hanya boleh berisi angka.</div>' +
                    '</div>' +
                '</div>' +
            '</div>' +
            '<button type="button" class="btn btn-danger remove-personil">Hapus</button>' +
            '<hr>' +
        '</div>';

        $('#personilContainer').append(newRow);
    });

    $(document).on('click', '.remove-personil', function(){
        $(this).closest('.personil-form').remove();
    });
</script>
<!-- end modal personil dihubungi -->
<!-- start modal petugas posko -->
<script>
    var i = 0;
    $('#addPetugas').click(function(){
        ++i;
        var newRow = 
            '<div class="petugas-form">' +
                '<div class="row gutters">' +
                    '<div class="col-sm-6 col-12">' +
                        '<div class="form-group">' +
                            '<label for="namaLengkap">Nama Lengkap <span style="color: red;">*</span></label>' +
                            '<input class="form-control" name="input[' + i + '][nm]" type="text" placeholder="Masukkan nama lengkap" required>' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-sm-6 col-12">' +
                        '<div class="form-group">' +
                            '<label for="kontak">Kontak <span style="color: red;">*</span></label>' +
                            '<input class="form-control" name="input[' + i + '][ktk]" type="text" placeholder="Masukkan kontak" required>' +
                        '</div>' +
                    '</div>' +
                '</div>' +
                '<button type="button" class="btn btn-danger remove-petugas">Hapus</button>' +
                '<hr>' +
            '</div>';

        $('#petugasContainer').append(newRow);
    });

    $(document).on('click', '.remove-petugas', function(){
        $(this).closest('.petugas-form').remove();
    });
</script>
<!-- end modal petugas posko -->
<!-- start modal distribusi layanan -->
<script>
    var i = 0;
    $('#addDistribusi').click(function(){
        ++i;
        var newRow = 
            '<div class="distribusi-form">' +
                '<div class="row gutters">' +
                    '<div class="col-sm-6 col-12">' +
                        '<div class="form-group">' +
                            '<label for="jenis_distribusi_layanan">Jenis Distribusi Layanan <span style="color: red;">*</span></label>' +
                            '<select class="form-control" name="inpu[' + i + '][jenis_distribusi_layanan]" required>' +
                                '<option value="" selected>-- Pilih Jenis Distribusi Layanan --</option>' +
                                '<option value="Food Item">Food Item</option>' +
                                '<option value="Non-Food Item">Non-Food Item</option>' +
                                '<option value="Layanan Kesehatan">Layanan Kesehatan</option>' +
                                '<option value="Layanan Air Bersih">Layanan Air Bersih</option>' +
                            '</select>' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-sm-6 col-12">' +
                        '<div class="form-group">' +
                            '<label for="lokasi">Lokasi <span style="color: red;">*</span></label>' +
                            '<input class="form-control" type="text" placeholder="Masukkan lokasi" name="inpu[' + i + '][lokasi]" required>' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-sm-6 col-12">' +
                        '<div class="form-group">' +
                            '<label for="unit">Unit <span style="color: red;">*</span></label>' +
                            '<select class="form-control" name="inpu[' + i + '][unit]" required>' +
                                '<option value="" selected>-- Pilih Unit --</option>' +
                                '<option value="KK">KK</option>' +
                                '<option value="orang">Orang</option>' +
                                '<option value="liter">Liter</option>' +
                            '</select>' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-sm-6 col-12">' +
                        '<div class="form-group">' +
                            '<label for="jumlah">Jumlah <span style="color: red;">*</span></label>' +
                            '<input class="form-control" type="number" placeholder="Masukkan jumlah" name="inpu[' + i + '][jumlah]" required>' +
                        '</div>' +
                    '</div>' +
                '</div>' +
                '<button type="button" class="btn btn-danger remove-distribusi">Hapus</button>' +
                '<hr>' +
            '</div>';
        $('#distribusiContainer').append(newRow);
    });

    $(document).on('click', '.remove-distribusi', function(){
        $(this).closest('.distribusi-form').remove();
    });
</script>
<!-- end modal distribusi layanan -->
<!-- start modal shelter -->
<script>
    var i = 0;
    $('#addShelter').click(function(){
        ++i;
        var newRow =
        '<div class="shelter-form">' +
            '<div class="row gutters">' +
                '<div class="col-sm-12 col-12">' +
                    '<div class="form-group">' +
                        '<label for="lokasi_shelter">Lokasi Shelter <span style="color: red;">*</span></label>' +
                        '<textarea class="form-control" id="lokasi_shelter" name="inp[' + i + '][lokasi_shelter]" placeholder="Masukkan lokasi shelter" rows="3" required></textarea>' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="jumlah_kk">Jumlah KK <span style="color: red;">*</span></label>' +
                        '<input class="form-control" id="jumlah_kk" name="inp[' + i + '][jumlah_kk]" type="number" placeholder="Masukkan jumlah" required>' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="jumlah_jiwa">Jumlah Jiwa <span style="color: red;">*</span></label>' +
                        '<input class="form-control" id="jumlah_jiwa" name="inp[' + i + '][jumlah_jiwa]" type="number" placeholder="Masukkan jumlah" required>' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="jumlah_laki">Jumlah laki-laki <span style="color: red;">*</span></label>' +
                        '<input class="form-control" id="jumlah_laki" name="inp[' + i + '][jumlah_laki]" type="number" placeholder="Masukkan jumlah" required>' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="jumlah_perempuan">Jumlah perempuan <span style="color: red;">*</span></label>' +
                        '<input class="form-control" id="jumlah_perempuan" name="inp[' + i + '][jumlah_perempuan]" type="number" placeholder="Masukkan jumlah" required>' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="dibawah_lima">Balita <span style="color: red;">*</span></label>' +
                        '<input class="form-control" id="dibawah_lima" name="inp[' + i + '][dibawah_lima]" type="number" placeholder="Masukkan jumlah" required>' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="antara_lima_dan_delapanbelas">5 tahun - 18 tahun <span style="color: red;">*</span></label>' +
                        '<input class="form-control" id="antara_lima_dan_delapanbelas" name="inp[' + i + '][antara_lima_dan_delapanbelas]" type="number" placeholder="Masukkan jumlah" required>' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="lebih_delapanbelas">Lebih dari 18 tahun <span style="color: red;">*</span></label>' +
                        '<input class="form-control" id="lebih_delapanbelas" name="inp[' + i + '][lebih_delapanbelas]" type="number" placeholder="Masukkan jumlah" required>' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="jumlah">Jumlah <span style="color: red;">*</span></label>' +
                        '<input class="form-control" id="jumlah" name="inp[' + i + '][jumlah]" placeholder="Masukkan jumlah" required>' +
                    '</div>' +
                '</div>' +
            '</div>' +
            '<button type="button" class="btn btn-danger remove-shelter">Hapus</button>' +
            '<hr>' +
        '</div>';
        $('#shelterContainer').append(newRow);
    });

    $(document).on('click', '.remove-shelter', function(){
        $(this).closest('.shelter-form').remove();
    });
</script>
<!-- end modal shelter -->
<!-- start modal dokumentasi -->
<script>
    var i = 0;
    $('#addDokumentasi').click(function(){
        ++i;
        var newRow = 
        '<div class="dokumentasi-form">' +
            '<div class="row gutters">' +
                '<div class="col-sm-12 col-12">' +
                    '<div class="form-group">' +
                        '<label for="dokumentasi">Unggah Dokumentasi <span style="color: red;">*</span></label>' +
                        '<input type="file" class="form-control-file" id="dokumentasi" name="in[' + i + '][dokumentasi]" accept=".jpg,.jpeg,.png" multiple>' +
                        '<small class="form-text text-muted">Format yang diperbolehkan: JPG, JPEG, PNG</small>' +
                    '</div>' +
                '</div>' +
            '</div>' +
            '<button type="button" class="btn btn-danger remove-dokumentasi">Hapus</button>' +
            '<hr>' +
        '</div>';
        $('#dokumentasiContainer').append(newRow);
    });

    $(document).on('click', '.remove-dokumentasi', function(){
        $(this).closest('.dokumentasi-form').remove();
    });
</script>
<script>
$(document).on('input', '.form-control', function () {
    var kontakInput = this;
    var formGroup = kontakInput.closest('.form-group');
    
    if (kontakInput.validity.valid) {
        formGroup.classList.remove('invalid');
    } else {
        formGroup.classList.add('invalid');
    }
});
</script>
<!-- start modal dokumentasi -->

@endsection