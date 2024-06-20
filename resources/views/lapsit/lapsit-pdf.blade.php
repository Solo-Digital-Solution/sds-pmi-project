<!DOCTYPE html>
<html>
@foreach($laporans as $laporan)
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <h1>{{ $title }} ke- {{ $laporan->nama_laporan }}</h1>
    <p style="font-size:12px;">Tanggal generate laporan: {{ $date }}</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>

    <table class="table table-bordered">
        <tr>
            <th>Kebutuhan</th>
            <th>Hambatan</th>
        </tr>
        <tr>
            <td>{{ $laporan->kebutuhan }}</td>
            <td>{{ $laporan->hambatan }}</td>
        </tr>
    </table>

</body>
@endforeach
</html>