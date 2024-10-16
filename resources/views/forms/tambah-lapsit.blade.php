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
                        <input type="date" class="form-control" id="colFormLabel" required>
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
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Dampak</div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label" style="font-weight: bold;">Pengungsi Jiwa/KK</label>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Jiwa</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">KK</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Korban Jiwa</div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Luka Berat (LB)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Luka Ringan (LR)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Meninggal Dunia (MD)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Hilang</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Mengungsi</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Kerusakan Rumah</div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Rusak Berat (RB)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Rusak Sedang (RS)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Rusak Ringan (RR)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Kerusakan Fasilitas</div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Sekolah</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Tempat Ibadah</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Rumah Sakit</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Pasar</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Gedung Pemerintah</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Lain-lain</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
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

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Lokasi</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Jumlah KK</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Jumlah Jiwa</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Jumlah Laki-Laki</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Jumlah Perempuan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Jumlah Jiwa <5</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Jumlah Jiwa >5<18</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Jumlah Jiwa >18</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Jumlah</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="d-flex justify-content-center w-100">
                    <a href="#">
                        <button type="button" class="btn btn-primary btn-lg"><i class="icon-plus2"></i> Tambah Lokasi Pegungsian</button>
                    </a>
                </div>


            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Mobilisasi Sumber Daya PMI</div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label" style="font-weight: bold;">Personil</label>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Pengurus</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Staf Markas Kab/Kota</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Relawan PMI Kab/Kota</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Sukarelawan Spesialis</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Personil Bantuan Teknis/Ahli/Spesialis (TSR)</div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Medis</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Paramedis</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Relief</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Logistics</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Watsan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">IT-Telekom</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Sheltering</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Alat Utama Sistim TDB</div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Kend. Ops</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Truk Angkutan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Truk Tangki</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Double Cabin</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Alat DU</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Ambulans</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Alat Watsan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">RS Lapangan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Alat PKDD</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Gedung Lapangan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Posko Aju</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Alat IT/Tel lapangan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Giat PMI</div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-8 col-form-label" style="font-weight: bold;">Evakuasi korban luka-luka</label>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Luka Ringan/Berat</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Meninggal</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Distribusi Layanan</div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Jenis Distribusi Layanan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Lokasi</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Unit</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Jumlah</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="d-flex justify-content-center w-100">
                    <a href="#">
                        <button type="button" class="btn btn-primary btn-lg"><i class="icon-plus2"></i> Tambah Distribusi Layanan</button>
                    </a>
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

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Posisi</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Kontak</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="d-flex justify-content-center w-100">
                    <a href="#">
                        <button type="button" class="btn btn-primary btn-lg"><i class="icon-plus2"></i> Tambah Kontak Personil</button>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Petugas Posko</div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Kontak</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="d-flex justify-content-center w-100">
                    <a href="#">
                        <button type="button" class="btn btn-primary btn-lg"><i class="icon-plus2"></i> Tambah Kontak Petugas</button>
                    </a>
                </div>

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
@endsection