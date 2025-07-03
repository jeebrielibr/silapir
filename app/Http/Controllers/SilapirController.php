<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Aspirasi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class SilapirController extends Controller
{
    // LAPORAN
    public function showLaporanForm()
    {
        return view('formLaporan');
    }

    public function storeLaporan(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'nim' => 'required|numeric|digits:10',
            'kategori' => 'required|in:fasilitas,jaringan_wifi,kekerasan_bullying',
            'detail_laporan' => 'required|string|min:10',
            'bukti_laporan' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:10240'
        ]);

        $laporan = new Laporan();
        $laporan->nama_lengkap = $validated['nama_lengkap'];
        $laporan->nim = $validated['nim'];
        $laporan->kategori = $validated['kategori'];
        $laporan->detail_laporan = $validated['detail_laporan'];

        if ($request->hasFile('bukti_laporan')) {
            $path = $request->file('bukti_laporan')->move(public_path('bukti_laporan'), uniqid().'_'.$request->file('bukti_laporan')->getClientOriginalName());
            $laporan->bukti_path = 'bukti_laporan/' . basename($path);
        }

        //dd(\DB::connection()->getDatabaseName());

        $laporan->save();

        return redirect('/')->with('success', 'Laporan berhasil dikirim!');
    }

    // ASPIRASI
    public function showAspirasiForm()
    {
        return view('formAspirasi');
    }

    public function storeAspirasi(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'nim' => 'required|numeric|digits:10',
            'kategori' => 'required|in:fasilitas_kampus,kegiatan_mahasiswa,pengembangan_akademik',
            'detail_aspirasi' => 'required|string|min:10'
        ]);

        Aspirasi::create($validated);

        return redirect('/')->with('success', 'Aspirasi berhasil dikirim!');
    }

    public function index()
    {
        $totalLaporan = \App\Models\Laporan::count();
        $totalAspirasi = \App\Models\Aspirasi::count();
        $laporan = \App\Models\Laporan::all();
        $aspirasi = \App\Models\Aspirasi::all();
        return view('dashboard', compact('totalLaporan', 'totalAspirasi', 'laporan', 'aspirasi'));
    }
}

