<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pelaporan Perpustakaan Lobar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container text-center mt-5">
        <h1 class="display-4 fw-bold text-primary">Perpus Lobar</h1>
        <p class="lead text-secondary">Cari perpustakaan sekolah/desa Anda untuk mengisi laporan.</p>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm p-4">
                    <form action="{{ route('home') }}" method="GET">
                        <div class="input-group input-group-lg">
                            <input type="text" name="cari" class="form-control" placeholder="Ketik nama sekolah... (Contoh: SDN 1)" value="{{ $keyword ?? '' }}">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(isset($libraries) && count($libraries) > 0)
    <div class="container mt-5 mb-5">
        <h5 class="mb-3 text-center">Hasil Pencarian:</h5>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="list-group">
                    @foreach($libraries as $lib)
                    <a href="{{ route('lapor.form', $lib->id) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">                        <div>
                            <h5 class="mb-1">{{ $lib->nama_perpustakaan }}</h5>
                            <small class="text-muted">{{ $lib->jenis_instansi }} - {{ $lib->alamat }}</small>
                        </div>
                        <span class="badge bg-success rounded-pill">Pilih</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @elseif($keyword)
    <div class="container mt-5 text-center text-muted">
        <p>Data sekolah tidak ditemukan.</p>
    </div>
    @endif

</body>
</html>