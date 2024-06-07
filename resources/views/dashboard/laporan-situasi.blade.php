@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Laporan Situasi</h5>
                <h6 class="sub-heading">Selamat datang di Sistem Penanggulangan Bencana PMI Solo</h6>
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
            <div class="card-header">Laporan Situasi</div>
            <div class="card-body">
                <div class="d-flex justify-content-start w-100">
                    <a href="{{ url('/tambah-lapsit')  }}"><button type="button" class="btn btn-primary btn-lg mr-auto"><i class="icon-plus2"></i> Tambah Lapsit</button></a> 
                </div>
            </div>
            <div class="card-body">
                <table id="basicExample" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Lapsit</th>
                            <th>Tanggal Pembuatan Lapsit</th>
                            <th>Berkas Lapsit</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>10.02.2022 18:38</td>
                            <td><a href="" style="color: blue;">Download</a></td>
                            <td><a href="{{ url('/detail-lapsit-1')  }}" style="color: blue;">Lihat Detail</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>10.02.2022 18:38</td>
                            <td><a href="" style="color: blue;">Download</a></td>
                            <td><a href="" style="color: blue;">Lihat Detail</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>10.02.2022 18:38</td>
                            <td><a href="" style="color: blue;">Download</a></td>
                            <td><a href="" style="color: blue;">Lihat Detail</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>10.02.2022 18:38</td>
                            <td><a href="" style="color: blue;">Download</a></td>
                            <td><a href="" style="color: blue;">Lihat Detail</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>10.02.2022 18:38</td>
                            <td><a href="" style="color: blue;">Download</a></td>
                            <td><a href="" style="color: blue;">Lihat Detail</a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>10.02.2022 18:38</td>
                            <td><a href="" style="color: blue;">Download</a></td>
                            <td><a href="" style="color: blue;">Lihat Detail</a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>10.02.2022 18:38</td>
                            <td><a href="" style="color: blue;">Download</a></td>
                            <td><a href="" style="color: blue;">Lihat Detail</a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>10.02.2022 18:38</td>
                            <td><a href="" style="color: blue;">Download</a></td>
                            <td><a href="" style="color: blue;">Lihat Detail</a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>10.02.2022 18:38</td>
                            <td><a href="" style="color: blue;">Download</a></td>
                            <td><a href="" style="color: blue;">Lihat Detail</a></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>10.02.2022 18:38</td>
                            <td><a href="" style="color: blue;">Download</a></td>
                            <td><a href="" style="color: blue;">Lihat Detail</a></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>10.02.2022 18:38</td>
                            <td><a href="" style="color: blue;">Download</a></td>
                            <td><a href="" style="color: blue;">Lihat Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Row ends -->

</div>
@endsection