<!DOCTYPE html>
<html>
<head>
    <title>Daftar Ucapan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Daftar Ucapan untuk Untuk Admin🤭</h1>
        <ul>
            @foreach ($ucapans as $ucapan)
                <li>
                    <strong>{{ $ucapan->nama }}</strong> ({{ $ucapan->tanggal_lahir }}):
                    <p id="pesanPenerima">{{ $ucapan->pesan }}</p>
                </li>
            @endforeach
        </ul>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
