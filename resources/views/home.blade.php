<!DOCTYPE html>
<html>
<head>
    <title>File Upload App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="fw-bold">📁 Sudahkah Anda Upload File Hari Ini?</h1>
        <a href="{{ route('file.form') }}" class="btn btn-primary mt-3">Upload File Baru</a>
    </div>

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Daftar File yang Telah Diupload</h5>
        </div>
        <div class="card-body">
            @if(count($files) > 0)
                <ul class="list-group">
                    @foreach($files as $file)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ basename($file) }}
                            <a href="{{ Storage::url($file) }}" class="btn btn-sm btn-outline-success" target="_blank">Lihat / Download</a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-muted">Belum ada file yang diupload.</p>
            @endif
        </div>
    </div>
</div>

</body>
</html>
