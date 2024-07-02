@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-center_focus_strong"></i>
            </div>
            <div class="page-title">
                <h5>Form Kejadian</h5>
                <h6 class="sub-heading">Lengkapi formulir berikut untuk menambahkan kejadian baru.</h6>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="right-actions">
                <span class="last-login">Last Login: 5 minutes ago</span>
            </div>
        </div>
    </div>
</div>
<meta name="csrf-token" content="content">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<!-- Row start -->

<div class="row gutters">

        <div class="col-sm-12">
            <!-- Tombol Kembali ke Daftar Kejadian -->
            <div class="d-flex justify-content-start mb-3">
                <a href="{{ route('kejadian.index') }}" class="btn btn-primary">
                    <i class="icon-arrow-left-thick"></i> Cancel
                </a>
            </div>
            <div class="card">
                <div class="card-header" style="font-weight: bold;">Kejadian Bencana</div>
                <div class="card-body">
                    <form action="{{ route('addKejadian') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="nama_kejadian" class="col-sm-3 col-form-label">Nama Kejadian <span style="color: red;">*</span> </label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="nama_kejadian" name="nama_kejadian" placeholder="" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="waktu_kejadian" class="col-sm-3 col-form-label">
                            Tanggal Kejadian <span style="color: red;">*</span>
                        </label>
                        <div class="col-sm-3">
                            <input type="datetime-local" class="form-control"  id="waktu_kejadian" name="waktu_kejadian" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="kecamatan-dd" class="col-sm-3 col-form-label">Kecamatan <span style="color: red;">*</span> </label>
                        <div class="input-group col-sm-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="kecamatan-dd">Options</label>
                            </div>
                            <select class="form-control" id="kecamatan-dd" name="kecamatan" required>
                                <option selected>Choose...</option>
                                @foreach ($kecamatans as $data)
                                <option value="{{ $data->id_kecamatan }}">{{ $data->nama_kecamatan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="kelurahan-dd" class="col-sm-3 col-form-label">Kelurahan <span style="color: red;">*</span> </label>
                        <div class="input-group col-sm-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="kelurahan-dd">Options</label>
                            </div>
                            <select class="form-control" id="kelurahan-dd" name="kelurahan" required></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lokasi">
                            Lokasi Kejadian <span style="color: red;">*</span>
                        </label>
                        <textarea class="form-control" id="lokasi" name="lokasi" rows="3" required></textarea>
                    </div>

                    <div id="map" style="height:400px; width: 800px;" class="my-3"></div>


                    {{-- <div class="form-group">
                        <label for="address_address">Address</label>
                        <input type="text" id="address-input" name="lokasi" class="form-control map-input">
                        <input type="hidden" name="latitude" id="address-latitude" value="0" />
                        <input type="hidden" name="longitude" id="address-longitude" value="0" />
                    </div>
                    <div id="address-map-container" style="width:100%;height:400px; ">
                        <div style="width: 100%; height: 100%" id="address-map"></div>
                    </div> --}}

                    <div class="form-group row">
                        <label for="latitude" class="col-sm-3 col-form-label">Latitude <span style="color: red;">*</span></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control"  id="latitude" name="latitude" placeholder="" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="longitude" class="col-sm-3 col-form-label">Longitude <span style="color: red;">*</span></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control"  id="longitude" name="longitude" placeholder="" required>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="dukungan_inter" class="col-sm-3 col-form-label">Apakah terdapat dukungan internasional? <span style="color: red;">*</span> </label>
                        <div class="input-group col-sm-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="dukungan_inter">Options</label>
                            </div>
                            <select class="custom-select" id="dukungan_inter" name="dukungan_inter" required>
                                <option value="">Choose...</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gambaran_situasi">
                            Gambaran Umum Situasi <span style="color: red;">*</span>
                        </label>
                        <textarea class="form-control" id="gambaran_situasi" name="gambaran_situasi" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="akses_lokasi">
                            Gambaran Umum Akses Lokasi <span style="color: red;">*</span>
                        </label>
                        <textarea class="form-control" id="akses_lokasi" name="akses_lokasi" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-sm-3 col-form-label">Status <span style="color: red;">*</span> </label>
                        <div class="input-group col-sm-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="status">Options</label>
                            </div>
                            <select class="custom-select" id="status" name="status" required>
                                <option value="Menunggu Validasi">Menunggu Validasi</option>
                                <option value="Invalid">Invalid</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center w-100 py-3">
                        <a href="">
                            <button type="submit" class="btn btn-primary btn-lg"><i class="icon-location-arrow"></i>Buat Kejadian</button>
                        </a>
                    </div>
                </form>
                </div> <!-- card-body close -->
            </div> <!-- card-close -->
        </div> <!-- col 12  close -->
</div> <!-- row gutters close -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#kecamatan-dd').on('change', function () {
                var idKecamatan = this.value;
                $("#kelurahan-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-kelurahans')}}",
                    type: "POST",
                    data: {
                        id_kecamatan: idKecamatan,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#kelurahan-dd').html('<option value="">Choose...</option>');
                        $.each(result.kelurahans, function (key, value) {
                            $("#kelurahan-dd").append('<option value="' + value
                                .nama_kelurahan + '">' + value.nama_kelurahan + '</option>');
                        });
                    }
                });
            });
        });

    </script>
    <script>
        let map;
        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat:  -7.550676, lng: 110.828316 },
                zoom: 8,
                scrollwheel: true,
            });

            const uluru = { lat:  -7.550676, lng: 110.828316 };
            let marker = new google.maps.Marker({
                position: uluru,
                map: map,
                draggable: true
            });

            google.maps.event.addListener(marker,'position_changed',
                function (){
                    let lat = marker.position.lat()
                    let lng = marker.position.lng()
                    $('#latitude').val(lat)
                    $('#longitude').val(lng)
                })

            google.maps.event.addListener(map,'click',
            function (event){
                pos = event.latLng
                marker.setPosition(pos)
            })
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACJYwRCHm98FncXNZzVvac-F2WWA66czg&callback=initMap"
            type="text/javascript"></script>
<!-- Row end -->
@endsection
