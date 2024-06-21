@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-assignment_turned_in"></i>
            </div>
            <div class="page-title">
                <h5>Formulir Assessment</h5>
                <h6 class="sub-heading">Selamat datang di Sistem Penanggulangan Bencana PMI Solo</h6>
            </div>
        </div>
        <div class="col-sm-45">
            <div class="right-actions">
                <span class="last-login">Last Login: 5 minutes ago</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">Korban Terdampak</div>
        <div class="card-body">
            <div class="row gutters">
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
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Korban Jiwa</div>
        <div class="card-body">
            <div class="row gutters">
                <div class="col-sm-6 col-12">
                    <div class="form-group">
                        <label for="luka_berat">Luka Berat</label>
                        <input class="form-control" id="luka_berat" name="luka_berat" type="number" placeholder="Masukkan jumlah" >
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="form-group">
                        <label for="luka_ringan">Luka Ringan</label>
                        <input class="form-control" id="luka_ringan" name="luka_ringan" type="number" placeholder="Masukkan jumlah" >
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="form-group">
                        <label for="meninggal">Meninggal</label>
                        <input class="form-control" id="meninggal" name="meninggal" type="number" placeholder="Masukkan jumlah">
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="form-group">
                        <label for="hilang">Hilang</label>
                        <input class="form-control" id="hilang" name="hilang" type="number" placeholder="Masukkan jumlah">
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="form-group">
                        <label for="mengungsi">Mengungsi</label>
                        <input class="form-control" id="mengungsi" name="mengungsi" type="number" placeholder="Masukkan jumlah">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
		<div class="card">
			<div class="card-header">Kerusakan Rumah</div>
			<div class="card-body">
				<div class="row gutters">
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Rusak Berat</label>
							<input class="form-control" id="rusak_berat" name="rusak_berat" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Rusak Sedang</label>
							<input class="form-control" id="rusak_sedang" name="rusak_sedang" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Rusak Ringan</label>
							<input class="form-control" id="rusak_ringan" name="rusak_ringan" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="col-sm-12">
		<div class="card">
			<div class="card-header">Kerusakan Fasilitas</div>
			<div class="card-body">
				<div class="row gutters">
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Sekolah</label>
							<input class="form-control" id="sekolah" name="sekolah" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Tempat Ibadah</label>
							<input class="form-control" id="tempat_ibadah" name="tempat_ibadah" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Rumah Sakit</label>
							<input class="form-control" id="rumah_sakit" name="rumah_sakit" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Pasar</label>
							<input class="form-control" id="pasar" name="pasar" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Gedung Pemerintah</label>
							<input class="form-control" id="gedung_pemerintah" name="gedung_pemerintah" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Lain-lain</label>
							<input class="form-control" id="lain_lain" name="lain_lain" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="col-sm-12">
		<div class="card">
			<div class="card-header">Kerusakan infrastruktur</div>
			<div class="card-body">
				<div class="row gutters">
					<div class="col-sm-12 col-12">
						<div class="form-group">
							<label for="deskripsiKerusakan">Deskripsi Kerusakan</label>
							<textarea class="form-control" id="deskripsi_kerusakan" name="deskripsi_kerusakan" placeholder="Masukkan deskripsi kerusakan" rows="3"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="col-sm-12">
		<div class="card">
			<div class="card-header">Shelter</div>
			<div class="card-body">
				<div class="row gutters">
					<div class="col-sm-12 col-12">
						<div class="form-group">
							<label for="deskripsiKerusakan">Lokasi Shelter</label>
							<textarea class="form-control" id="lokasi_shelter" name="lokasi_shelter" placeholder="Masukkan lokasi shelter" rows="3"></textarea>
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Jumlah KK</label>
							<input class="form-control" id="jumlah_kk" name="jumlah_kk" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Jumlah Jiwa</label>
							<input class="form-control" id="jumlah_jiwa" name="jumlah_jiwa" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Jumlah laki-laki</label>
							<input class="form-control" id="jumlah_laki" name="jumlah_laki" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Jumlah perempuan</label>
							<input class="form-control" id="jumlah_perempuan" name="jumlah_perempuan" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Balita</label>
							<input class="form-control" id="dibawah_lima" name="dibawah_lima" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">5 tahun - 18 tahun</label>
							<input class="form-control" id="antara_lima_dan_delapanbelas" name="antara_lima_dan_delapanbelas" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Lebih dari 18 tahun</label>
							<input class="form-control" id="lebih_delapanbelas" name="lebih_delapanbelas" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Jumlah</label>
							<input class="form-control" id="jumlah" name="jumlah" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="col-sm-12">
		<div class="d-flex justify-content-center">
			<h5 class="m-0 mb-2">MOBILISASI</h5>
		</div>
		<div class="card">
			<div class="card-header">Personil</div>
			<div class="card-body">
				<div class="row gutters">
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Pengurus</label>
							<input class="form-control" id="pengurus" name="pengurus" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Staff Markas</label>
							<input class="form-control" id="staf_markas" name="staf_markas" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Relawan PMI</label>
							<input class="form-control" id="relawan_pmi" name="relawan_pmi" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Sukarelawan Spesialis</label>
							<input class="form-control" id="sukarelawan_spesialis" name="sukarelawan_spesialis" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>    
    <div class="col-sm-12">
		<div class="card">
			<div class="card-header">Personil Bantuan Teknis/Ahli/Spesialis (TSR)</div>
			<div class="card-body">
				<div class="row gutters">
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Medis</label>
							<input class="form-control" id="medis" name="medis" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Paramedis</label>
							<input class="form-control" id="paramedis" name="paramedis" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Relief</label>
							<input class="form-control" id="relief" name="relief" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Logistik</label>
							<input class="form-control" id="logistics" name="logistics" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Watsan</label>
							<input class="form-control" id="watsan" name="watsan" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">IT Telekom</label>
							<input class="form-control" id="it_telekom" name="it_telekom" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Sheltering</label>
							<input class="form-control" id="sheltering" name="sheltering" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="col-sm-12">
		<div class="card">
			<div class="card-header">Alat Utama Sistim TDB</div>
			<div class="card-body">
				<div class="row gutters">
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Kendaraan Operasional</label>
							<input class="form-control" id="kend_ops" name="kend_ops" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Truk angkutan</label>
							<input class="form-control" id="truk_angkutan" name="truk_angkutan" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Truk tangki</label>
							<input class="form-control" id="truk_tangki" name="truk_tangki" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Double Cabin</label>
							<input class="form-control" id="double_cabin" name="double_cabin" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Alat DU</label>
							<input class="form-control" id="alat_du" name="alat_du" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Ambulans</label>
							<input class="form-control" id="ambulans" name="ambulans" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Alat Watsan</label>
							<input class="form-control" id="alat_watsan" name="alat_watsan" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">RS Lapangan</label>
							<input class="form-control" id="rs_lapangan" name="rs_lapangan" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Alat PKDD</label>
							<input class="form-control" id="alat_pkdd" name="alat_pkdd" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Gudang lapangan</label>
							<input class="form-control" id="gudang_lapangan" name="gudang_lapangan" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Posko Aju</label>
							<input class="form-control" id="posko_aju" name="posko_aju" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="inputNumber">Alat IT/Tel Lapangan</label>
							<input class="form-control" id="alat_it_lapangan" name="alat_it_lapangan" type="number" placeholder="Masukkan jumlah">
						</div>
					</div>
				</div>
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
		<div class="d-flex justify-content-center">
			<h5 class="m-0 mb-2">GIAT PMI</h5>
		</div>
		<div class="card">
			<div class="card-header">Evakuasi Korban</div>
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
			<div class="card-header">Distribusi Layanan</div>
			<div class="card-body">
				<div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Jenis Distribusi Layanan</label>
                            <select class="form-control" name="inpu[0][jenis_distribusi_layanan]" id="jenis_distribusi_layanan">
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
                            <input class="form-control" type="text" placeholder="Masukkan lokasi" name="inpu[0][lokasi]">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Unit</label>
                            <select class="form-control" name="inpu[0][unit]" id="unit">
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
                            <input class="form-control" type="number" placeholder="Masukkan jumlah" name="inpu[0][jumlah]">
                        </div>
                    </div>
                    <hr>
                    <div id="distribusiContainer">
                        <!-- Form personil dihubungi akan ditambahkan di sini -->
                    </div>
                    <button type="button" name="addDistribusi" id="addDistribusi" class="btn btn-primary btn-lg mt-3">+ Tambah distribusi layanan</button>
			</div>
		</div>
	</div>
	</div>
<div class="col-sm-12">
		<div class="card">
			<div class="card-header">Personil Dihubungi</div>
			<div class="card-body">
				<div class="row gutters">
					<!-- Inputan Nama Lengkap -->
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="namaLengkap">Nama Lengkap</label>
							<input class="form-control" id="nama_lengkap" name="inputs[0][nama_lengkap]" type="text" placeholder="Masukkan nama lengkap">
						</div>
					</div>
					<!-- Inputan Posisi -->
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="posisi">Posisi</label>
							<input class="form-control" id="posisi" name="inputs[0][posisi]" type="text" placeholder="Masukkan posisi">
						</div>
					</div>
					<!-- Inputan Kontak -->
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="kontak">Kontak</label>
							<input class="form-control" id="kontak" name="inputs[0][kontak]" type="text" placeholder="Masukkan kontak">
						</div>
					</div>
			div>
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
			<div class="card-header">Petugas Posko</div>
			<div class="card-body">
				<div class="row gutters">
					<!-- Inputan Nama Lengkap -->
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="namaLengkap">Nama Lengkap</label>
							<input class="form-control" id="namaLengkap" name="input[0][nm]" type="text" placeholder="Masukkan nama lengkap">
						</div>
					</div>
					<!-- Inputan Kontak -->
					<div class="col-sm-6 col-12">
						<div class="form-group">
							<label for="kontak">Kontak</label>
							<input class="form-control" id="kontak" name="input[0][ktk]" type="text" placeholder="Masukkan kontak">
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
			<div class="card-header">Giat Pemerintah</div>
			<div class="card-body">
				<textarea class="form-control" id="giatPemerintah" placeholder="Masukkan giat pemerintah" name="giat_pemerintah" rows="3"></textarea>
			</div>
		</div>
	</div>
    <div class="col-sm-12">
		<div class="card">
			<div class="card-header">Kebutuhan</div>
			<div class="card-body">
				<textarea class="form-control" id="kebutuhan" placeholder="Masukkan kebutuhan" name="kebutuhan" rows="3"></textarea>
			</div>
		</div>
	</div>
    <div class="col-sm-12">
		<div class="card">
			<div class="card-header">Hambatan</div>
			<div class="card-body">
				<textarea class="form-control" id="hambatan" placeholder="Masukkan hambatan" name="hambatan" rows="3"></textarea>
			</div>
		</div>
	</div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- start modal personil dihubungi -->
<!-- <script>
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
</script> -->
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
                '<button type="button" class="btn btn-danger remove-petugas">Hapus</button>' +
                '<hr>' +
            '</div>';

        $('#distribusiContainer').append(newRow);
    });

    $(document).on('click', '.remove-distribusi', function(){
        $(this).closest('.distribusi-form').remove();
    });
</script>
<!-- end modal distribusi layanan -->
@endsection
