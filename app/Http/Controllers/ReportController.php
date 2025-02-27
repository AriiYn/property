<?php

namespace App\Http\Controllers;

use App\Models\Perumahan;
use App\Models\Report;
use App\Models\Blok;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        $reports = Report::with('blok','perumahan')->get();
        return view('admin.report.dashboard', compact('reports'));
    }

    // Show create form
    public function create()
    {
        $bloks = Blok::all(); // Ambil semua data blok
        $perumahans = Perumahan::all(); // Ambil semua data interior
        return view('admin.report.create', compact('bloks', 'perumahans'));
    }


    // Store a new Perumahan
    public function store(Request $request)
    {
        $request->validate([
            'id_perumahan' => 'required',
            'id_blok' => 'required',
            'nama_pembeli' => 'nullable|string',
            'nik' => 'required|numeric',
            'alamat' => 'nullable|string',
            'no_tlp' => 'nullable|string',
            'email' => 'nullable|string',
            'tgl_pesan' => 'nullable',
            'tgl_selesai' => 'nullable',
            'jumlah_dp' => 'nullable|string',
            'sisa_bayar' => 'nullable|string',
        ]);

        Report::create($request->all());
        return redirect()->route('admin.report')->with('success', 'Report berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $reports = Report::findOrFail($id); // Ambil data perumahan
        $perumahan = Perumahan::all(); // Ambil semua data blok untuk dropdown
        $bloks = Blok::all(); // Ambil semua data blok untuk dropdown
        
        return view('admin.report.edit', compact('perumahan', 'reports', 'bloks'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'id_perumahan' => 'required',
            'id_blok' => 'required',
            'nama_pembeli' => 'nullable|string',
            'nik' => 'required|numeric',
            'alamat' => 'nullable|string',
            'no_tlp' => 'nullable|string',
            'email' => 'nullable|string',
            'tgl_pesan' => 'nullable',
            'tgl_selesai' => 'nullable',
            'jumlah_dp' => 'nullable|string',
            'sisa_bayar' => 'nullable|string',
        ]);

        // Cari report berdasarkan ID
        $report = Report::findOrFail($id);
        $report->update($request->all()); 

        return redirect()->route('admin.report')->with('success', 'Data report berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Temukan data Report berdasarkan ID
        $report = Report::findOrFail($id); // Ganti $id jika Anda menggunakan kolom lain

        // Hapus data
        $report->delete();

        return redirect()->route('admin.report')->with('success', 'Data report berhasil dihapus.');
    }
}
