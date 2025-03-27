<!DOCTYPE html>
<html>
<head>
    <title>Ucapan Spesial</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Kirimkan Ucapan Spesial</h1>
        <form id="ucapanForm">
            @csrf
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required placeholder="nama kamu"><br><br>

            <label for="tanggal_lahir">Tanggal Lahir:</label><br>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>

            <label for="pesan">Pesan Ucapan:untuk kak Nando😁</label><br>
            <textarea id="pesan" name="pesan" rows="4" cols="50" required placeholder="pesan ini hanya kamu dan aku yang tau, jadi jangan takut ya😁"></textarea><br><br>

            <div class="button-wrapper">
                <button type="submit">Kirim Ucapan</button>
                <div class="button-container">
                    <a href="/katakata">
                        <button type="button">Sudah nih</button>
                    </a>
                </div>
        </form>
    </div>

    <div id="popup" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); background-color:white; padding:20px; border:1px solid black;">
        <p id="popupMessage"></p>
        <button onclick="closePopup()">OK</button>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
