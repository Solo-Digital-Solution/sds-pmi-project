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
<!-- BEGIN .app-main -->
<!-- Row start -->
<div class="row gutters">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Umum</div>
            <div class="card-body">
                <div class="row gutters">
                <form action="{{ route('submit-assessment') }}" method="POST">
                    @csrf
                    <div class="row gutters">
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="namaBencana">Nama Bencana</label>
                                <select class="custom-select my-1 mr-sm-2" id="namaBencana" name="nama_bencana">
                                    <option selected>Pilih Nama Bencana</option>
                                    <option value="Gempa bumi">Gempa bumi</option>
                                    <option value="Angin Puting Beliung">Angin Puting Beliung</option>
                                    <option value="Banjir">Banjir</option>
                                    <option value="Tanah Longsor">Tanah Longsor</option>
                                    <option value="Kekeringan">Kekeringan</option>
                                    <option value="Kebakaran">Kebakaran</option>
                                    <option value="Kecelakaan Transportasi">Kecelakaan Transportasi</option>
                                    <option value="Kecelakaan Industri">Kecelakaan Industri</option>
                                    <option value="Kejadian Luar Biasa">Kejadian Luar Biasa</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="inputDate">Tanggal</label>
                                <input class="form-control" id="inputDate" type="date" placeholder="Pilih tanggal" name="tanggal" required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="inputTime">Waktu</label>
                                <input class="form-control" id="inputTime" type="time" placeholder="Pilih waktu" name="waktu" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-12">
                            <div class="form-group">
                                <label for="location">Lokasi</label>
                                <input type="text" id="location" class="form-control" placeholder="Klik pada peta untuk memilih lokasi" readonly name="lokasi">
                                <input type="hidden" id="latitude" name="latitude">
                                <input type="hidden" id="longitude" name="longitude">
                            </div>
                        </div>
                        <div class="col-sm-12 col-12">
                            <div id="map" style="height: 400px;"></div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="inputName">Petugas Assessment</label>
                                <input class="form-control" id="inputName" type="text" placeholder="Masukkan nama lengkap" name="petugas" required>
                            </div>
                        </div>
                        <!-- Tambahkan kolom-kolom lainnya sesuai kebutuhan -->
                        <div class="col-sm-12">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" id="submitForm">Kirim</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Informasi Umum</div>
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-12">
                        <h5>Jumlah Korban</h5>
                    </div>
                    <div class="col-sm-3 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Meninggal Dunia</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-3 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Luka Berat</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-3 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Luka Ringan</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-3 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Hilang</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="Pengungsi">Pengungsi / IDP's</label>
                            <select class="custom-select" id="Pengungsi">
                                <option value="Mojosongo">Ada</option>
                                <option value="Jebres">Tidak ada</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="Pengungsi">Jumlah Pengungsi / IDP's</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-12 col-12">
                        <div class="form-group">
                            <label for="Pengungsi">Lokasi Pengungsian</label>
                            <textarea class="form-control" id="textareaAddress" placeholder="Masukkan alamat lengkap" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Dampak Sarana dan Prasarana</div>
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Rumah Tinggal</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Rusak Berat</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="inputNumber">Rusak Ringan</label>
                            <input class="form-control" id="inputNumber" type="number" placeholder="Masukkan jumlah">
                        </div>
                    </div>
                    <div class="col-12">
                        <h5>Akses Transportasi</h5>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="Jalan">Jalan</label>
                            <select class="custom-select" id="Jalan">
                                <option value="Berfungsi">Berfungsi</option>
                                <option value="Tidak berfungsi">Tidak berfungsi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="Jembatan">Jembatan</label>
                            <select class="custom-select" id="Jembatan">
                                <option value="Berfungsi">Berfungsi</option>
                                <option value="Tidak berfungsi">Tidak berfungsi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="KendaraanUmum">Kendaraan Umum</label>
                            <select class="custom-select" id="KendaraanUmum">
                                <option value="Berfungsi">Berfungsi</option>
                                <option value="Tidak berfungsi">Tidak berfungsi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="accessCommunication">
                                <h5>Akses Komunikasi</h5>
                            </label>
                            <div class="checkbox-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="telecom">
                                    <label class="custom-control-label" for="telecom">Telepon/Fax/Telex/Telegram</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="mobilePhone">
                                    <label class="custom-control-label" for="mobilePhone">Telepon Seluler</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="postOffice">
                                    <label class="custom-control-label" for="postOffice">Kantor Pos</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="internet">
                                    <label class="custom-control-label" for="internet">Internet</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h5>Sarana Umum</h5>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="Faskes">RS/Fasilitas Kesehatan</label>
                            <select class="custom-select" id="Faskes">
                                <option value="Berfungsi">Berfungsi</option>
                                <option value="Tidak berfungsi">Tidak berfungsi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="Listrik">Listrik</label>
                            <select class="custom-select" id="Listrik">
                                <option value="Berfungsi">Berfungsi</option>
                                <option value="Tidak berfungsi">Tidak berfungsi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="Air">Air</label>
                            <select class="custom-select" id="Air">
                                <option value="Berfungsi">Berfungsi</option>
                                <option value="Tidak berfungsi">Tidak berfungsi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="Sekolah">Sekolah</label>
                            <select class="custom-select" id="Sekolah">
                                <option value="Berfungsi">Berfungsi</option>
                                <option value="Tidak berfungsi">Tidak berfungsi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="form-group">
                            <label for="TempatIbadah">Tempat Ibadah</label>
                            <select class="custom-select" id="TempatIbadah">
                                <option value="Berfungsi">Berfungsi</option>
                                <option value="Tidak berfungsi">Tidak berfungsi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Situasi Keamanan</div>
            <div class="card-body">
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Tindakan yang sudah dilakukan</div>
            <div class="card-body">
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Kebutuhan Mendesak</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">PMI</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Korban</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">OPROL / ORMAS</div>
            <div class="card-body">
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Contact Person</div>
            <div class="card-body">
                <div class="form-group">
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Masukkan nomor telepon">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row gutters">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-lg btn-block">Kirim</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Row end -->
</div>
<!-- END: .main-content -->
</div>
<!-- Google Maps API -->
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
        document.getElementById('latitude').value = e.latlng.lat;
        document.getElementById('longitude').value = e.latlng.lng;
    }

    // Tambahkan event listener untuk klik pada peta
    map.on('click', onMapClick);
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- END: .app-main -->
@endsection