<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ini instansi
        $profil = Profil::first();
        return view('admin.profil.profil', compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('admin.profil.modal_tambah');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'struktur_org' => 'required|mimes:pdf',
            'struktur_asm' => 'required|mimes:pdf'
        ]);

        if ($validasi->fails()) {
            return redirect()->back();
        }

        $document = $request->struktur_org;
        $struktur_org = time() . '.' . $document->getClientOriginalExtension();
        $request->struktur_org->move(public_path('storage/profil-pdf/pdf-org/'), $struktur_org);

        $documents = $request->struktur_asm;
        $struktur_asm = time() . '.' . $documents->getClientOriginalExtension();
        $request->struktur_asm->move(public_path('storage/profil-pdf/pdf-asm/'), $struktur_asm);

        $profil = Profil::create([
            'sejarah' => $request->sejarah,
            'tujuan' => $request->tujuan,
            'tentang' => $request->tentang,
            'struktur_org' => $struktur_org,
            'struktur_asm' => $struktur_asm
        ]);
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
    // public function edit($id)
    // {
    //     $profil = Profil::findOrFail($id);
    //     return view('admin.profil.modal_edit', compact('profil'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);
        // logika kalau kosong data yang di upload
        if ($request->file('struktur_org') == null && $request->file('struktur_asm') == null) {
            $profil->update([
                'sejarah' => $request->sejarah,
                'tujuan' => $request->tujuan,
                'tentang' => $request->tentang,
            ]);
        }

        // ini logika kalau yang di update hanya file org
        elseif ($request->file('struktur_org') != null) {


            // Hapus FIle Lama
            $fileOrg = public_path('storage/profil-pdf/pdf-org') . $profil->struktur_org;
            if (file_exists($fileOrg)) {
                @unlink($fileOrg);
            }
            Storage::delete($fileOrg);

            // Ganti Dengan Data Baru

            $document = $request->struktur_org;
            $struktur_org = time() . '.' . $document->getClientOriginalExtension();
            $request->struktur_org->move(public_path('storage/profil-pdf/pdf-org'), $struktur_org);

            $profil->update([
                'sejarah' => $request->sejarah,
                'tujuan' => $request->tujuan,
                'tentang' => $request->tentang,
                'struktur_org' => $struktur_org
            ]);
        }

        // ini logika kalau yang diupdate hanya file asm
        elseif ($request->file('struktur_asm') != null) {
            // Hapus FIle Lama
            $fileAsm = public_path('storage/profil-pdf/pdf-asm') . $profil->struktur_asm;
            if (file_exists($fileAsm)) {
                @unlink($fileAsm);
            }
            Storage::delete($fileAsm);

            // Ganti Dengan Data Baru

            $documents = $request->struktur_asm;
            $struktur_asm = time() . '.' . $documents->getClientOriginalExtension();
            $request->struktur_asm->move(public_path('storage/profil-pdf/pdf-asm'), $struktur_asm);

            $profil->update([
                'sejarah' => $request->sejarah,
                'tujuan' => $request->tujuan,
                'tentang' => $request->tentang,
                'struktur_asm' => $struktur_asm,
            ]);
        }
        // else {

        //     // new pdf
        //     $document = $request->struktur_org;
        //     $struktur_org = time() . '.' . $document->getClientOriginalExtension();
        //     $request->struktur_org->move(public_path('storage/profil-pdf/pdf-org'), $struktur_org);

        //     $documents = $request->struktur_asm;
        //     $struktur_asm = time() . '.' . $documents->getClientOriginalExtension();
        //     $request->struktur_asm->move(public_path('storage/profil-pdf/pdf-asm'), $struktur_asm);

        //     $profil->update([
        //         'sejarah' => $request->sejarah,
        //         'tujuan' => $request->tujuan,
        //         'tentang' => $request->tentang,
        //         'struktur_org' => $request->srtruktur_org,
        //         'struktur_asm' => $request->struktur_asm
        //     ]);
        // }


        // if (($request->file('struktur_org') == null) || ($request->file('struktur_org') == null)) {
        //     $profil->update([
        //         'sejarah' => $request->sejarah,
        //         'tujuan' => $request->tujuan,
        //         'tentang' => $request->tentang,
        //     ]);
        // } else {
        //     // hapus pdf
        //     $fileOrg = public_path('storage/profil-pdf') . $profil->struktur_org;
        //     if (file_exists($fileOrg)) {
        //         @unlink($fileOrg);
        //     }
        //     Storage::delete($fileOrg);

        //     $fileAsm = public_path('storage/profil-pdf') . $profil->struktur_asm;
        //     if (file_exists($fileAsm)) {
        //         @unlink($fileAsm);
        //     }
        //     Storage::delete($fileAsm);

        //     // new pdf
        //     $document = $request->struktur_org;
        //     $struktur_org = time() . '.' . $document->getClientOriginalExtension();
        //     $request->struktur_org->move(public_path('storage/profil-pdf/'), $struktur_org);

        //     $documents = $request->struktur_asm;
        //     $struktur_asm = time() . '.' . $documents->getClientOriginalExtension();
        //     $request->struktur_asm->move(public_path('storage/profil-pdf/'), $struktur_asm);

        //     $profil->update([
        //         'sejarah' => $request->sejarah,
        //         'tujuan' => $request->tujuan,
        //         'tentang' => $request->tentang,
        //         'struktur_org' => $request->srtruktur_org,
        //         'struktur_asm' => $request->struktur_asm
        //     ]);
        // }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
