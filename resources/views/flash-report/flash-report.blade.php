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
                <th colspan=2 style="background-color: #650103;color: white; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 300; text-align: center; height: 20px; width: 50px; font-size: 24px">infografis</th>
                <th style="background-color: #860200;"></th>

                <th rowspan="2" colspan="5" style="background-color: #EBF1F1; color: #ED292C; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 67px; white-space: nowrap; padding-top: 0; padding-bottom: 0; align-items: center; line-height: 1; vertical-align: bottom;">
                    KEJADIAN KEBAKARAN<br>
                    <span style="font-size: 54px; color: #000000;">SURAKARTA <p style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 39px; background-color: #1E1E1C; color: white; padding: 5px 10px;display: inline-block;">JAWA TENGAH</p></span>                    
                </th>
                    
                <th rowspan="2" colspan="3" style="background-color: #EBF1F1;align-item: right;padding-left: 100px;"><img src="https://www.starjogja.com/assets/2016/10/PMI.png" alt="Logo PMI" style="width: 280; padding: 0px 20px"></th>
            </tr>
            <tr>
                <th style="background-color: #860200;"></th>
                <th colspan="3" style="background-color: #860200;color: white; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 28px;white-space: nowrap; text-align=center">LAPORAN SITUASI</th>
            </tr>
        </thead>                           
 
		<tfoot>
			<td colspan="12" style="background-color: #860200;color: white; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; font-size: 14px;white-space: nowrap; padding-left: 2">Posko PMI Jawa Tengah</td>
		</tfoot>
 
		<tbody>
			<tr>
				<td colspan="5" rowspan="10"><div id="map"></div></td>
				<td colspan="4" rowspan="2" style="background-color: #650103;">
                    <div id="informasi">
                    Kejadian        : <span style="font-weight: 900">Kebakaran</span> <br>
                    Lokasi          : <span style="font-weight: 900">Surakarta</span> <br>
                    Waktu Kejadian  : <span style="font-weight: 900">Jumat, 28 Sept 2023 / Pukul 17:02</span> <br><br>
                    <span style="font-size: 14px"><span style="font-weight: 900; text-align:right">UPDATE</span> Senin, 08 Okt 2023 / 19:00 WIB</span><br><br>
                    </div>
                </td>
                <td colspan="3" style="background-color: #E91A20;"><span style="color: #FFFFFF; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 28px; padding: 5px 20px; display: inline-block; width:100%">JUMLAH LAYANAN PER KECAMATAN</span></td>
			</tr>

            <tr>
				<td colspan="3" rowspan="4">
                <div class="graph-container" id="graph-container">
                </td>
			</tr>
 
			<tr>
				<td colspan="4" style="background-color: #E91A20;"><span style="color: #FFFFFF; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 28px; padding: 5px 20px; display: inline-block; width: 100%;">DATA KORBAN SEMENTARA</span></td>

			</tr>

            <tr>
				<td rowspan="2"><i class="fa-solid fa-person-walking-dashed-line-arrow-right icon" style="color: #bc202d;"></i></td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap">MENGUNGSI</td>
				<td rowspan="2"><i class="fa-solid fa-tent-arrows-down icon" style="color: #bc202d;"></i></td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">PENGUNGSIAN</td>
			</tr>

            <tr>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">74.444 JIWA</td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">147 TITIK</td>
			</tr>

            <tr>
				<td rowspan="2"><i class="fa-solid fa-user-injured icon" style="color: #bc202d;"></i></td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">LUKA-LUKA</td>
				<td rowspan="2"><i class="fa-solid fa-house-crack icon" style="color: #bc202d;"></i></td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;"">RUMAH RUSAK</td>
                <td colspan="3" rowspan="6" style="
                border-right-width: 0px;
                padding-right: 0px;
                border-top-width: 0px;
                border-left-width: 0px;
                border-bottom-width: 0px;
                padding-left: 0px;
                padding-top: 0px;
                padding-bottom: 0px;
                "
             ><img src="https://tangerangkota.go.id/files/berita/29821siap-hadapi-bencana-pmi-kota-tangerang-gelar-simulasi-kebakaran-29821.jpeg" style="width: 100%"></td>
			</tr>

            <tr>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">10.679 JIWA</td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">5.000</td>
			</tr>

            <tr>
				<td colspan="4" rowspan="3" style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap; color:#bc202d;">KEBUTUHAN MENDESAK <br><span style="color: #000000">
                Makanan, Air Bersih, Obat, Family Kit, Hunian Darurat</span>
                </td>
			</tr>

            <tr>
                
			</tr>

            <tr>
			</tr>

            <tr>
				<td rowspan="3" style="writing-mode: vertical-rl; text-orientation: sideways; white-space: nowrap; text-align: center; font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800;">PELAYANAN PMI</td>
				<td style="width: 20px;height: 20px; text-align: center"><i class="fa-solid fa-droplet icon" style="color: #bc202d;"></i></td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">DISTRIBUSI AIR </br>BERSIH</br><span style="color:#bc202d;"></br>482.000 LT</span></td>
                <td style="width: 20px;height: 20px; text-align: center"><i class="fa-solid fa-kitchen-set icon" style="color: #bc202d;"></i></td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">FOOD ITEM</br><span style="color:#bc202d;"></br>482.000 PACK</span></td>
				<td colspan="4" style="background-color: #E91A20;"><span style="color: #FFFFFF; font-family: 'Bebas Neue', sans-serif; font-style: normal; font-weight: 300; font-size: 28px; padding: 5px 20px; display: inline-block; width: 100%;">PENERIMA MANFAAT</span></td>
			</tr>

            <tr>
				<td style="width: 20px;height: 40px; text-align: center"><i class="fa-solid fa-handshake-angle icon" style="color: #bc202d;"></i></td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">RELAWAN</br><span style="color:#bc202d;"></br>482.000 ORANG</span></td>
				<td style="width: 20px;height: 40px; text-align: center"><i class="fa-solid fa-user-doctor icon" style="color: #bc202d;"></i></td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">TENAGA</br>KESEHATAN</br><span style="color:#bc202d;"></br>482.000 ORANG</span></td>
                <td colspan="4" rowspan="2"><div class="chart-container">
                    <canvas id="genderChart" width="150" height="150"></canvas>
                </div></td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800;">Bank Mandiri<span style="color:#bc202d;"></br>070-00-0011601-7</span></br><span style="font-size: 10px"></br>a/n Palang Merah Indonesia</span></td>
                <td valign="top" style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800;">Bank BCA<span style="color:#bc202d;"></br>206.300668.8</span></br><span style="font-size: 10px"></br>a/n Kantor PMI Pusat</span></td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800;">Bank BRI<span style="color:#bc202d;"></br>070-00-0011601-7</span></br><span style="font-size: 10px"></br>a/n Palang Merah Indonesia</span></td>
			</tr>

            <tr>
				<td style="width: 20px;height: 40px; text-align: center"><i class="fa-solid fa-suitcase-medical icon" style="color: #bc202d;"></i></td>
				<td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">PERTOLONGAN</br>PERTAMA</br>DARURAT DAN</br>EVAKUASI</BR>BENCANA</td>
				<td style="width: 20px;height: 40px; text-align: center"><i class="fa-solid fa-tents icon" style="color: #bc202d;"></i></td>
                <td style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 800; white-space: nowrap;">HUNIAN DARURAT</td>
                <td colspan="3" style="font-family: 'Inter', sans-serif; font-style: normal; font-weight: 300; white-space: nowrap; color:#bc202d;font-size:18px"><span style="color:black">klik </span><span style="text-decoration: underline; font-weight:800">donasi.pmi.or.id</span><br><span style="color: black">your <span style="font-weight:800">small donation</span> is a <span style="font-weight:800">big opportunity</span> to us</span></td>
			</tr>
		</tbody>

	</table>
</div>
<div>
    <button onclick="downloadContentAsImage()">Download as Image</button>
</div>

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
</script>

<script>
    var map = L.map('map', {
        zoomControl: false // Menonaktifkan kontrol zoom
    }).setView([-7.535794762805024, 110.85483565143885], 12); // Inisialisasi peta dengan koordinat Mojosongo dan zoom level 12

    // Tambahkan layer peta dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Tambahkan marker di Mojosongo dengan tooltip dan pop-up
    var marker = L.marker([-7.535794762805024, 110.85483565143885]).addTo(map);
    marker.bindTooltip("Mojosongo").openTooltip();

    // Membuat permintaan geokode untuk mendapatkan informasi jalan
    var url = "https://nominatim.openstreetmap.org/reverse?format=json&lat=" + marker.getLatLng().lat + "&lon=" + marker.getLatLng().lng;
    fetch(url)
        .then(response => response.json())
        .then(data => {
            var address = data.display_name;
            marker.bindPopup("<b>Kejadian Kebakaran PLTSA Putri Cempo, Surakarta</b><br>Latitude: " + marker.getLatLng().lat.toFixed(6) + ", Longitude: " + marker.getLatLng().lng.toFixed(6) + "<br>" + address).openPopup();
        });
</script>

<script>
    // Data jumlah pria dan wanita
    var data = {
        labels: ['Pria', 'Wanita'],
        datasets: [{
            data: [37, 63], // Jumlah pria dan wanita
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