<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profil = Profil::all();
        return view('admin.profil.profil', compact('profil'));
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
        $validasi = Validator::make($request->all(), [
            'struktur_org' => 'required|mimes:pdf',
            'struktur_asm' => 'required|mimes:pdf'
        ]);

        if ($validasi->fails()) {
            return redirect()->back();
        }

        $document = $request->struktur_org;
        $struktur_org = time() . '.' . $document->getClientOriginalExtension();
        $request->struktur_org->move(public_path('storage/profil-pdf/'), $struktur_org);

        $documents = $request->struktur_asm;
        $struktur_asm = time() . '.' . $documents->getClientOriginalExtension();
        $request->struktur_asm->move(public_path('storage/profil-pdf/'), $struktur_asm);

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);
        dd($request->all());
        $profil->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
