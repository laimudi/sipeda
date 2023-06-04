<?php

namespace App\Http\Controllers\Anggota;

use App\Models\User;
use App\Models\Pendaftar;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $anggota = $user->anggota;
        $pendaftar = Pendaftar::first();
        $daftar = Pendaftaran::first();
        return view('anggota.pendaftaran', compact('daftar', 'anggota', 'pendaftar', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gambar = $request->file('gambar');
        $gambar->store('pendaftaran-gambar', 'public');

        $daftar = Pendaftaran::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'penyakit' => $request->penyakit,
            'telepon_ortu' => $request->telepon_ortu,
            'gambar' => $gambar->hashName()
        ]);

        if ($daftar) {
            Session::flash('tambah', 'success');
            Session::flash('message', 'Anda berhasil mendaftar silahkan print formulir dan dibawa pada saat kegiatan berlangsung');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function cetakFormulir($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $daftar = Pendaftaran::findOrFail($id);
        $pdf = Pdf::loadView('anggota.cetak_pendaftaran', compact('daftar', 'pendaftar'));
        return $pdf->download('Formulir-Pendaftaran-OPN.pdf');
    }
}
