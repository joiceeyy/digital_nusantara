<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function kirimPesan(Request $request)
    {
        // Validasi sesuai ketentuan teknis:
        // - Nama tidak boleh kosong
        // - Email harus valid
        // - Pesan wajib diisi
        $request->validate([
            'nama'  => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
        ], [
            'nama.required'  => 'Nama tidak boleh kosong.',
            'email.required' => 'Email tidak boleh kosong.',
            'email.email'    => 'Email harus valid.',
            'pesan.required' => 'Pesan wajib diisi.',
        ]);

        return back()->with('success', 'Terima kasih! Pesan Anda telah berhasil terkirim.');
    }
}
