<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor Kinerja - {{ $library->nama_perpustakaan }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <a href="{{ route('home') }}" class="btn btn-outline-secondary mb-3">&larr; Kembali Cari Sekolah</a>

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white p-4">
                        <h4 class="mb-0">Formulir Laporan Kinerja</h4>
                        <small>Silakan isi data terbaru untuk tahun ini.</small>
                    </div>
                    
                    <div class="card-body p-4">
                        <div class="alert alert-info">
                            <strong>Instansi:</strong> {{ $library->nama_perpustakaan }} <br>
                            <strong>Jenis:</strong> {{ $library->jenis_instansi }}
                        </div>

                        <form action="#" method="POST">
                            @csrf
                            
                            <h5 class="mt-4 mb-3 text-primary">A. Data Pelapor</h5>
                            <div class="mb-3">
                                <label class="form-label">Nama Pengisi Data</label>
                                <input type="text" name="pengisi_data" class="form-control" required placeholder="Nama Lengkap Operator/Kepala Perpus">
                            </div>

                            <hr>

                            <h5 class="mt-4 mb-3 text-primary">B. Indikator Kinerja</h5>
                            
                            <div class="mb-3">
                                <label class="form-label">1. Berapa jumlah pengunjung perpustakaan bulan ini?</label>
                                <input type="number" name="jumlah_pengunjung" class="form-control" placeholder="0">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">2. Berapa jumlah buku yang dipinjam bulan ini?</label>
                                <input type="number" name="jumlah_peminjaman" class="form-control" placeholder="0">
                            </div>

                            <div class="d-grid gap-2 mt-5">
                                <button type="submit" class="btn btn-primary btn-lg">Kirim Laporan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>