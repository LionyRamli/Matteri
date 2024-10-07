<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Database\QueryException; 
use App\Models\CompetenceMaterial;
use Illuminate\View\View;

class CompetenciesMaterialsController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel competence_material
        $competenciesMaterials = CompetenceMaterial::with('competence', 'material')->get();

        return view('relasi', compact('competenciesMaterials'));
    }
//     // public function store(Request $request)
//     // {
//     //     // Validasi request
//     //     $validatedData = $request->validate([
//     //         'id_materi' => 'required|exists:materials,id_materi',
//     //         'id_kompetensi' => 'required|exists:competencies,id_kompetensi', // Harus ada di tabel kompetensi
//     //     ]);

//     //     // Tambah data ke tabel materi
//     //     $materi = Materi::create([
//     //         'materi' => $validatedData['materi'],
//     //     ]);

//     //     // Ambil ID kompetensi dari request
//     //     $id_kompetensi = $validatedData['id_kompetensi'];

//     //     // Tambah data ke tabel kompetensi_materi
//     //     KompetensiMateri::create([
//     //         'id_materi' => $materi->id, // ID dari materi yang baru dibuat
//     //         'id_kompetensi' => $kompetensiId, // ID kompetensi dari request
//     //     ]);

//     //     return response()->json(['message' => 'Data berhasil ditambahkan ke materi dan kompetensi_materi']);
//     // }
//     public function index()
//     {
//     // Mengambil kompetensi beserta materinya
//     $kompetensiMateri = Competence::with('materi')->get();
    
//     // Cek apakah ada data yang diambil
//    // dd($kompetensiMateri); // Ini akan menampilkan isi dari variabel

//     // Passing data ke view
//     return view('relasi', compact('kompetensiMateri'));
}
