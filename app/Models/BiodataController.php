<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    // Tampilkan form awal
    public function showForm()
    {
            return view('biodataForm');
    }
    // Proses form saat dikirim
    public function processForm(Request $request)
    {
            $data = [
                    'NPM' => $request->input('NPM'),
                    'Nama' => $request->input('Nama'),
                    'Alamat' => $request->input('Alamat'),
                    'Program_Studi' => $request->input('Program_Studi'),
            ];
            return view('biodata', $data);
    }
}
