<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrafikController extends Controller
{
   public function index()
   {
    $total_pendapatan = Tickets::select(DB::raw("CAST(SUM(totalHarga) as int) as total_pendapatan")) //query untuk mendapatkan total pendapatan perbulan
    ->GroupBy(DB::raw("Month(created_at)"))
    ->OrderBy("created_at")
    ->pluck('total_pendapatan');

    $bulan = Tickets::select(DB::raw("MONTHNAME(created_at) as bulan")) //query untuk mendapatkan bulan pada kolom created)at
    ->GroupBy(DB::raw("MONTHNAME(created_at)"))
    ->OrderBy("created_at")
    ->pluck('bulan');
    
    return view('pages.admin.grafik.index', [ 'total_pendapatan' => $total_pendapatan, 'bulan' => $bulan]);
   }
}
