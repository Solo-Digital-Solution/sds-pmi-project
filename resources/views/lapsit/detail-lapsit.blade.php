@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-center_focus_strong"></i>
            </div>
            <div class="page-title">
                <h5>Detail Laporan Situasi</h5>
                <ol class="breadcrumb" style="background-color: transparent; margin-left:0px; margin-bottom:0px">
                    <li class="breadcrumb-item" style="font-size:12pt"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" style="font-size:12pt"><a href="{{ url('/kejadian') }}">Laporan Kejadian</a></li>
                    <li class="breadcrumb-item" style="font-size:12pt"><a href="{{ url('/kejadian/view-lapsit/'. $id_kejadian) }}">Laporan Situasi</a></li>
                    <li class="breadcrumb-item" style="font-size:12pt">Detail Laporan Situasi</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- Row start -->

<div class="row gutters">
<form>
    @csrf
    <input type="hidden" name="id_kejadian" value="{{ $id_kejadian }}">
    <div class="col-sm-12 mb-3">
        <a href="{{ route('kejadian.view-lapsit', ['id_kejadian' => $id_kejadian]) }}" class="btn btn-primary">
           <i class="icon-arrow-left-thick"></i> Kembali
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
        <input type="text" class="form-control" id="nama_laporan" name="nama_laporan" placeholder=""
        value="{{ Str::after($laporan->nama_laporan, 'Lapsit-') }}" disabled>
        <div id="error-message" style="color: red;"></div>
    </div>
</div>


                <div class="form-group row">
                    <label for="update" class="col-sm-3 col-form-label">
                        Tanggal Update Kejadian <span style="color: red;">*</span>
                    </label>
                    <div class="col-sm-3">
                        <input type="datetime-local" class="form-control" id="update" name="update" value="{{ $laporan->update }}" disabled>
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
                            <input class="form-control" id="jmlh_kk" name="jmlh_kk" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->jmlh_kk }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jumlah_jiwa">Jumlah Jiwa</label>
                            <input class="form-control" id="jmlh_jiwa" name="jmlh_jiwa" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->jmlh_jiwa }}" disabled>
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
                            <input class="form-control" id="luka_berat" name="luka_berat" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->luka_berat }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="luka_ringan">Luka Ringan</label>
                            <input class="form-control" id="luka_ringan" name="luka_ringan" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->luka_ringan }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="meninggal">Meninggal</label>
                            <input class="form-control" id="md" name="md" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->meninggal }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="hilang">Hilang</label>
                            <input class="form-control" id="hilang" name="hilang" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->hilang }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="mengungsi">Mengungsi</label>
                            <input class="form-control" id="mengungsi" name="mengungsi" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->mengungsi }}" disabled>
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
                            <input class="form-control" id="rusak_berat" name="rusak_berat" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->rusak_berat }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Rusak Sedang</label>
                            <input class="form-control" id="rusak_sedang" name="rusak_sedang" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->rusak_sedang }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Rusak Ringan</label>
                            <input class="form-control" id="rusak_ringan" name="rusak_ringan" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->rusak_ringan }}" disabled>
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
                            <input class="form-control" id="sekolah" name="sekolah" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->sekolah }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Tempat Ibadah</label>
                            <input class="form-control" id="tempat_ibadah" name="tempat_ibadah" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->tempat_ibadah }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Rumah Sakit</label>
                            <input class="form-control" id="rumah_sakit" name="rumah_sakit" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->rumah_sakit }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Pasar</label>
                            <input class="form-control" id="pasar" name="pasar" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->pasar }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Gedung Pemerintah</label>
                            <input class="form-control" id="gedung_pemerintah" name="gedung_pemerintah" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->gedung_pemerintah }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Lain-lain</label>
                            <input class="form-control" id="lain_lain" name="lain_lain" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->{'lain-lain'} }}" disabled>
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
                            <label for="deskripsiKerusakan">Deskripsi Kerusakan</label>
                            <textarea class="form-control" id="deskripsi_kerusakan" name="deskripsi_kerusakan" placeholder="Masukkan deskripsi kerusakan" rows="3" disabled>{{ $laporan->deskripsi_kerusakan }}</textarea>
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
                @foreach($shelters as $index => $shelter)
                <div class="row gutters">
                    <div class="col-sm-12 col-12">
                        <div class="form-group">
                            <label for="deskripsiKerusakan">Lokasi Shelter</label>
                            <textarea class="form-control" id="lokasi_shelter" name="inp[0][lokasi_shelter]" placeholder="Masukkan lokasi shelter" rows="3" disabled>{{ $shelter->lokasi_shelter }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah KK</label>
                            <input class="form-control" id="jumlah_kk" name="inp[0][jumlah_kk]" type="number" placeholder="Masukkan jumlah" value="{{ $shelter->jumlah_kk }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah Jiwa</label>
                            <input class="form-control" id="jumlah_jiwa" name="inp[0][jumlah_jiwa]" type="number" placeholder="Masukkan jumlah" value="{{ $shelter->jumlah_jiwa }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah laki-laki</label>
                            <input class="form-control" id="jumlah_laki" name="inp[0][jumlah_laki]" type="number" placeholder="Masukkan jumlah" value="{{ $shelter->jumlah_laki }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah perempuan</label>
                            <input class="form-control" id="jumlah_perempuan" name="inp[0][jumlah_perempuan]" type="number" placeholder="Masukkan jumlah" value="{{ $shelter->jumlah_perempuan }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Balita</label>
                            <input class="form-control" id="dibawah_lima" name="inp[0][dibawah_lima]" type="number" placeholder="Masukkan jumlah" value="{{ $shelter->dibawah_lima }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">5 tahun - 18 tahun</label>
                            <input class="form-control" id="antara_lima_dan_delapanbelas" name="inp[0][antara_lima_dan_delapanbelas]" type="number" placeholder="Masukkan jumlah"  value="{{ $shelter->antara_lima_dan_delapanbelas }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Lebih dari 18 tahun</label>
                            <input class="form-control" id="lebih_delapanbelas" name="inp[0][lebih_delapanbelas]" type="number" placeholder="Masukkan jumlah" value="{{ $shelter->lebih_delapanbelas }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Jumlah</label>
                            <input class="form-control" id="jumlah" name="inp[0][jumlah]" type="number" placeholder="Masukkan jumlah" value="{{ $shelter->jumlah }}" disabled>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
                <div id="shelterContainer">
                    <!-- Form personil dihubungi akan ditambahkan di sini -->
                </div>
                <!-- <button type="button" id="addShelter" class="btn btn-primary btn-lg mt-3">+ Tambah shelter</button> -->
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
                            <input class="form-control" id="pengurus" name="pengurus" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->pengurus }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Staff Markas</label>
                            <input class="form-control" id="staf_markas" name="staf_markas" type="number" placeholder="Masukkan jumlah"value="{{ $laporan->staf_markas }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Relawan PMI</label>
                            <input class="form-control" id="relawan_pmi" name="relawan_pmi" type="number" placeholder="Masukkan jumlah"value="{{ $laporan->relawan_pmi }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Sukarelawan Spesialis</label>
                            <input class="form-control" id="sukarelawan_spesialis" name="sukarelawan_spesialis" type="number" placeholder="Masukkan jumlah"value="{{ $laporan->sukarelawan_spesialis }}" disabled>
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
                            <input class="form-control" id="medis" name="medis" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->medis }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Paramedis</label>
                            <input class="form-control" id="paramedis" name="paramedis" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->paramedis }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Relief</label>
                            <input class="form-control" id="relief" name="relief" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->relief }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Logistik</label>
                            <input class="form-control" id="logistics" name="logistics" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->logistics }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Watsan</label>
                            <input class="form-control" id="watsan" name="watsan" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->watsan }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">IT Telekom</label>
                            <input class="form-control" id="it_telekom" name="it_telekom" type="number" placeholder="Masukkan jumlah"  value="{{ $laporan->it_telekom }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Sheltering</label>
                            <input class="form-control" id="sheltering" name="sheltering" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->sheltering }}" disabled>
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
                            <input class="form-control" id="kend_ops" name="kend_ops" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->kend_ops }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Truk angkutan</label>
                            <input class="form-control" id="truk_angkutan" name="truk_angkutan" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->truk_angkutan }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Truk tangki</label>
                            <input class="form-control" id="truk_tangki" name="truk_tangki" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->truk_tangki }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Double Cabin</label>
                            <input class="form-control" id="double_cabin" name="double_cabin" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->double_cabin }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Alat DU</label>
                            <input class="form-control" id="alat_du" name="alat_du" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->alat_du }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Ambulans</label>
                            <input class="form-control" id="ambulans" name="ambulans" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->ambulans }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Alat Watsan</label>
                            <input class="form-control" id="alat_watsan" name="alat_watsan" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->alat_watsan }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">RS Lapangan</label>
                            <input class="form-control" id="rs_lapangan" name="rs_lapangan" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->rs_lapangan }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Alat PKDD</label>
                            <input class="form-control" id="alat_pkdd" name="alat_pkdd" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->alat_pkdd }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Gudang lapangan</label>
                            <input class="form-control" id="gudang_lapangan" name="gudang_lapangan" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->gudang_lapangan }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Posko Aju</label>
                            <input class="form-control" id="posko_aju" name="posko_aju" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->posko_aju }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Alat IT/Tel Lapangan</label>
                            <input class="form-control" id="alat_it_lapangan" name="alat_it_lapangan" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->alat_it_lapangan }}" disabled>
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
                            <label for="luka_ringan_berat">Luka Ringan Berat</label>
                            <input class="form-control" id="luka_ringan_berat" name="luka_ringan_berat" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->luka_ringan_berat }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="meninggal">Meninggal</label>
                            <input class="form-control" id="meninggal" name="meninggal" type="number" placeholder="Masukkan jumlah" value="{{ $laporan->meninggal }}" disabled>
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
                @foreach($distribusi_layanan as $index => $layanan)
                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Jenis Distribusi Layanan</label>
                            <select class="form-control" name="inpu[0][jenis_distribusi_layanan]" id="jenis_distribusi_layanan" disabled>
                                <option {{ $layanan->jenis_distribusi_layanan == 'Food Item' ? 'selected' : '' }} value="Food Item">Food Item</option>
                                <option {{ $layanan->jenis_distribusi_layanan == 'Non-Food Item' ? 'selected' : '' }} value="Non-Food Item">Non-Food Item</option>
                                <option {{ $layanan->jenis_distribusi_layanan == 'Layanan Kesehatan' ? 'selected' : '' }} value="Layanan Kesehatan">Layanan Kesehatan</option>
                                <option {{ $layanan->jenis_distribusi_layanan == 'Layanan Air Bersih' ? 'selected' : '' }} value="Layanan Air Bersih">Layanan Air Bersih</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input class="form-control" name="inpu[0][lokasi]" type="text" placeholder="Masukkan lokasi" value="{{ $layanan->lokasi }}" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Unit</label>
                            <select class="form-control" name="inpu[0][unit]" id="unit" disabled>
                                <option {{ $layanan->unit == 'KK' ? 'selected' : '' }} value="KK">KK</option>
                                <option {{ $layanan->unit == 'Orang' ? 'selected' : '' }} value="Orang">Orang</option>
                                <option {{ $layanan->unit == 'Liter' ? 'selected' : '' }} value="Liter">Liter</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input class="form-control" type="number" placeholder="Masukkan jumlah" name="inpu[0][jumlah]" value="{{ $layanan->jumlah }}" disabled>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
                <div id="distribusiContainer">
                    <!-- Form personil dihubungi akan ditambahkan di sini -->
                </div>
                <!-- <button type="button" id="addDistribusi" class="btn btn-primary btn-lg mt-3">+ Tambah distribusi layanan</button> -->
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Giat Pemerintah</div>
            <div class="card-body">
                <textarea class="form-control" id="giatPemerintah" placeholder="Masukkan giat pemerintah" name="giat_pemerintah" rows="3" disabled>{{ $laporan->giat_pemerintah }}</textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Kebutuhan</div>
            <div class="card-body">
                <textarea class="form-control" id="kebutuhan" placeholder="Masukkan kebutuhan" name="kebutuhan" rows="3" disabled>{{ $laporan->kebutuhan }}</textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Hambatan</div>
            <div class="card-body">
                <textarea class="form-control" id="hambatan" placeholder="Masukkan hambatan" name="hambatan" rows="3" disabled>{{ $laporan->hambatan }}</textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Personil Dihubungi</div>
            <div class="card-body">
                @foreach($personil_dihubungi as $index => $personil)
                <div class="row gutters">
                    <!-- Inputan Nama Lengkap -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input class="form-control" id="nama_lengkap" name="inputs[0][nama_lengkap]" type="text" placeholder="Masukkan nama lengkap" value="{{ $personil->nama_lengkap }}" disabled>
                        </div>
                    </div>
                    <!-- Inputan Posisi -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <input class="form-control" id="posisi" name="inputs[0][posisi]" type="text" placeholder="Masukkan posisi" value="{{ $personil->posisi }}" disabled>
                        </div>
                    </div>
                    <!-- Inputan Kontak -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input class="form-control" id="kontak" name="inputs[0][kontak]" type="text" placeholder="Masukkan kontak" value="{{ $personil->kontak }}" disabled>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
                <div id="personilContainer">
                    <!-- Form personil dihubungi akan ditambahkan di sini -->
                </div>
                <!-- <button type="button" name="addPersonil" id="addPersonil" class="btn btn-primary btn-lg mt-3">+ Tambah personil dihubungi</button> -->
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Petugas Posko</div>
            <div class="card-body">
                @foreach($petugas_posko as $index => $petugas)
                <div class="row gutters">
                    <!-- Inputan Nama Lengkap -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input class="form-control" id="namaLengkap" name="input[0][nm]" type="text" placeholder="Masukkan nama lengkap" value="{{ $petugas->nama_lengkap }}" disabled>
                        </div>
                    </div>
                    <!-- Inputan Kontak -->
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input class="form-control" id="kontak" name="input[0][ktk]" type="text" placeholder="Masukkan kontak" value="{{ $petugas->kontak }}" disabled>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
                <div id="petugasContainer">
                    <!-- Form petugas posko akan ditambahkan di sini -->
                </div>
                <!-- <button type="button" id="addPetugas" class="btn btn-primary btn-lg mt-3">+ Tambah petugas posko</button> -->
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Laporan Dokumentasi</div>
            <div class="card-body">
                <div class="row">
                    @foreach($dokumentasi as $dok)
                        <div class="col-sm-3">
                            <div class="card mb-3">
                                <img src="{{ asset('dokumentasi/' . $dok->file_path) }}" class="card-img-top" alt="{{ $dok->file_path }}">
                                <div class="card-body">
                                    <p class="card-text">{{ $dok->file_path }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="dokumentasiContainer">
                    <!-- Form personil dihubungi akan ditambahkan di sini -->
                </div>
                <!-- <button type="button" id="addDokumentasi" class="btn btn-primary btn-lg mt-3">+ Tambah dokumentasi</button> -->
            </div>
        </div>
    </div>
    <!-- <button type="submit" class="btn btn-primary mt-3 w-100">Kirim</button> -->
    <!-- <div class="col-sm-12">
        <div class="">
            <div class="">
                <div class="d-flex justify-content-center w-100 py-3">
                    <button type="submit" class="btn btn-primary btn-lg"><i class="icon-location-arrow"></i> Kirim Laporan Situasi</button>
                </div>
            </div>
        </div>
    </div> -->
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
                            '<label for="namaLengkap">Nama Lengkap</label>' +
                            '<input class="form-control" name="inputs[' + i + '][nama_lengkap]" type="text" placeholder="Masukkan nama lengkap">' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-sm-6 col-12">' +
                        '<div class="form-group">' +
                            '<label for="posisi">Posisi</label>' +
                            '<input class="form-control" name="inputs[' + i + '][posisi]" type="text" placeholder="Masukkan posisi">' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-sm-6 col-12">' +
                        '<div class="form-group">' +
                            '<label for="kontak">Kontak</label>' +
                            '<input class="form-control" name="inputs[' + i + '][kontak]" type="text" placeholder="Masukkan kontak">' +
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
                            '<label for="namaLengkap">Nama Lengkap</label>' +
                            '<input class="form-control" name="input[' + i + '][nm]" type="text" placeholder="Masukkan nama lengkap">' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-sm-6 col-12">' +
                        '<div class="form-group">' +
                            '<label for="kontak">Kontak</label>' +
                            '<input class="form-control" name="input[' + i + '][ktk]" type="text" placeholder="Masukkan kontak">' +
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
                            '<label for="jenis_distribusi_layanan">Jenis Distribusi Layanan</label>' +
                            '<select class="form-control" name="inpu[' + i + '][jenis_distribusi_layanan]">' +
                                '<option selected>-- Pilih Jenis Distribusi Layanan --</option>' +
                                '<option value="Food Item">Food Item</option>' +
                                '<option value="Non-Food Item">Non-Food Item</option>' +
                                '<option value="Layanan Kesehatan">Layanan Kesehatan</option>' +
                                '<option value="Layanan Air Bersih">Layanan Air Bersih</option>' +
                            '</select>' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-sm-6 col-12">' +
                        '<div class="form-group">' +
                            '<label for="lokasi">Lokasi</label>' +
                            '<input class="form-control" type="text" placeholder="Masukkan lokasi" name="inpu[' + i + '][lokasi]">' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-sm-6 col-12">' +
                        '<div class="form-group">' +
                            '<label for="unit">Unit</label>' +
                            '<select class="form-control" name="inpu[' + i + '][unit]">' +
                                '<option selected>-- Pilih Unit --</option>' +
                                '<option value="KK">KK</option>' +
                                '<option value="orang">Orang</option>' +
                                '<option value="liter">Liter</option>' +
                            '</select>' +
                        '</div>' +
                    '</div>' +
                    '<div class="col-sm-6 col-12">' +
                        '<div class="form-group">' +
                            '<label for="jumlah">Jumlah</label>' +
                            '<input class="form-control" type="number" placeholder="Masukkan jumlah" name="inpu[' + i + '][jumlah]">' +
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
                        '<label for="lokasi_shelter">Lokasi Shelter</label>' +
                        '<textarea class="form-control" id="lokasi_shelter" name="inp[' + i + '][lokasi_shelter]" placeholder="Masukkan lokasi shelter" rows="3"></textarea>' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="jumlah_kk">Jumlah KK</label>' +
                        '<input class="form-control" id="jumlah_kk" name="inp[' + i + '][jumlah_kk]" type="number" placeholder="Masukkan jumlah">' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="jumlah_jiwa">Jumlah Jiwa</label>' +
                        '<input class="form-control" id="jumlah_jiwa" name="inp[' + i + '][jumlah_jiwa]" type="number" placeholder="Masukkan jumlah">' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="jumlah_laki">Jumlah laki-laki</label>' +
                        '<input class="form-control" id="jumlah_laki" name="inp[' + i + '][jumlah_laki]" type="number" placeholder="Masukkan jumlah">' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="jumlah_perempuan">Jumlah perempuan</label>' +
                        '<input class="form-control" id="jumlah_perempuan" name="inp[' + i + '][jumlah_perempuan]" type="number" placeholder="Masukkan jumlah">' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="dibawah_lima">Balita</label>' +
                        '<input class="form-control" id="dibawah_lima" name="inp[' + i + '][dibawah_lima]" type="number" placeholder="Masukkan jumlah">' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="antara_lima_dan_delapanbelas">5 tahun - 18 tahun</label>' +
                        '<input class="form-control" id="antara_lima_dan_delapanbelas" name="inp[' + i + '][antara_lima_dan_delapanbelas]" type="number" placeholder="Masukkan jumlah">' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="lebih_delapanbelas">Lebih dari 18 tahun</label>' +
                        '<input class="form-control" id="lebih_delapanbelas" name="inp[' + i + '][lebih_delapanbelas]" type="number" placeholder="Masukkan jumlah">' +
                    '</div>' +
                '</div>' +
                '<div class="col-sm-6 col-12">' +
                    '<div class="form-group">' +
                        '<label for="jumlah">Jumlah</label>' +
                        '<input class="form-control" id="jumlah" name="inp[' + i + '][jumlah]" placeholder="Masukkan jumlah">' +
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
                        '<label for="dokumentasi">Unggah Dokumentasi</label>' +
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
 <!-- start modal dokumentasi -->
@endsection