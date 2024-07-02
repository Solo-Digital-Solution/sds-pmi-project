@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-center_focus_strong"></i>
            </div>
            <div class="page-title">
                <h5>View Form Kejadian</h5>
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
                    <i class="icon-arrow-left-thick"></i> Kembali
                </a>
            </div>
            <div class="card">
                <div class="card-header" style="font-weight: bold;">Kejadian Bencana</div>
                <div class="card-body">
                    @foreach ($kejadian as $k)
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="nama_kejadian" class="col-sm-3 col-form-label">Nama Kejadian <span style="color: red;">*</span> </label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="nama_kejadian" name="nama_kejadian" value="{{ $k->nama_kejadian }}" placeholder="" disabled>
                        </div>
                    </div>

                    {{-- <p>{{ dd($k) }}</p> --}}

                    <div class="form-group row">
                        <label for="waktu_kejadian" class="col-sm-3 col-form-label">
                            Tanggal Kejadian <span style="color: red;">*</span>
                        </label>
                        <div class="col-sm-3">
                            <input type="datetime-local" class="form-control"  id="waktu_kejadian" name="waktu_kejadian" value="{{ $k->waktu_kejadian }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="kecamatan-dd" class="col-sm-3 col-form-label">Kecamatan <span style="color: red;">*</span> </label>
                        @foreach ($kecamatans as $kecamatan)
                            @if ($kecamatan->id_kecamatan == $k->kecamatan)
                            <p>{{ $kecamatan->nama_kecamatan }}</p>
                            @endif
                        @endforeach
                    </div>

                    <div class="form-group row">
                        <label for="kelurahan-dd" class="col-sm-3 col-form-label">Kelurahan <span style="color: red;">*</span> </label>
                        <p>{{ $k->kelurahan }}</p>
                    </div>

                    <div class="form-group">
                        <label for="lokasi">
                            Lokasi Kejadian <span style="color: red;">*</span>
                        </label>
                        <textarea class="form-control" id="lokasi" name="lokasi" rows="3" readonly>{{ $k->lokasi }} </textarea>
                    </div>

                    <div class="form-group row">
                        <label for="latitude" class="col-sm-3 col-form-label">Latitude <span style="color: red;">*</span></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control"  id="latitude" name="latitude" placeholder="" value="{{ $k->latitude }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="longitude" class="col-sm-3 col-form-label">Longitude <span style="color: red;">*</span></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control"  id="longitude" name="longitude" placeholder="" value="{{ $k->longitude }}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dukungan_inter" class="col-sm-3 col-form-label">Apakah terdapat dukungan internasional? <span style="color: red;">*</span> </label>
                        <div class="input-group col-sm-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="dukungan_inter">Options</label>
                            </div>
                            <select class="custom-select" id="dukungan_inter" name="dukungan_inter" disabled>
                                <option value="">Choose..</option>
                                <option value="1" {{ $k->dukungan_inter == 1 ? 'selected' : ''}}>Ya</option>
                                <option value="0" {{ $k->dukungan_inter == 0 ? 'selected' : ''}}>Tidak</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gambaran_situasi">
                            Gambaran Umum Situasi <span style="color: red;">*</span>
                        </label>
                        <textarea class="form-control" id="gambaran_situasi" name="gambaran_situasi" rows="3" readonly >{{ $k->gambaran_situasi }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="akses_lokasi">
                            Gambaran Umum Akses Lokasi <span style="color: red;">*</span>
                        </label>
                        <textarea class="form-control" id="akses_lokasi" name="akses_lokasi" rows="3" readonly>{{ $k->akses_lokasi }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-sm-3 col-form-label">Status <span style="color: red;">*</span> </label>
                        <div class="input-group col-sm-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="status">Options</label>
                            </div>
                            <select class="custom-select" id="status" name="status" disabled>
                                <option value="Menunggu Validasi" {{ $k->status == "Menunggu Validasi" ? 'selected' : ''}}>Menunggu Validasi</option>
                                <option value="Invalid" {{ $k->status == "Invalid" ? 'selected' : '' }}>Invalid</option>
                                <option value="Aktif" {{ $k->status == "Aktif" ? 'selected' : '' }}>Aktif</option>
                                <option value="Selesai" {{ $k->status == "Selesai" ? 'selected' : '' }}>Selesai</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center w-100 py-3">
                        <a href="/kejadian">
                            <button type="" class="btn btn-primary btn-lg"><i class="icon-arrow-left-thick"></i>Kembali</button>
                        </a>
                    </div>

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
                                            var isSelected = value.nama_kelurahan == "{{ $k->kelurahan }}" ? 'selected' : '';
                                            $("#kelurahan-dd").append('<option value="' + value.nama_kelurahan + '" ' + isSelected + '>' + value.nama_kelurahan + '</option>');
                                        });

                                        // $.each(result.kelurahans, function (key, value) {
                                        //     var isSelected = value.nama_kelurahan == "{{ $k->kelurahan }}" ? 'selected' : '';
                                        //     $("#kelurahan-dd").append('<option value="' + value
                                        //         .nama_kelurahan + '" >' + value.nama_kelurahan + '</option>');
                                        // });
                                    }
                                });
                            });
                        });

                    </script>
                @endforeach
                </div> <!-- card-body close -->
            </div> <!-- card-close -->
        </div> <!-- col 12  close -->
</div> <!-- row gutters close -->


<!-- Row end -->
@endsection
