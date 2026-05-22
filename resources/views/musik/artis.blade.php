<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Artis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #f5f0e8 0%, #ede8df 50%, #f0ebe0 100%); }
        .navbar-custom { background: linear-gradient(90deg, #e8e0d0, #f0ebe0); border-bottom: 2px solid #c9a96e; padding: 16px 30px; }
        .navbar-brand-text { font-size: 1.4rem; font-weight: 800; background: linear-gradient(90deg, #c9a96e, #a0785a); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .btn-custom { background: linear-gradient(90deg, #c9a96e, #a0785a); color: #fff; border: none; border-radius: 20px; padding: 8px 20px; text-decoration: none; }
        .btn-custom:hover { opacity: 0.9; color: #fff; }
        .table thead tr { background: linear-gradient(90deg, #c9a96e, #a0785a); color: #fff; }
        .table tbody tr { background-color: rgba(255,255,255,0.5); }
        .table tbody tr:hover { background-color: rgba(201,169,110,0.1); }
        .badge-genre { background: linear-gradient(90deg, #c9a96e, #a0785a); color: #fff; padding: 4px 12px; border-radius: 20px; font-size: 0.75rem; }
        .input-group .form-control { border-radius: 20px 0 0 20px; border-color: #c9a96e; }
        .input-group .btn-custom { border-radius: 0 20px 20px 0; }
    </style>
</head>
<body>
<nav class="navbar-custom d-flex align-items-center gap-2 mb-4">
    <span>🎵</span>
    <span class="navbar-brand-text">MusicApp</span>
    <a href="/musik" class="ms-3 text-secondary" style="font-size:0.9rem;">← Kembali</a>
</nav>
<div class="container">
    <form action="/artis/search" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="keyword" class="form-control" placeholder="Cari artis atau genre..." value="{{ request('keyword') }}">
            <button class="btn btn-custom" type="submit">Cari</button>
        </div>
    </form>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 style="color:#a0785a; font-weight:700;">🎤 Kelola Artis</h3>
        <a href="/artis/create" class="btn-custom">+ Tambah Artis</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-hover rounded shadow-sm">
        <thead>
            <tr><th>No</th><th>Nama</th><th>Genre</th><th>Negara</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @foreach($artis as $i => $a)
            <tr>
                <td>{{ $i+1 }}</td>
                <td><strong>{{ $a->nama }}</strong></td>
                <td><span class="badge-genre">{{ $a->genre }}</span></td>
                <td>🇮🇩 {{ $a->negara }}</td>
                <td>
                    <a href="/artis/{{ $a->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <form action="/artis/{{ $a->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus artis ini?')" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>