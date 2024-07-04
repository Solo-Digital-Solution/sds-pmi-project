@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Laporan Kejadian</h5>
                <ol class="breadcrumb" style="background-color: transparent; margin-left:0px; margin-bottom:0px">
                    <li class="breadcrumb-item" style="font-size:12pt"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" style="font-size:12pt">Laporan Kejadian</li>
                </ol>
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
            <div class="card-header">Laporan Kejadian</div>
            <div class="card-body">
                @can('adm')
                <div class="d-flex justify-content-start w-100">
                    <a href="{{ url('/tambah-kejadian')  }}"><button type="button" class="btn btn-primary btn-lg mr-auto"><i class="icon-plus2"></i> Tambah Laporan Kejadian</button></a>
                </div>
                @endcan
            </div>
            <div class="card-body">
                <table id="basicExample" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Kejadian</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Lokasi</th>
                            <th>Lihat Kontak</th>
                            <th>Lapsit</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kejadians as $kejadian )
                        <tr>
                            <td>{{ $kejadian['nama_kejadian'] }}</td>
                            <td>{{ $kejadian['waktu_kejadian'] }}</td>
                            <td>{{ $kejadian['status'] }}</td>
                            <td>{{ $kejadian['lokasi'] }}</td>
                            <td>
                                <a href="/kejadian/view-assessor/{{ $kejadian['id_kejadian'] }}" style="color: blue;">
                                    <button type="button" class="btn btn-info btn-rounded">Lihat Kontak <i class="icon-user2"></i></button>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('kejadian.view-lapsit', ['id_kejadian' => $kejadian['id_kejadian']]) }}" style="color: blue;">
                                    <button type="button" class="btn btn-success btn-rounded">Lihat Lapsit <i class="icon-document-text"></i></button>
                                </a>
                            </td>
                            <td>
                                <a href="/kejadian/view/{{ $kejadian['id_kejadian'] }}" style="color: blue;">
                                    <button type="button" class="btn btn-info btn-rounded mb-2">Lihat Detail <i class="icon-eye3"></i></button>
                                </a><br>
                                <a href="/kejadian/edit/{{ $kejadian['id_kejadian'] }}" style="color: green;">
                                    <button type="button" class="btn btn-warning btn-rounded mb-2">Edit <i class="icon-pencil4"></i></button>
                                </a><br>

                                @if($kejadian->status == 'Invalid')
                                <form action="{{ route('kejadian.destroy', $kejadian->id_kejadian) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary btn-rounded mb-2" onclick="return confirm('Are you sure you want to delete this kejadian?');">Delete <i class="icon-trash2"></i></button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Row ends -->

</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel" style="color: green;">Success</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: green;">
                {{ session('success') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel" style="color: red;">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="color: red;">
                {{ session('error') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Script to trigger modals -->
<script>
    $(document).ready(function() {
        @if(session('success'))
        $('#successModal').modal('show');
        @endif

        @if(session('error'))
        $('#errorModal').modal('show');
        @endif
    });
</script>

@endsection