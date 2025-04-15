<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Pegawai</title>
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            margin: 40px;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 5px;
        }

        .subtext {
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        th {
            background-color: #4A90E2;
            color: white;
            padding: 10px;
            text-align: left;
        }

        td {
            padding: 8px 10px;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .footer {
            text-align: right;
            font-size: 12px;
            color: #aaa;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <h2>{{ $title }}</h2>
    <div class="subtext">Dicetak pada: {{ $tanggal }}</div>

    <table>
        <thead>
            <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 45%;">Nama Pegawai</th>
                <th style="width: 50%;">Jabatan</th>
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

    <div class="footer">
        &copy; {{ date('Y') }} Laporan Pegawai - Aplikasi Internal
    </div>

</body>
</html>
