<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Artis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #f5f0e8 0%, #ede8df 50%, #f0ebe0 100%); }
        .navbar-custom { background: linear-gradient(90deg, #e8e0d0, #f0ebe0); border-bottom: 2px solid #c9a96e; padding: 16px 30px; }
        .navbar-brand-text { font-size: 1.4rem; font-weight: 800; background: linear-gradient(90deg, #c9a96e, #a0785a); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .card { background: #faf6f0; border: 1px solid rgba(201,169,110,0.3); border-radius: 16px; }
        .btn-custom { background: linear-gradient(90deg, #c9a96e, #a0785a); color: #fff; border: none; border-radius: 20px; padding: 8px 20px; }
        .btn-custom:hover { opacity: 0.9; color: #fff; }
        .form-control:focus { border-color: #c9a96e; box-shadow: 0 0 0 0.2rem rgba(201,169,110,0.25); }
    </style>
</head>
<body>
<nav class="navbar-custom d-flex align-items-center gap-2 mb-4">
    <span>🎵</span>
    <span class="navbar-brand-text">MusicApp</span>
    <a href="/artis" class="ms-3 text-secondary" style="font-size:0.9rem;">← Kembali</a>
</nav>
<div class="container" style="max-width:500px;">
    <div class="card p-4 shadow-sm">
        <h4 style="color:#a0785a; font-weight:700;" class="mb-4">🎤 Tambah Artis</h4>
        <form action="/artis" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-bold">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama artis" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Genre</label>
                <input type="text" name="genre" class="form-control" placeholder="Genre musik" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Negara</label>
                <input type="text" name="negara" class="form-control" placeholder="Asal negara" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">Simpan</button>
        </form>
    </div>
</div>
</body>
</html>