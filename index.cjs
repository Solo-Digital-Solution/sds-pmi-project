const express = require('express');
const multer = require('multer');
const { Client, LocalAuth, MessageMedia } = require('whatsapp-web.js');
const app = express();
const port = 4000;

const client = new Client({
    authStrategy: new LocalAuth(),
    puppeteer: {
        headless: false
    }
});

client.on('qr', (qr) => {
    console.log('QR RECEIVED', qr);
});

client.on('ready', () => {
    console.log('Client is ready!');
});

client.initialize();

app.use(express.json());

app.post('/send', (req, res) => {
    let numbers = req.body.numbers;
    let message = req.body.message;
    let filePath = req.body.file_path;
    let gambar = MessageMedia.fromFilePath(filePath);

    numbers.forEach(number => {
        client.sendMessage(number, gambar, { caption: message });
    });

    res.json({ status: "Messages sent successfully" });
});

app.listen(port, () => {
    console.log(`Node.js server listening on port ${port}`);
});