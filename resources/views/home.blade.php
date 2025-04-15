<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard File Upload</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased min-h-screen">

    <div class="container mx-auto px-4 py-10">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">📁 Upload File Hari Ini?</h1>
            <div class="flex justify-center gap-4 mt-4">
                <a href="{{ route('file.form') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Upload File Baru</a>
                <a href="{{ url('/laporan-pdf') }}" target="_blank" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">Download Laporan Pegawai</a>
            </div>
        </div>

        <!-- Card -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="bg-blue-600 text-white px-6 py-3 text-lg font-semibold">
                Daftar File yang Telah Diupload
            </div>
            <div class="p-6">
                @if(count($files) > 0)
                    <ul class="space-y-3">
                        @foreach($files as $file)
                            <li class="flex justify-between items-center border border-gray-200 p-4 rounded-md hover:bg-gray-50 transition">
                                <span class="text-gray-800 font-medium">{{ basename($file) }}</span>
                                <a href="{{ Storage::url($file) }}" class="bg-emerald-500 text-white px-3 py-1 rounded hover:bg-emerald-600 transition" target="_blank">
                                    Lihat / Download
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-500">Belum ada file yang diupload.</p>
                @endif
            </div>
        </div>
    </div>

</body>
</html>
