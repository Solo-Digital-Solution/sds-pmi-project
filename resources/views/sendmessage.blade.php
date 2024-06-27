<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send WhatsApp Message</title>
</head>
<body>
    <h1>Send WhatsApp Message</h1>
    <form action="/send" method="post" enctype="multipart/form-data">
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
</body>
</html>
