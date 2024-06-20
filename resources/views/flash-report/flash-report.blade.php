<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share to Instagram</title>
    <style>
        #capture {
            padding: 10px;
            background: #f5da55;
        }
        #shareBtn {
            margin-top: 10px;
            padding: 10px 20px;
            background: #0095f6;
            color: white;
            border: none;
            cursor: pointer;
        }
        #shareBtn:hover {
            background: #007bb5;
        }
    </style>
</head>
<body>
    <div id="capture">
        <h2>Share this to Instagram!</h2>
        <p>This content will be captured and shared.</p>
    </div>
    <button id="shareBtn">Share to Instagram</button>
    <canvas id="canvas" style="display: none;"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        document.getElementById('shareBtn').addEventListener('click', function() {
            html2canvas(document.getElementById('capture')).then(function(canvas) {
                document.body.appendChild(canvas);
                canvas.id = 'screenshotCanvas';
                let image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
                let link = document.createElement('a');
                link.download = 'instagram-share.png';
                link.href = image;
                link.click();
                // Cleanup: remove the canvas from the document after download
                document.body.removeChild(canvas);
            });
        });
    </script>
</body>
</html>
