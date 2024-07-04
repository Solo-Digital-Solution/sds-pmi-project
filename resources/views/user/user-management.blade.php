@extends('layouts.layout')

@section('heading')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-icon">
                <i class="icon-laptop_windows"></i>
            </div>
            <div class="page-title">
                <h5>Manajemen Akun</h5>
                <ol class="breadcrumb" style="background-color: transparent; margin-left:0px; margin-bottom:0px">
                    <li class="breadcrumb-item" style="font-size:12pt"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" style="font-size:12pt">Manajemen Akun</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- UBAH UBAH DI BAGIAN SINI AJAA-->
{{-- @section('content')
<div class="row gutters">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Manajemen Akun</div>
            <div class="card-body">
                <div class="d-flex justify-content-start w-100">
                    <a href="{{ url('/tambah-akun')  }}"><button type="button" class="btn btn-primary btn-lg mr-auto"><i class="icon-plus2"></i> Tambah Akun</button></a>
                </div>
            </div>
            <div class="card-body">
                <table id="basicExample" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>ID Pegawai</th>
                            <th>Role</th>
                            <th>Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $us)
                        <tr>
                            <td>{{ $us->name }}</td>
                            <td>{{ $us->email }}</td>
                            <td>{{ $us->user_id }}</td>
                            <td>{{ $us->role_name}}</td>
                            <td>{{ $us->no_telp }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">Tidak ada data kejadian.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection --}}

@section('content')
<div class="row gutters">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">Manajemen Akun</div>
            <div class="card-body">
                <div class="d-flex justify-content-start w-100">
                    <a href="{{ url('/user-management/create') }}">
                        <button type="button" class="btn btn-primary btn-lg mr-auto">
                            <i class="icon-plus2"></i> Tambah Akun
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="basicExample" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>ID Pegawai</th>
                            <th>Role</th>
                            <th>Telepon</th>
                            <th>Kelurahan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $us)
                        <tr>
                            <td>{{ $us->name }}</td>
                            <td>{{ $us->email }}</td>
                            <td>{{ $us->user_id }}</td>
                            <td>
                                @foreach($us->roles as $role)
                                    <span class="badge badge-primary">{{ $role->role_name }}</span>
                                @endforeach
                            </td>

                            <td>{{ $us->no_telp }}</td>
                            <td>{{ $us->kelurahan }}</td>
                            <td>
                                <a href="{{ url('/user-management/' . $us->user_id . '/edit') }}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('/user-management/' . $us->user_id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus akun ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">Tidak ada data kejadian.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-smHYkd0EN3AZqQ3SDbs2Gpkp6AYBX8RVnpV4DAev4C8/6AYSt2+tstpLJ/9gVpy4" crossorigin="anonymous"></script>

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
