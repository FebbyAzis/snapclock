<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalAbsensi;
use App\Models\Users;
use App\Models\Absensi;
use App\Models\DataGuru;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
    public function absenHarian()
    {
        $absenharian = JadwalAbsensi::orderBy('id', 'desc')->get();
        return view('admin.absensi-harian.index', compact('absenharian'));
    }

    public function createAbsen(Request $request)
    {
        $save = new JadwalAbsensi;
        $save->hari_tgl = $request->hari_tgl;
        $save->jam_masuk = $request->jam_masuk; 
        $save->jam_keluar = $request->jam_keluar;

        $save->save(); 
        return redirect()->back()->with('Success', 'Absensi harian telah ditambahkan!');
    }

    public function absenHarianGuru()
    {
        $user = auth()->id();
        $users = Users::where('id', $user)->where('status', 0)->first();
        // dd($users);
        $absenharian = JadwalAbsensi::orderBy('id', 'desc')->get();
        return view('user.absensi-harian.index', compact('absenharian', 'user', 'users'));
    }

    public function absenHarianGuruDetail(Request $request, $id)
    {
        $user = auth()->id();
        $absenharian = JadwalAbsensi::find($id);
        $now = Carbon::now();
        $absendetail = Absensi::where('jadwal_absensi_id', $id)->where('users_id', $user)->get();
        $users = Users::where('id', $user)->where('status', 1)->first();
        $tombol = Absensi::where('jadwal_absensi_id', $id)->where('users_id', $user)->first();
        $absensi = Absensi::where('users_id', $user)->whereDate('created_at', $now->toDateString())->first();
        $waktuAbsensi = Carbon::parse($absenharian->jam_masuk);
        $waktuJamKeluar = Carbon::parse($absenharian->jam_keluar);
        $waktuAbsensiBerakhir = $waktuAbsensi->copy()->addHour();
        if ($now->greaterThanOrEqualTo($waktuAbsensi) && $now->lessThan($waktuAbsensiBerakhir)) {
            // Memeriksa apakah user sudah melakukan absensi dalam 12 jam terakhir
            $absensiTerakhir = Absensi::where('users_id', $request->user()->id)
                ->where('created_at', '>=', Carbon::now()->subHours(3))
                ->first();

            if ($absensiTerakhir) {
                // User sudah melakukan absensi dalam 12 jam terakhir
                return view('user.absensi-harian.show', compact('absenharian', 'user', 'now', 'absendetail', 'absensi',
                'waktuAbsensi', 'waktuAbsensiBerakhir', 'waktuJamKeluar', 'tombol', 'users'))->with('tombolAktif', false);
            } else {
                // User belum melakukan absensi dalam 12 jam terakhir
                return view('user.absensi-harian.show', compact('absenharian', 'user', 'now', 'absendetail', 'absensi',
                'waktuAbsensi', 'waktuAbsensiBerakhir', 'waktuJamKeluar', 'tombol', 'users'))->with('tombolAktif', true);
            }
        } else {
            // Tombol absensi tidak aktif
            return view('user.absensi-harian.show', compact('absenharian', 'user', 'now', 'absendetail', 'absensi',
            'waktuAbsensi', 'waktuAbsensiBerakhir', 'waktuJamKeluar', 'tombol', 'users'))->with('tombolAktif', false);
        }

        return view('user.absensi-harian.show', compact('absenharian', 'user', 'now', 'absendetail', 'absensi',
        'waktuAbsensi', 'waktuAbsensiBerakhir', 'waktuJamKeluar', 'tombol', 'users'));
    }

    public function createAbsenGuru(Request $request)
    {
        $save = new Absensi;
        $save->jadwal_absensi_id = $request->jadwal_absensi_id;
        $save->users_id = $request->users_id;
        $save->jam_masuk = $request->jam_masuk; 
        $save->jam_keluar = $request->jam_keluar;
        $save->keterangan = $request->keterangan;

        $save->save(); 
        return redirect()->back()->with('Success', 'Terima Kasih, Anda telah melakukan absensi harian, saat ini absensi sedang tahap proses, harap kembali lagi saat jam absensi keluar untuk keluar dari absensi harian anda!');
    }

    public function keteranganKetidakhadiran(Request $request)
    {
        // $this->validate($request, [
        //     'jadwal_absensi_id' => 'required',
        //     'users_id' => 'required',
        //     'keterangan' => 'required',
        //     'surat_izin' => 'required',
        // ]);
        
        $file = $request->file('surat_izin');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'surat_izin';
        $file->move($tujuan_upload,$nama_file);

        // Absensi::create([
        //     'jadwal_absensi_id' => $request->jadwal_absensi_id,
        //     'users_id' => $request->users_id,
        //     'keterangan' => $request->keterangan,
        //     'surat_izin' => $nama_file,
        // ]);
        $save = new Absensi;
        $save->jadwal_absensi_id = $request->jadwal_absensi_id;
        $save->users_id = $request->users_id;
        $save->keterangan = $request->keterangan; 
        $save->surat_izin = $nama_file;

        $save->save(); 
        return redirect()->back()->with('Successs', 'Terima Kasih, Anda telah mengkonfirmasikan bahwa anda tidak dapat hadir hari ini.');
    }

    public function keluarAbsen($id)
    {
        $keluarAbsen = Absensi::find($id);
        $now = Carbon::now();
        // dd($data);
        Absensi::where('id', $id)->update(['keterangan' => 1, 'jam_keluar' => $now]);
        return redirect()->back()->with('Successs', 'Anda telah keluar dari absensi hari ini!');
    }

    public function absensiDetail($id)
    {
        $absen = JadwalAbsensi::find($id);
        $absenDetail = Absensi::where('jadwal_absensi_id', $id)->orderBy('id', 'desc')->get();
        return view('admin.absensi-harian.show', compact('absen', 'absenDetail'));
    }
}
