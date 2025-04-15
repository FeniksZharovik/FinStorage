<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Pegawai</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            margin: 30px;
            color: #333;
        }
        h2 {
            text-align: center;
            margin-bottom: 5px;
            font-size: 20px;
            color: #2c3e50;
        }
        .tanggal {
            text-align: center;
            margin-bottom: 20px;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th {
            background-color: #3498db;
            color: white;
            font-weight: bold;
        }
        th, td {
            padding: 8px;
            border: 1px solid #999;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        footer {
            text-align: center;
            font-size: 10px;
            margin-top: 40px;
            color: #888;
        }
    </style>
</head>
<body>

    <h2>{{ $title }}</h2>
    <div class="tanggal">Tanggal Cetak: {{ $tanggal }}</div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $index => $p)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $p['nama'] }}</td>
                <td>{{ $p['jabatan'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <footer>
        &copy; {{ date('Y') }} Sistem Informasi Pegawai - Laporan Otomatis
    </footer>

</body>
</html>
