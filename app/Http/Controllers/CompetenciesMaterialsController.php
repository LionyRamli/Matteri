<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Database\QueryException; 
use App\Models\Competence;
use App\Models\Material;
use Illuminate\View\View;

class CompetenciesMaterialsController extends Controller
{
    public function index()
    {
    // Mengambil kompetensi beserta materinya
    $kompetensiMateri = Competence::with('materi')->get();
    
    // Cek apakah ada data yang diambil
    dd($kompetensiMateri); // Ini akan menampilkan isi dari variabel

    // Passing data ke view
    return view('relasi', compact('kompetensiMateri'));
}
}