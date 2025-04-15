<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Pastikan alias ini sudah ada di config/app.php

class LaporanController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Laporan Pegawai',
            'tanggal' => date('d-m-Y'),
            'pegawai' => [
                ['nama' => 'Andi', 'jabatan' => 'Manager'],
                ['nama' => 'Budi', 'jabatan' => 'Staff'],
            ]
        ];

        $pdf = Pdf::loadView('laporan.pegawai', $data);
        return $pdf->download('laporan-pegawai.pdf');
    }
}
