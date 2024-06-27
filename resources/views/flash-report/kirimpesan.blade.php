<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Pesan</title>
</head>
<body>
    <h1>KIRIM PESAN WA</h1>
    <form action="/kirim-pesan" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nowa">Masukan No WA (pisahkan dengan koma)</label><br>
            <textarea name="nowa" id="nowa"></textarea>
        </div>
        <div>
            <label for="pesan">Tuliskan Pesannya</label><br>
            <input type="text" name="pesan" id="pesan" />
        </div>
        <div>
            <label for="gambar">Kirim Gambar</label><br>
            <input type="file" name="gambar" id="gambar" />
        </div>
        <div>
            <input type="submit" name="submit" id="submit" value="Kirim Pesan" />
        </div>
    </form>
</body>
</html>
