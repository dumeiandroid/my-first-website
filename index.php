<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pertama Saya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            margin: 0;
            padding: 50px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(255,255,255,0.1);
            padding: 40px;
            border-radius: 15px;
        }
        h1 { font-size: 2.5em; margin-bottom: 20px; }
        p { font-size: 1.2em; line-height: 1.6; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎉 Selamat Datang!</h1>
        <p>Ini adalah website pertama saya yang dibuat dengan Cloudflare Workers!</p>
        <p>Tanggal: <span id="tanggal"></span></p>
        <button onclick="ubahWarna()" style="padding: 10px 20px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer;">Ubah Warna</button>
    </div>

    <script>
        // Tampilkan tanggal hari ini
        document.getElementById('tanggal').textContent = new Date().toLocaleDateString('id-ID');
        
        // Fungsi ubah warna background
        function ubahWarna() {
            const warna = ['linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
                          'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)',
                          'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)',
                          'linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)'];
            const pilih = Math.floor(Math.random() * warna.length);
            document.body.style.background = warna[pilih];
        }
    </script>
</body>
</html>
