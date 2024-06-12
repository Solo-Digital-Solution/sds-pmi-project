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
@endsection

@section('content')
<!-- Row start -->
<div class="row gutters">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="font-weight: bold;">Kejadian Bencana</div>
            <div class="card-body">

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Nama Kejadian <span style="color: red;">*</span> </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">
                        Tanggal Kejadian <span style="color: red;">*</span>
                    </label>
                    <div class="col-sm-3">
                        <input type="datetime-local" class="form-control" id="colFormLabel" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Kecamatan <span style="color: red;">*</span> </label>
                    <div class="input-group col-sm-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">Jebres</option>
                            <option value="2">Laweyan</option>
                            <option value="3">Pasar Kliwon</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Kelurahan <span style="color: red;">*</span> </label>
                    <div class="input-group col-sm-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">Kelurahan 1</option>
                            <option value="2">Kelurahan 2</option>
                            <option value="3">Kelurahan 3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">
                        Lokasi Kejadian <span style="color: red;">*</span>
                    </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Latitude <span style="color: red;">*</span></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Longitude <span style="color: red;">*</span></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Apakah terdapat dukungan internasional? <span style="color: red;">*</span> </label>
                    <div class="input-group col-sm-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">Ya</option>
                            <option value="2">Tidak</option>
                        </select>
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
                        Gambaran Umum Akses Lokasi <span style="color: red;">*</span>
                    </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Status <span style="color: red;">*</span> </label>
                    <div class="input-group col-sm-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">Aktif</option>
                            <option value="2">Selesai</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="col-sm-12">
        <div class="">
            <div class="">

                <img src="{{ url('img/reCAPTCHA.png') }}" alt="My Image">

                <div class="d-flex justify-content-center w-100 py-3">
                    <a href="#">
                        <button type="button" class="btn btn-primary btn-lg"><i class="icon-location-arrow"></i>Buat Kejadian</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->
@endsection
