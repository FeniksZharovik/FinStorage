<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Pastikan alias ini sudah ada di config/app.php

class LaporanController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Laporan Data Pegawai',
            'tanggal' => date('d-m-Y'),
            'pegawai' => [
                ['nama' => 'Andi Saputra', 'jabatan' => 'Manager'],
                ['nama' => 'Budi Santoso', 'jabatan' => 'Staff'],
                ['nama' => 'Citra Ayu', 'jabatan' => 'HRD'],
                ['nama' => 'Dedi Kurniawan', 'jabatan' => 'Marketing'],
                ['nama' => 'Eka Rahayu', 'jabatan' => 'Keuangan'],
                ['nama' => 'Fahri Ramadhan', 'jabatan' => 'IT Support'],
                ['nama' => 'Gina Pratiwi', 'jabatan' => 'Supervisor'],
                ['nama' => 'Hana Rizky', 'jabatan' => 'Customer Service'],
                ['nama' => 'Irwan Hidayat', 'jabatan' => 'Admin'],
                ['nama' => 'Joko Tambunan', 'jabatan' => 'Direktur'],
            ]
        ];

        $pdf = Pdf::loadView('laporan.pegawai', $data);
        return $pdf->download('laporan-pegawai.pdf');
    }
}
