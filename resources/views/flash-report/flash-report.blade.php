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
        height: 450px;
        width: 460px;
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
        justify-content: center;
        width: 400px;
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
        background: linear-gradient(90deg, #bc202d, #73020E); /* Gradasi warna untuk data diterjunkan */
    }

    .bar2 {
        background: linear-gradient(90deg, #FD5B6D, #A20415); /* Gradasi warna untuk data dimiliki */
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
        justify-content: right;
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
            background-color: #fefefe;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px; 
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            border-radius: 10px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
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
                <h5>Dashboard</h5>
                <h6 class="sub-heading">Welcome to Cherry Admin Template</h6>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="right-actions">
                <span class="last-login">Last Login: 2 hours ago</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content-section">
	<table border="0" width="500px" cellpadding="10px" cellspacing="0px" id="content-section">
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

		<tfoot>
			<td colspan="12" style="background-color: #860200;color: white; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 14px;white-space: nowrap; padding-left: 2">&nbsp&nbsp© Posko PMI Jawa Tengah</td>
		</tfoot>

		<tbody>
			<tr>
				<td colspan="5" rowspan="10"><div id="map"></div></td>
				<td colspan="4" rowspan="2"">
                    <div id="informasi"  style="background-color: #650103;"">
                    Kejadian        : <span style="font-weight: 900">{{$laporan->kejadian->nama_kejadian}}</span> <br>
                    Lokasi          : <span style="font-weight: 900">{{$laporan->kejadian->kecamatan}}, {{$laporan->kejadian->kelurahan}}, Surakarta</span> <br>
                    Waktu Kejadian  : <span id="waktuKejadian" style="font-weight: 900"></span> <br><br>
                    <span style="font-size: 14px"><span style="font-weight: 900; text-align:right">UPDATE&nbsp&nbsp&nbsp</span> <span id="waktuKejadianUpdate"></span></span><br><br>
                    </div>
                </td>
                <td colspan="3" style="
    padding-top: 15px;
"><span style="background-color: #E91A20;color: #FFFFFF; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 28px; padding: 5px 20px; display: inline-block; width:100%">JUMLAH LAYANAN PER LOKASI</span></td>
			</tr>

            <tr>
				<td colspan="3" rowspan="4">
                <div class="graph-container" id="graph-container">
                </td>
			</tr>

			<tr>
				<td colspan="4"><span style="background-color: #E91A20;color: #FFFFFF; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 28px; padding: 5px 20px; display: inline-block; width: 100%;">DATA KORBAN SEMENTARA</span></td>

			</tr>

            <tr>
				<td rowspan="2"><i class="fa-solid fa-person-walking-dashed-line-arrow-right icon" style="color: #bc202d;"></i></td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap">MENGUNGSI</td>
				<td rowspan="2"><i class="fa-solid fa-tent-arrows-down icon" style="color: #bc202d;"></i></td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">PENGUNGSIAN</td>
			</tr>

            <tr>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">{{$laporan->dampak->korbanJiwa->mengungsi}} JIWA</td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">{{$jumlahShelter}} TITIK</td>
			</tr>

            <tr>
				<td rowspan="2"><i class="fa-solid fa-user-injured icon" style="color: #bc202d;"></i></td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">LUKA-LUKA</td>
				<td rowspan="2"><i class="fa-solid fa-house-crack icon" style="color: #bc202d;"></i></td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;"">RUMAH RUSAK</td>
                <td colspan="3" rowspan="6"><img src="{{ asset('/dokumentasi/' . $laporan->dokumentasis->first()->file_path) }}" style="width: 100%"></td>
			</tr>

            <tr>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">{{$laporan->dampak->korbanJiwa->luka_berat + $laporan->dampak->korbanJiwa->luka_ringan}} JIWA</td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">{{$laporan->dampak->kerusakanRumah->rusak_berat + $laporan->dampak->kerusakanRumah->rusak_ringan + $laporan->dampak->kerusakanRumah->rusak_sedang}} RUMAH</td>
			</tr>

            <tr>
				<td colspan="4" rowspan="3" style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">KEBUTUHAN MENDESAK <br><span style="color: #000000">
                {{$laporan->kebutuhan}}</span>
                </td>
			</tr>

            <tr>

			</tr>

            <tr>
			</tr>

            <tr>
				<td rowspan="3" style="writing-mode: vertical-rl; text-orientation: sideways; white-space: nowrap; text-align: center; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800;"></td>
				<td style="width: 20px;height: 20px; text-align: center"><i class="fa-solid fa-droplet icon" style="color: #bc202d;"></i></td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">DISTRIBUSI AIR </br>BERSIH</br><span style="color:#bc202d;"></br>{{ $jumlahLayananAirBersih->total ?? 0 }} {{ $jumlahLayananAirBersih->satuan ?? '' }}</span></td>
                <td style="width: 20px;height: 20px; text-align: center"><i class="fa-solid fa-kitchen-set icon" style="color: #bc202d;"></i></td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">FOOD ITEM</br><span style="color:#bc202d;"></br>{{ $jumlahFoodItem->jumlah ?? 0 }} {{ $jumlahFoodItem->unit ?? '' }}</span></td>
				<td colspan="4" style=""><span style="background-color: #E91A20;color: #FFFFFF; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 28px; padding: 5px 20px; display: inline-block; width: 100%;">PENERIMA MANFAAT</span></td>
			</tr>

            <tr>
				<td style="width: 20px;height: 40px; text-align: center"><i class="fa-solid fa-handshake-angle icon" style="color: #bc202d;"></i></td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">RELAWAN</br><span style="color:#bc202d;"></br>{{$laporan->mobilisasi->personil->pengurus + $laporan->mobilisasi->personil->relawan_pmi + $laporan->mobilisasi->personil->staf_markas + $laporan->mobilisasi->personil->sukarelawan_spesialis}} ORANG</span></td>
				<td style="width: 20px;height: 40px; text-align: center"><i class="fa-solid fa-user-doctor icon" style="color: #bc202d;"></i></td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">TENAGA</br>KESEHATAN</br><span style="color:#bc202d;"></br>482.000 ORANG</span></td>
                <td colspan="4" rowspan="2" style="
    padding-bottom: 70px;
"><div class="chart-container">
                    <canvas id="genderChart" width="150" height="150"></canvas>
                </div></td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800;">Bank Mandiri<span style="color:#bc202d;"></br>070-00-0011601-7</span></br><span style="font-size: 10px"></br>a/n Palang Merah Indonesia</span></td>
                <td valign="top" style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800;">Bank BCA<span style="color:#bc202d;"></br>206.300668.8</span></br><span style="font-size: 10px"></br>a/n Kantor PMI Pusat</span></td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800;">Bank BRI<span style="color:#bc202d;"></br>070-00-0011601-7</span></br><span style="font-size: 10px"></br>a/n Palang Merah Indonesia</span></td>
			</tr>

            <tr>
				<td style="width: 20px;height: 40px; text-align: center"><i class="fa-solid fa-suitcase-medical icon" style="color: #bc202d;"></i></td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800;">PERTOLONGAN</br>PERTAMA</br>DARURAT DAN</br>EVAKUASI</BR>BENCANA</td>
				<td style="width: 20px;height: 40px; text-align: center"><i class="fa-solid fa-tents icon" style="color: #bc202d;"></i></td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">
                    @if ($jumlahShelter != 0)
                        HUNIAN DARURAT
                    @endif
                </td>
                <td colspan="3" style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 300; white-space: nowrap; color:#bc202d;font-size:18px"><span style="color:black">klik </span><span style="text-decoration: underline; font-weight:800">donasi.pmi.or.id</span><br><span style="color: black">your <span style="font-weight:800">small donation</span> is a <span style="font-weight:800">big opportunity</span> to us</span></td>
			</tr>
		</tbody>

	</table>
</div>
<div class="button-wrapper">
    <button style="border-radius: 5px; border:none; font-size: 17px; margin-top: 20px; background-color: #bc202d; color: #fff; padding: 8px 14px;" onclick="downloadContentAsImage()">Download as Image</button>
    <button style="border-radius: 5px; border:none; font-size: 17px; margin-top: 20px; background-color: #bc202d; color: #fff; padding: 8px 14px;" id="send-to-whatsapp">Send to Whatsapp</button>
</div>
<div id="sendMessageModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h4>Send WhatsApp Message</h4>
        <form id="sendMessageForm" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="nowa">Upload CSV File (with phone numbers)</label><br>
                <input type="file" name="nowa" id="nowa" accept=".csv" />
            </div>
            <div>
                <label for="pesan">Message</label><br>
                <input type="text" name="pesan" id="pesan" />
            </div>
            <div>
                <label for="gambar">Upload Image</label><br>
                <input type="file" name="gambar" id="gambar" />
            </div>
            <div>
                <input type="submit" value="Send Message" />
            </div>
        </form>
    </div>
</div>
    <script>
        document.getElementById('send-to-whatsapp').addEventListener('click', function() {
            const modal = document.getElementById('sendMessageModal');
            modal.style.display = 'flex'; // Show the modal
        });

        document.getElementById('sendMessageForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const form = document.getElementById('sendMessageForm');
            const formData = new FormData(form);

            fetch('{{ route('kirim.pesan') }}', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            })
            .then(response => {
                console.log('Response status:', response.status);
                if (!response.ok) {
                    return response.text().then(text => { throw new Error(text || 'Network response was not ok') });
                }
                return response.json();
            })
            .then(data => {
                console.log('Response from server:', data);
                alert('Pesan telah dikirim ke semua nomor');
                closeModal(); // Close modal after successful send
            })
            .catch(error => {
                console.error('Error sending data:', error);
                alert('Terjadi kesalahan saat mengirim pesan');
            });
        });

        function closeModal() {
            const modal = document.getElementById('sendMessageModal');
            modal.style.display = 'none'; // Hide the modal
        }

        // Close the modal when the user clicks outside of it
        window.onclick = function(event) {
            const modal = document.getElementById('sendMessageModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>

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
    }).setView([latitude, longitude], 12); // Inisialisasi peta dengan koordinat Mojosongo dan zoom level 12

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
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                fontColor: '#333',
                fontSize: 12
            }
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



    // Data kecamatan
    const dataKecamatan = [
            { nama: 'Banjarsari', diterjunkan: 82, dimiliki: 105 },
            { nama: 'Jebres', diterjunkan: 42, dimiliki: 120 },
            { nama: 'Laweyan', diterjunkan: 0, dimiliki: 60 },
            { nama: 'Pasar Kliwon', diterjunkan: 30, dimiliki: 70 },
            { nama: 'Serengan', diterjunkan: 50, dimiliki: 90 }
        ];

        // Container untuk grafik
        const graphContainer = document.getElementById('graph-container');

        // Mencari nilai terbesar dari dimiliki
        const maxDimiliki = Math.max(...dataKecamatan.map(kecamatan => kecamatan.dimiliki));

        // Membuat dan menambahkan bar untuk setiap kecamatan
        dataKecamatan.forEach(kecamatan => {
            const barContainer = document.createElement('div');
            barContainer.classList.add('bar-container');

            const label = document.createElement('div');
            label.classList.add('label');
            label.textContent = kecamatan.nama;

            const barWrapper = document.createElement('div');
            barWrapper.classList.add('bar-wrapper');

            // Menghitung lebar bar berdasarkan nilai relatif terhadap maxDimiliki
            const bar1Width = (kecamatan.diterjunkan / maxDimiliki) * 300;
            const bar2Width = ((kecamatan.dimiliki - kecamatan.diterjunkan) / maxDimiliki) * 300;

            const bar1 = document.createElement('div');
            bar1.classList.add('bar', 'bar1');
            bar1.style.width = `${bar1Width}px`;

            const bar2 = document.createElement('div');
            bar2.classList.add('bar', 'bar2');
            bar2.style.width = `${bar2Width}px`;

            barWrapper.appendChild(bar1);
            barWrapper.appendChild(bar2);
            barContainer.appendChild(label);
            barContainer.appendChild(barWrapper);

            graphContainer.appendChild(barContainer);
        });
</script>

@endsection