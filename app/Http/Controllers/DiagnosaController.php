<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index()
    {
        return view('diagnosa.index');
    }

    public function diagnose(Request $request)
    {
        // Daftar gejala dan penyakit
        $penyakitGejala = [
            1 => [
                'nama' => 'CONTRACT ULCERS',
                'gejala' => [3, 16],
            ],
            2 => [
                'nama' => 'ABAES PARAFARINGEAL',
                'gejala' => [3, 19],
            ],
            3 => [
                'nama' => 'ABAES PERITONAILER',
                'gejala' => [1, 2, 7, 14, 16, 22],
            ],
            4 => [
                'nama' => 'BAROTITIS MEDIA',
                'gejala' => [2, 6],
            ],
            5 => [
                'nama' => 'DEVIASI SEPTUM',
                'gejala' => [1, 5, 6, 15, 25, 29],
            ],
            6 => [
                'nama' => 'FARINGITIS',
                'gejala' => [1, 3, 7, 13, 14],
            ],
            7 => [
                'nama' => 'KANKER LARING',
                'gejala' => [3, 4, 7, 13, 16, 23, 24],
            ],
            8 => [
                'nama' => 'KANKER LEHER DAN KEPALA',
                'gejala' => [3, 12, 15, 21, 30, 31],
            ],
            9 => [
                'nama' => 'KANKER LEHER METASTATIK',
                'gejala' => [12],
            ],
            10 => [
                'nama' => 'KANKER NASOFARING',
                'gejala' => [5, 15],
            ],
            11 => [
                'nama' => 'KANKER TONSIL',
                'gejala' => [7, 12],
            ],
            12 => [
                'nama' => 'LARINGITIS',
                'gejala' => [1, 3, 14, 19, 37],
            ],
            13 => [
                'nama' => 'NEURONITIS VESTIBULARIS',
                'gejala' => [10, 17],
            ],
            14 => [
                'nama' => 'OSTEOKLEROSIS',
                'gejala' => [20, 35],
            ],
            15 => [
                'nama' => 'OTITIS MEDIA AKUT',
                'gejala' => [1, 6, 10, 32],
            ],
            16 => [
                'nama' => 'MENIERE',
                'gejala' => [6, 10, 34, 36],
            ],
            17 => [
                'nama' => 'TONSILITIS',
                'gejala' => [1, 2, 3, 4, 7, 10],
            ],
            18 => [
                'nama' => 'TUMOR SYARAF PENDENGARAN',
                'gejala' => [2, 20, 38],
            ],
            19 => [
                'nama' => 'VERTIGO POSTULAR',
                'gejala' => [17],
            ],
            20 => [
                'nama' => 'SINUSITIS MAKSILARIS',
                'gejala' => [1, 2, 4, 5, 8, 9, 11, 28, 33],
            ],
            21 => [
                'nama' => 'SINUSITIS FRONTALIS',
                'gejala' => [1, 2, 4, 5, 8, 9, 11, 18],
            ],
            22 => [
                'nama' => 'SINUSITIS ETMODAILIS',
                'gejala' => [1, 2, 4, 5, 8, 9, 11, 18, 26, 27],
            ],
            23 => [
                'nama' => 'SINUSITIS SFENOIDALIS',
                'gejala' => [1, 2, 4, 5, 8, 9, 11, 12],
            ],
            24 => [
                'nama' => 'PERUT',
                'gejala' => [1, 2, 3, 4],
            ],
            // daftar gejala dan penyakit
        ];

        // Ambil gejala dari input form
        $gejalaPengguna = $request->input('gejala');

        // Lakukan proses diagnosis
        $diagnosa = [];
        foreach ($penyakitGejala as $penyakit => $dataPenyakit) {
            // Periksa apakah gejala penyakit terpenuhi
            $gejalaTerpenuhi = true;
            foreach ($dataPenyakit['gejala'] as $gejalaP) {
                if (!in_array($gejalaP, $gejalaPengguna)) {
                    $gejalaTerpenuhi = false;
                    break;
                }
            }

            // Jika gejala terpenuhi, tambahkan penyakit ke hasil diagnosa
            if ($gejalaTerpenuhi) {
                $diagnosa[] = $dataPenyakit['nama'];
            }
        }

        // Tampilkan hasil diagnosa ke view
        return view('diagnosa.hasil', compact('diagnosa'));
    }
}
