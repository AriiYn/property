<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Perumahan;
use App\Models\Question;
use App\Models\Blok;
use App\Models\Report;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     // Menampilkan form Dashboard Admin
     public function dashboard()
    {
        $blok = Blok::count();
        $question = Question::count();
        $perumahan = perumahan::count();
        $user = User::count();

        $soldOut = Perumahan::where('status', 'disable')->count();
        $tersedia = Perumahan::where('status', 'enable')->count();
 
        // Hitung persentase
        $persentaseSoldOut = $perumahan > 0 ? ($soldOut / $perumahan) * 100 : 0;
        $persentaseTersedia = $perumahan > 0 ? ($tersedia / $perumahan) * 100 : 0;

        // Ambil data total penjualan berdasarkan bulan
        $penjualanData = Report::selectRaw('MONTH(tgl_pesan) as month, SUM(jumlah_dp) as total_dp')
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        // Persiapkan data untuk chart
        $months = $penjualanData->pluck('month')->map(function($month) {
        return date('F', mktime(0, 0, 0, $month, 1)); // Mengubah bulan ke nama bulan
        });
        $totals = $penjualanData->pluck('total_dp');
        $totalDp = Report::sum('jumlah_dp');

        return view('admin.dashboard', compact('user', 'perumahan', 'question', 'blok', 'persentaseSoldOut', 'persentaseTersedia', 'soldOut', 'tersedia', 'months', 'totals', 'totalDp'));;
    }
}
