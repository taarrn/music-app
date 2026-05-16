<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Musik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background: linear-gradient(135deg, #f5f0e8 0%, #ede8df 50%, #f0ebe0 100%);
            color: #2d2d2d;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
        }
        .navbar-custom {
            background: linear-gradient(90deg, #e8e0d0, #f0ebe0);
            border-bottom: 2px solid #c9a96e;
            padding: 16px 30px;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }
        .navbar-brand-text {
            font-size: 1.4rem;
            font-weight: 800;
            background: linear-gradient(90deg, #c9a96e, #a0785a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero {
            text-align: center;
            padding: 60px 20px 40px;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: 900;
            background: linear-gradient(90deg, #c9a96e, #a0785a, #c9a96e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero p {
            color: #999;
            margin-top: 10px;
        }
        .section {
            margin-bottom: 60px;
        }
        .section-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 20px;
            padding-left: 15px;
            border-left: 4px solid #c9a96e;
            color: #a0785a;
        }
        .table {
            color: #2d2d2d;
            border-radius: 12px;
            overflow: hidden;
            --bs-table-bg: transparent;
            --bs-table-border-color: rgba(0,0,0,0.07);
            --bs-table-hover-bg: rgba(201,169,110,0.1);
            --bs-table-hover-color: #2d2d2d;
        }
        .table thead tr {
            background: linear-gradient(90deg, #c9a96e, #a0785a);
            color: #fff;
            font-weight: 700;
        }
        .table tbody tr {
            background-color: rgba(255,255,255,0.5);
            border-color: rgba(0,0,0,0.06);
            transition: all 0.2s;
        }
        .table tbody tr:hover {
            background-color: rgba(201,169,110,0.15);
            transform: scale(1.005);
        }
        .badge-genre {
            background: linear-gradient(90deg, #c9a96e, #a0785a);
            color: #fff;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
        }
        .card {
            background: linear-gradient(135deg, #faf6f0, #f5efe4);
            border: 1px solid rgba(201,169,110,0.3);
            border-radius: 16px;
            transition: all 0.3s;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .card:hover {
            border-color: #c9a96e;
            box-shadow: 0 8px 25px rgba(201,169,110,0.2);
            transform: translateY(-3px);
        }
        .card-header {
            background: linear-gradient(90deg, rgba(201,169,110,0.2), rgba(160,120,90,0.1));
            color: #a0785a;
            font-weight: 600;
            border-radius: 16px 16px 0 0 !important;
            border-bottom: 1px solid rgba(201,169,110,0.2);
        }
        .list-group-item {
            background-color: transparent;
            color: #555;
            border-color: rgba(0,0,0,0.05);
        }
        .list-group-item:hover {
            background-color: rgba(201,169,110,0.1);
            color: #2d2d2d;
        }
        .container { max-width: 1100px; }
    </style>
</head>
<body>

<nav class="navbar-custom d-flex align-items-center gap-2">
    <span style="font-size:1.5rem;">🎵</span>
    <span class="navbar-brand-text">MusicApp</span>
</nav>

<div class="hero">
    <h1>Aplikasi Musik</h1>
    <p>Temukan artis, album, dan lagu favoritmu</p>
</div>

<div class="container pb-5">

    <!-- ARTIS -->
    <div class="section">
        <div class="section-title">🎤 Daftar Artis</div>
        <table class="table table-hover">
            <thead>
                <tr><th>No</th><th>Nama</th><th>Genre</th><th>Negara</th></tr>
            </thead>
            <tbody>
                @foreach($artis as $i => $a)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td><strong>{{ $a->nama }}</strong></td>
                    <td><span class="badge-genre">{{ $a->genre }}</span></td>
                    <td>🇮🇩 {{ $a->negara }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- ALBUM -->
    <div class="section">
        <div class="section-title">💿 Daftar Album</div>
        <table class="table table-hover">
            <thead>
                <tr><th>No</th><th>Judul</th><th>Artis</th><th>Tahun</th></tr>
            </thead>
            <tbody>
                @foreach($album as $i => $al)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td><strong>{{ $al->judul }}</strong></td>
                    <td>{{ $al->artis->nama }}</td>
                    <td>{{ $al->tahun }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- LAGU -->
    <div class="section">
        <div class="section-title">🎵 Daftar Lagu</div>
        <table class="table table-hover">
            <thead>
                <tr><th>No</th><th>Judul</th><th>Artis</th><th>Album</th><th>Durasi</th></tr>
            </thead>
            <tbody>
                @foreach($lagu as $i => $l)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td><strong>{{ $l->judul }}</strong></td>
                    <td>{{ $l->artis->nama }}</td>
                    <td>{{ $l->album->judul }}</td>
                    <td>⏱ {{ $l->durasi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- PLAYLIST -->
    <div class="section">
        <div class="section-title">📋 Daftar Playlist</div>
        <div class="row">
            @foreach($playlist as $p)
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">🎧 {{ $p->nama }} <small class="text-secondary">— {{ $p->deskripsi }}</small></div>
                    <ul class="list-group list-group-flush">
                        @foreach($p->lagu as $l)
                        <li class="list-group-item">{{ $l->pivot->urutan }}. {{ $l->judul }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
</body>
</html>