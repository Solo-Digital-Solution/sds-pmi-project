const express = require('express');
const multer = require('multer');
const { Client, LocalAuth, MessageMedia } = require('whatsapp-web.js');
const path = require('path'); // Import module 'path' untuk penanganan path

const app = express();
const port = 4001;

const storage = multer.diskStorage({
    destination: function (req, file, cb) {
        cb(null, './uploads');
    },
    filename: function (req, file, cb) {
        const uniqueSuffix = Date.now() + '-' + Math.round(Math.random() * 1E9);
        cb(null, file.fieldname + '-' + uniqueSuffix + ".jpg");
    }
});

const upload = multer({ storage: storage });

const client = new Client({
    authStrategy: new LocalAuth(),
    puppeteer: { headless: false }
});

client.on('qr', (qr) => {
    console.log('QR RECEIVED', qr);
});

client.on('ready', () => {
    console.log('Client is ready!');
});

client.on('message', msg => {
    if (msg.body == '!ping') {
        msg.reply('pong');
    }
});

client.initialize();

app.post('/kirim', upload.single('gambar'), (req, res) => {
    if (!req.file) {
        return res.status(400).json({ error: 'No file uploaded' });
    }

    let numbers = req.body.nowa.split(',').map(num => num.trim() + "@c.us");
    let message = req.body.pesan;
    let gambarPath = path.join(__dirname, req.file.path); // Menggunakan path module untuk path yang benar
    let gambar = MessageMedia.fromFilePath(gambarPath);

    numbers.forEach(number => {
        client.sendMessage(number, gambar, { caption: message });
    });

    res.json({ status: "Pesan telah dikirim ke semua nomor" });
});

app.listen(port, () => {
    console.log(`WhatsApp server listening on port ${port}`);
});
