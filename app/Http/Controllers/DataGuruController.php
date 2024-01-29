<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\DataGuru;

class DataGuruController extends Controller
{
    public function index()
    {
        $dataguru = Users::where('role', 2)->where('status', 1)->get();

        return view('admin.data-guru.index', compact('dataguru'));
    }

    public function show($id)
    {
        $dataguru = Users::find($id);

        return view('admin.data-guru.show', compact('dataguru'));
    }

    public function store(Request $request)
    {
        $save = new DataGuru;
        $save->users_id = $request->users_id;
        $save->nama = $request->nama;
        $save->email = $request->email;
        $save->no_tlp = $request->no_tlp;
        $save->alamat = $request->alamat;

        $save->save(); 
        return redirect()->back()->with('Success', 'Anda telah berhasil menambahkan guru baru!');
    }

    
    public function update(Request $request, $id)
    {

        Users::where('id', $id)->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('Success', 'Guru berhasil ditambakan!');
    }

    public function hapusGuru(Request $request, $id)
    {

        Users::where('id', $id)->update(['status' => 0]);

        return redirect()->back()->with('Success', 'Guru berhasil dihapus!');
    }

    public function tambahGuru()
    {
        $dataguru = Users::where('status', 0)->get();
        
        return view('admin.data-guru.tambah-guru', compact('dataguru'));
    }

    public function editDataGuru(Request $request, $id)
    {

        Users::where('id', $id)->update([    
            'name' => $request->name,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->back()->with('Success', 'Data berhasil diubah');
    }

    public function guru()
    {
        $user = auth()->id();
        $guru = Users::where('id',$user)->get();
        // dd($guru);
        return view('user.dataguru.index', compact('guru', 'user'));
    }
}
