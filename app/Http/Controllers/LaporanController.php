<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use DB;

class LaporanController extends Controller
{
    public function index()
    {
        $absen = Absensi::orderBy('id', 'desc')->get();
        $hadir = DB::table('absensi')->join('users', 'absensi.users_id', '=', 'users.id')->
        select('users.name', DB::raw('COUNT(*) as total'))->whereIn('absensi.keterangan', [1])
        ->groupBy('users.name')->get();
        $sakit = DB::table('absensi')->join('users', 'absensi.users_id', '=', 'users.id')->
        select('users.name', DB::raw('COUNT(*) as total'))->whereIn('absensi.keterangan', [2])
        ->groupBy('users.name')->get();
        $izin = DB::table('absensi')->join('users', 'absensi.users_id', '=', 'users.id')->
        select('users.name', DB::raw('COUNT(*) as total'))->whereIn('absensi.keterangan', [3])
        ->groupBy('users.name')->get();
        $alfa = DB::table('absensi')->join('users', 'absensi.users_id', '=', 'users.id')->
        select('users.name', DB::raw('COUNT(*) as total'))->whereIn('absensi.keterangan', [4])
        ->groupBy('users.name')->get();
        $cuti = DB::table('absensi')->join('users', 'absensi.users_id', '=', 'users.id')->
        select('users.name', DB::raw('COUNT(*) as total'))->whereIn('absensi.keterangan', [5])
        ->groupBy('users.name')->get();
        $totalhadir = Absensi::where('keterangan', 1)->count();
        $totalsakit = Absensi::where('keterangan', 2)->count();
        $totalizin = Absensi::where('keterangan', 3)->count();
        $totalalfa = Absensi::where('keterangan', 4)->count();
        $totalcuti = Absensi::where('keterangan', 5)->count();

        return view('admin.laporan.index', compact('absen', 'hadir', 'sakit', 'izin', 'alfa', 'cuti'
        , 'totalhadir', 'totalsakit', 'totalizin', 'totalalfa', 'totalcuti'));
    }
    

}
