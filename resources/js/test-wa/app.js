const express = require('express')
const expressLayouts = require('express-ejs-layouts')
const multer = require('multer')
const app = express()
const port = 4000

const storage = multer.diskStorage({
    destination: function (req, file, cb) {
        cb(null, './uploads')
    },
    filename: function (req, file, cb) {
        const uniqueSuffix = Date.now() + '-' + Math.round(Math.random() * 1E9)
        cb(null, file.fieldname + '-' + uniqueSuffix + ".jpg")
    }
})

const upload = multer({
    storage: storage
})

const {
    Client,
    LocalAuth,
    MessageMedia
} = require('whatsapp-web.js');

const client = new Client({
    authStrategy: new LocalAuth(),
    puppeteer: {
        headless: false
    }
});

client.on('qr', (qr) => {
    // Generate and scan this code with your phone
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

app.set('view engine', 'ejs');
app.use(expressLayouts);
app.use(express.urlencoded({
    extended: true
}))

app.get('/', function (req, res) {
    var locals = {
        layout: 'kirimpesan',
        title: 'Kirim Pesan',
        description: 'Kirim pesan wa',
        header: 'KIRIM PESAN WA'
    };
    res.render('kirimpesan', locals);
});

app.post('/kirim', upload.single('gambar'), (req, res) => {
    let number = req.body.nowa + "@c.us";
    let message = req.body.pesan;
    let gambar = MessageMedia.fromFilePath(req.file.path)

    client.sendMessage(number, gambar, {
        caption: message
    });

    //console.log(number);

    res.json()


})

app.listen(port, () => {
    console.log(`Example app listening on port ${port}`)
})