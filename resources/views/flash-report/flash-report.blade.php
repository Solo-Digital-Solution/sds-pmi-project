@extends('layouts.layout')

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    .content-section {
        overflow-x: auto;
    }

    #map {
        height: 320px;
        width: 100%;
    }

    #data{
        margin-top: 2rem;
    }


    #informasi {
        color: white;
        font-family: 'Inter', sans-serif;
        font-style: normal;
        font-weight: 500;
        text-align: center;
        font-size: 12px;
        text-align: left;
        padding: 10px 20px;
        margin: 0
    }

    .icon-container {
            margin-top: 5px;
            text-align: center;
        }

        .icon {
            font-size:35px; /* Ukuran ikon */
        }

    /* Gaya untuk kontainer grafik lingkaran */
    .chart-container {
            text-align: center;
        }

        /* Gaya untuk grafik lingkaran */
        #genderChart {
            max-width: 300px;
            margin: auto;
        }
        .graph-container {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 400px;
        height: 200px;
        margin-left: auto;
        margin-right: auto;
    }

    .bar-container {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .label {
        width: 100px;
        text-align: left;
        margin-right: 10px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: #000000;
    }

    .bar-wrapper {
        width: 300px;
        display: flex;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .bar {
        height: 20px;
    }

    .bar1 {
        background: linear-gradient(90deg, #007a06, #007a06); /* Gradasi warna untuk data diterjunkan */
    }

    .bar2 {
        background: linear-gradient(90deg, #d16500, #d16500); /* Gradasi warna untuk data dimiliki */
    }
    .bar3 {
        background: linear-gradient(90deg, #d10007, #d10007); /* Gradasi warna untuk data dimiliki */
    }
    .bar4 {
        background: linear-gradient(90deg, #00497a, #00497a); /* Gradasi warna untuk data dimiliki */
    }

    .download-button {
        background-color: #4CAF50; /* Green background */
        border: none; /* Remove borders */
        color: white; /* White text */
        padding: 15px 32px; /* Some padding */
        text-align: center; /* Center the text */
        text-decoration: none; /* Remove underline */
        display: inline-block; /* Get the element to behave like a button */
        font-size: 16px; /* Increase font size */
        margin: 20px auto; /* Some margin for spacing */
        cursor: pointer; /* Pointer/hand icon */
        border-radius: 5px; /* Rounded corners */
        display: block; /* Make it a block element */
    }

    .button-wrapper {
        display: flex;
        justify-content: start;
    }

    .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            position: relative;
        }
        .close {
            color: #aaa;
            position: absolute;
            right: 15px;
            top: 15px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        h4 {
            margin-top: 0;
            color: #333;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form div {
            margin-bottom: 15px;
        }
        label {
            margin-bottom: 5px;
            display: block;
            color: #555;
        }
        input[type="text"], textarea, input[type="file"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #bc202d;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #a81b26;
        }
</style>

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Flash Report Laporan Situasi ke-{{ $laporan->nama_laporan }}</h5>
                <ol class="breadcrumb" style="background-color: transparent; margin-left:0px; margin-bottom:0px">
                    <li class="breadcrumb-item" style="font-size:12pt"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" style="font-size:12pt"><a href="{{ url('/kejadian') }}">Laporan Kejadian</a></li>
                    <li class="breadcrumb-item" style="font-size:12pt"><a href="{{ url('/kejadian/view-lapsit/'. $kejadian->id_kejadian) }}">Laporan Situasi</a></li>
                    <li class="breadcrumb-item" style="font-size:12pt">Flash Report</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')


<div id="content-section" class="content-section">

<header class="main-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <table border="0" width="100%" cellpadding="10px" cellspacing="0px" id="content-section">
                    <thead>
                        <tr>
                            <th style="background-color: #860200; width: 2px"></th>
                            <th colspan="2" style="background-color: #650103;color: white; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 300; text-align: center; height: 20px; width: 50px; font-size: 24px">infografis</th>
                            <th style="background-color: #860200;"></th>
                            <th rowspan="2" colspan="5" style="background-color: #EBF1F1; color: #ED292C; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 67px; white-space: nowrap; align-items: center; line-height: 1; vertical-align: bottom;">
                                KEJADIAN {{$laporan->kejadian->nama_kejadian}}<br>
                                <span style="font-size: 54px; color: #000000;">SURAKARTA <p style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 39px; background-color: #1E1E1C; color: white; padding: 5px 10px;display: inline-block;">JAWA TENGAH</p></span>
                            </th>

                            <th rowspan="2" colspan="3" style="background-color: #EBF1F1;align-item: right;padding-left: 100px;"><img src="{{asset('/img/logoPMI.png')}}" alt="Logo PMI" style="width: 280; padding: 0px 20px"></th>
                        </tr>
                        <tr>
                            <th colspan="4" style="background-color: #860200;color: white; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 28px;white-space: nowrap; item-align:center;padding-left: 25px;">LAPORAN SITUASI</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</header>

<div class="main-content">
    <!-- Row start -->
    <div class="row gutters">
        <div class="col-md-4 col-sm-6">
            <td><div id="map"></div></td>
        </div>
        <div class="col-md-4 col-sm-6">
            <div id="informasi"  style="background-color: #650103;">
                Kejadian        : <span style="font-weight: 900">{{$laporan->kejadian->nama_kejadian}}</span> <br>
                Lokasi          : <span style="font-weight: 900">{{$laporan->kejadian->kecamatan}}, {{$laporan->kejadian->kelurahan}}, Surakarta</span> <br>
                Waktu Kejadian  : <span id="waktuKejadian" style="font-weight: 900"></span> <br><br>
                <span style="font-size: 14px"><span style="font-weight: 900; text-align:right">UPDATE&nbsp&nbsp&nbsp</span> <span id="waktuKejadianUpdate"></span></span><br><br>
            </div>
            <div style="display: flex; gap: 0.5rem; padding: 1rem;">
                <div class="left">
                    <div style="display: flex">
                        <div><i class="fa-solid fa-person-walking-dashed-line-arrow-right icon" style="color: #bc202d; padding : 1rem"></i></div>
                        <div style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap">MENGUNGSI <br> <br> <span style="color:#bc202d;"> {{$laporan->dampak->korbanJiwa->mengungsi}} JIWA</span></div>
                    </div>
                    <div id="data" style="display: flex">
                        <div><i class="fa-solid fa-user-injured icon" style="color: #bc202d; padding : 1rem"></i></div>
                        <div style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">LUKA-LUKA <br> <br> <span style="color:#bc202d;">{{$laporan->dampak->korbanJiwa->mengungsi}} JIWA</span></div>
                    </div>
                </div>
                <div class="right" >
                    <div style="display: flex">
                        <div><i class="fa-solid fa-tent-arrows-down icon" style="color: #bc202d; padding : 1rem"></i></div>
                        <div style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">PENGUNGSIAN <br> <br><span style="color:#bc202d;">{{$jumlahShelter}} TITIK</span></div>
                    </div>
                    <div id="data"style="display: flex">
                        <div><i class="fa-solid fa-house-crack icon" style="color: #bc202d; padding : 1rem"></i></div>
                        <div style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">RUMAH RUSAK <br> <br> <span style="color:#bc202d;"> {{$laporan->dampak->kerusakanRumah->rusak_berat + $laporan->dampak->kerusakanRumah->rusak_ringan + $laporan->dampak->kerusakanRumah->rusak_sedang}} RUMAH</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div>
                <td colspan="3" style="padding-top: 15px;">
                    <span style="background-color: #E91A20;color: #FFFFFF; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 28px; padding: 5px 20px; display: inline-block; width:100%">JUMLAH PENGUNGSI</span>
                </td>
                <div class="graph-container" >
                    <canvas id="graph-container-korban"></canvas>
                </div>
            </div>

        </div>
    </div>
    <!-- Row end -->
    <!-- Row 2 start -->
    <div class="row gutters" style="margin-bottom: 3rem">
        <div class="col-md-4 col-sm-12" style="gap : 1rem;">
            <div style="gap:1rem; display: flex">
                <div class="left" style="display: flex; flex-direction : column">
                    <div id="data" style="display: flex; ">
                        <div class="icon" style="padding : 1rem"><i class="fa-solid fa-droplet icon" style="color: #bc202d;"></i></div>
                        <div style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; display:flex; flex-direction:column">DISTRIBUSI AIR </br>BERSIH</br><span style="color:#bc202d;"></br>{{ $jumlahLayananAirBersih->jumlah_distribusi_layanan ?? 0 }}</span></div>
                    </div>
                    <div id="data" style="display: flex; ">
                        <div class="icon"  style="padding : 1rem"><i class="fa-solid fa-kitchen-set icon" style="color: #bc202d;"></i></div>
                        <div style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; display:flex; flex-direction:column">FOOD ITEM<span style="color:#bc202d;"></br>{{ $jumlahFoodItem->jumlah_distribusi_layanan ?? 0 }}</span></div>
                    </div>
                </div>
                <div class="right" style="display: flex; flex-direction : column">
                    <div id="data"  style="display: flex; ">
                        <div class="icon" style="padding : 1rem"><i class="fa-solid fa-handshake-angle icon" style="color: #bc202d;"></i></div>
                        <div style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; display:flex; flex-direction:column">RELAWAN<span style="color:#bc202d;"></br>{{$laporan->mobilisasi->personil->pengurus + $laporan->mobilisasi->personil->relawan_pmi + $laporan->mobilisasi->personil->staf_markas + $laporan->mobilisasi->personil->sukarelawan_spesialis}} ORANG</span></div>
                    </div>
                        <div id="data" style="display: flex; ">
                            <div class="icon" style="padding : 1rem"><i class="fa-solid fa-user-doctor icon" style="color: #bc202d;"></i></div>
                            <div style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; display:flex; flex-direction:column">TENAGA</br>KESEHATAN</br><span style="color:#bc202d;"></br>{{$jumlahTenagaMedis->medis + $jumlahTenagaMedis->paramedis}} ORANG</span></div>
                        </div>
                </div>
            </div>

            <div style="margin-top: 2rem;font-family: 'Inter', sans-serif; font-style: normal; font-weight: 300; white-space: nowrap; color:#bc202d; font-size:2rem"><span style="color:black">klik </span><span style="text-decoration: underline; font-weight:800">donasi.pmi.or.id</span><br><span style="color: black">your <span style="font-weight:800">small donation</span> is a <br><span style="font-weight:800">big opportunity</span> to us</span></div>
            <div class="bank" style="display: flex; flex-wrap: wrap; gap: 1rem; margin-top: 2rem;">
                <div class="bank-item" style="flex: 1 1 calc(50% - 1rem); font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 1rem;">
                    Bank Mandiri<br><span style="color:#bc202d;">070-00-0011601-7</span><br><span style="font-size: 10px;">a/n Palang Merah Indonesia</span>
                </div>
                <div class="bank-item" style="flex: 1 1 calc(50% - 1rem); font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 1rem;">
                    Bank BCA<br><span style="color:#bc202d;">206.300668.8</span><br><span style="font-size: 10px;">a/n Kantor PMI Pusat</span>
                </div>
                <div class="bank-item" style="flex: 1 1 calc(50% - 1rem); font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 1rem;">
                    Bank BRI<br><span style="color:#bc202d;">070-00-0011601-7</span><br><span style="font-size: 10px;">a/n Palang Merah Indonesia</span>
                </div>
                <div class="bank-item" style="flex: 1 1 calc(50% - 1rem); font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 1rem;">
                    Bank BSI<br><span style="color:#bc202d;">070-00-0011601-7</span><br><span style="font-size: 10px;">a/n Palang Merah Indonesia</span>
                </div>
            </div>

        </div>
        <div class="col-md-4 col-sm-12">
                <div style="margin-top : 2rem; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">KEBUTUHAN MENDESAK <br><span style="color: #000000">
                {{$laporan->kebutuhan}}</span>
                </div>
                <div style="margin-top: 4rem">
                    <td colspan="4" style=""><span style="background-color: #E91A20;color: #FFFFFF; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 28px; padding: 5px 20px; display: inline-block; width: 100%;">PENERIMA MANFAAT</span></td>
                    <div class="chart-container" style="margin-top: 3rem">
                        <canvas id="genderChart" width="300" height="300"></canvas>
                    </div>
                </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <td colspan="3" style="padding-top: 15px;">
                <span style="background-color: #E91A20;color: #FFFFFF; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 28px; padding: 5px 20px; display: inline-block; width:100%">DATA FLUKTUASI LAYANAN</span>
            </td>
            <div class="graph-container" >
                <canvas id="graph-container-layanan"></canvas>
            </div>
            <div style="margin: 1rem">
                <div><img src="{{ asset('/dokumentasi/' . $laporan->dokumentasis->first()->file_path) }}" style="width: 400px; height:auto; object-fit:cover;"></div>
            </div>
        </div>
    </div>
    <footer>
        <div colspan="12" style="background-color: #860200;color: white; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 18px;white-space: nowrap;">&nbsp&nbsp© Posko PMI Surakarta, Jawa Tengah</div>
    </footer>
    </div>
    
    <div id="sendMessageModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h4>Send WhatsApp Message</h4>
            <form id="sendMessageForm" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="nowa">Upload CSV File (with phone numbers)</label>
                    <input type="file" name="nowa" id="nowa" accept=".csv" />
                </div>
                <div>
                    <label for="pesan">Message</label>
                    <textarea name="pesan" id="pesan"></textarea>
                </div>
                <div>
                    <label for="gambar">Upload Image</label><br>
                    <input type="file" name="gambar" id="gambar" accept=".jpg,.jpeg,.png" />
                </div>
                <div>
                    <input type="submit" value="Send Message" />
                </div>
            </form>
        </div>
    </div>
</div>

<div class="button-wrapper">
        <button style="border-radius: 5px; border:none; font-size: 17px; margin-bottom: 20px; background-color: #bc202d; color: #fff; padding: 8px 14px;" onclick="downloadContentAsImage()">Download as Image</button>
        <!-- <button style="border-radius: 5px;border:none;font-size: 17px;margin-top: 20px;background-color: #bc202d;color: #fff;padding: 8px 14px; margin-left: 10px;" id="send-to-whatsapp">Send to Whatsapp</button> -->
    </div>

<!-- END: .main-content -->

<script>
    function downloadContentAsImage() {
        const contentSection = document.getElementById('content-section');

        html2canvas(contentSection, {
            allowTaint: true,
            useCORS: true
        }).then(canvas => {
            // Mengonversi canvas menjadi data URL gambar PNG
            const imgData = canvas.toDataURL('image/png');

            // Membuat link untuk mengunduh gambar
            const downloadLink = document.createElement('a');
            downloadLink.href = imgData;
            downloadLink.download = 'content-section.png'; // Nama file yang diunduh

            // Menambahkan link ke dokumen dan mengkliknya untuk mengunduh
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
        });
    }

    function formatTanggal(tanggalString) {
            const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
            const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
                            "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

            const tanggal = new Date(tanggalString);
            const dayName = days[tanggal.getDay()];
            const date = tanggal.getDate();
            const month = months[tanggal.getMonth()];
            const year = tanggal.getFullYear();
            const hours = String(tanggal.getHours()).padStart(2, '0');
            const minutes = String(tanggal.getMinutes()).padStart(2, '0');

            return `${dayName}, ${date} ${month} ${year} / Pukul ${hours}:${minutes}`;
        }

        document.addEventListener('DOMContentLoaded', () => {
            const waktuKejadianString = "{{$laporan->kejadian->waktu_kejadian}}";
            const waktuKejadianElement = document.getElementById('waktuKejadian');
            waktuKejadianElement.textContent = formatTanggal(waktuKejadianString);
        });

        function formatTanggalUpdate(tanggalString) {
            const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
            const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
                            "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

            const tanggal = new Date(tanggalString);
            const dayName = days[tanggal.getDay()];
            const date = tanggal.getDate();
            const month = months[tanggal.getMonth()];
            const year = tanggal.getFullYear();
            const hours = String(tanggal.getHours()).padStart(2, '0');
            const minutes = String(tanggal.getMinutes()).padStart(2, '0');

            return `${dayName}, ${date} ${month} ${year} / ${hours}:${minutes}`;
        }

        document.addEventListener('DOMContentLoaded', () => {
            const waktuKejadianString = "{{$laporan->update}}";
            const waktuKejadianElement = document.getElementById('waktuKejadianUpdate');
            waktuKejadianElement.textContent = formatTanggalUpdate(waktuKejadianString);
        });
</script>

<script>
    var latitude = <?php echo json_encode($laporan->kejadian->latitude); ?>;
    var longitude = <?php echo json_encode($laporan->kejadian->longitude); ?>;
    var bencana = <?php echo json_encode($laporan->kejadian->nama_kejadian); ?>;
    var lokasi = <?php echo json_encode($laporan->kejadian->lokasi); ?>;
    var kelurahan = <?php echo json_encode($laporan->kejadian->kelurahan); ?>;

    var map = L.map('map', {
        zoomControl: false // Menonaktifkan kontrol zoom
    }).setView([latitude, longitude], 14); // Inisialisasi peta dengan koordinat Mojosongo dan zoom level 12

    // Tambahkan layer peta dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Tambahkan marker di Mojosongo dengan tooltip dan pop-up
    var marker = L.marker([latitude, longitude]).addTo(map);
    marker.bindTooltip(kelurahan).openTooltip();

    // Membuat permintaan geokode untuk mendapatkan informasi jalan
    var url = "https://nominatim.openstreetmap.org/reverse?format=json&lat=" + marker.getLatLng().lat + "&lon=" + marker.getLatLng().lng;
    fetch(url)
        .then(response => response.json())
        .then(data => {
            var address = data.display_name;
            marker.bindPopup("<b>Kejadian " + bencana + " " + lokasi + ", Surakarta</b><br>Latitude: " + marker.getLatLng().lat.toFixed(6) + ", Longitude: " + marker.getLatLng().lng.toFixed(6) + "<br>" + address).openPopup();
        });
</script>

<script>
    // Data jumlah pria dan wanita
    var data = {
        labels: ['Pria', 'Wanita'],
        datasets: [{
            data: [<?php echo $laporan->dampak->shelters->isNotEmpty() ? $laporan->dampak->shelters->first()->jumlah_laki : 0; ?>, <?php echo $laporan->dampak->shelters->isNotEmpty() ? $laporan->dampak->shelters->first()->jumlah_perempuan : 0; ?>], // Jumlah pria dan wanita
            backgroundColor: [
                '#BC202D', // Warna untuk pria
                '#FB7E89'  // Warna untuk wanita
            ],
            borderColor: [
                '#B31424',  // Warna pinggiran untuk pria
                '#FE9FA9'    // Warna pinggiran untuk wanita
            ],
            borderWidth: 1
        }]
    };

    // Konfigurasi grafik lingkaran
    var options = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: true,
                position: 'top',
                labels: {
                    font: {
                        size: 20
                    }
                    // fontColor: '#333',
                    // fontSize: 20
                }
            },
        },
        title: {
            display: true,
            text: 'Data Gender'
        }
    };

    // Membuat grafik lingkaran
    var ctx = document.getElementById('genderChart').getContext('2d');
    var genderChart = new Chart(ctx, {
        type: 'doughnut', // Jenis grafik lingkaran
        data: data,
        options: options
    });

    // Membuat grafik lingkaran
    const fluktuasiKorban = JSON.parse('<?= $fluktuasiKorban ?>')
    console.log(fluktuasiKorban)
    var ctxKorban = document.getElementById('graph-container-korban');
    const dataKorban = {
        labels: fluktuasiKorban.labels,
        datasets: [
            {
            label: 'Luka ringan',
            data: fluktuasiKorban.luka_ringan,
            },
            {
            label: 'Luka berat',
            data: fluktuasiKorban.luka_berat,
            },
            {
            label: 'Jumlah jiwa',
            data: fluktuasiKorban.jmlh_jiwa,
            }
        ]
    }
    var korbanChart = new Chart(ctxKorban, {
        type: 'bar', // Jenis grafik lingkaran
        data: dataKorban,
    });

    const fluktuasiLayanan = JSON.parse('<?= $fluktuasiLayanan ?>')
    console.log(fluktuasiLayanan)
    var ctxKorban = document.getElementById('graph-container-layanan');
    const dataLayanan = {
        labels: fluktuasiLayanan.labels,
        datasets: [
            {
            label: 'Food Item',
            data: fluktuasiLayanan.food_item,
            },
            {
            label: 'Non-Food Item',
            data: fluktuasiLayanan.non_food_item,
            },
            {
            label: 'Layanan Kesehatan',
            data: fluktuasiLayanan.layanan_kesehatan,
            },
            {
            label: 'Distribusi Air Bersih',
            data: fluktuasiLayanan.distribusi_air_bersih,
            }
        ]
    }
    var korbanChart = new Chart(ctxKorban, {
        type: 'line', // Jenis grafik lingkaran
        data: dataLayanan,
    });



    // Data kecamatan
    // const dataKecamatan = [
    //         { nama: 'Banjarsari', diterjunkan: 82, dimiliki: 105 },
    //         { nama: 'Jebres', diterjunkan: 42, dimiliki: 120 },
    //         { nama: 'Laweyan', diterjunkan: 0, dimiliki: 60 },
    //         { nama: 'Pasar Kliwon', diterjunkan: 30, dimiliki: 70 },
    //         { nama: 'Serengan', diterjunkan: 50, dimiliki: 90 }
    //     ];
        const dataKecamatan = JSON.parse('<?= $jumlahLayananPerLokasi ?>')
        console.log(dataKecamatan)
        // Container untuk grafik
        const graphContainer = document.getElementById('graph-container');

        // Mencari nilai terbesar dari dimiliki
        // const maxDimiliki = Math.max(...dataKecamatan.map(kecamatan => kecamatan.map(item => item.jumlah_distribusi_layanan)));

        // Membuat dan menambahkan bar untuk setiap kecamatan
        for (const kecamatan in dataKecamatan){
            const kec = dataKecamatan[kecamatan]
            const maxDimiliki = Math.max(...kec.map(kecamatan => kecamatan.jumlah_distribusi_layanan));

            console.log(kec[0])

            const barContainer = document.createElement('div');
            barContainer.classList.add('bar-container');

            const label = document.createElement('div');
            label.classList.add('label');
            label.textContent = kecamatan;

            const barWrapper = document.createElement('div');
            barWrapper.classList.add('bar-wrapper');

            let counter = 1
            kec.forEach(kec => {
                const bar1Width = (kec.jumlah_distribusi_layanan / maxDimiliki) * 300;

                const bar1 = document.createElement('div');
                bar1.classList.add('bar', `bar${counter}`);
                bar1.style.width = `${bar1Width}px`;

                barWrapper.appendChild(bar1);
                counter++
            })
            // Menghitung lebar bar berdasarkan nilai relatif terhadap maxDimiliki
            // const bar2Width = ((kecamatan.dimiliki - kecamatan.diterjunkan) / maxDimiliki) * 300;



            // const bar2 = document.createElement('div');
            // bar2.classList.add('bar', 'bar2');
            // bar2.style.width = `${bar2Width}px`;


            // barWrapper.appendChild(bar2);
            barContainer.appendChild(label);
            barContainer.appendChild(barWrapper);

            graphContainer.appendChild(barContainer);
        }


</script>






@endsection





