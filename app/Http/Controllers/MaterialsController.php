<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Database\QueryException; 
use App\Models\Material;
use App\Models\CompetenceMaterial;
use Illuminate\View\View;

class MaterialsController extends Controller
{
    public function index(){
        return view('course');
    }
    public function create(){
        return view('create');
    }

    public function admin(){
        $materials = Material::all();
        return view('course', ['materials' => $materials]);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'materi' => 'required'
            ]);

            $newMaterial = Material::create($data);
            
            if($newMaterial){
                $CompetenceMaterial = New CompetenceMaterial;
                $CompetenceMaterial->id_materi = $newMaterial->id_materi;
                $CompetenceMaterial->$request->id_materi;
                $CompetenceMaterial->save();
            }

            return redirect(route('course'))->with('success', 'Course data has been successfully added.');
        } catch (QueryException $e) {
            // Log the database error or handle it appropriately
            return redirect(route('course'))->with('error', 'A database error occurred while saving student data.');
        } catch (\Exception $e) {
            // Log other general errors or handle them appropriately
            return redirect(route('course'))->with('error', 'An error occurred while processing the request.');
        }
    }

    public function edit(Material $material){
        return view('edit', ['material' => $material]);
    }

    public function update(Material $material, Request $request){
        $data = $request->validate([
            'materi' => 'required'
        ]);

        $material->update($data);
        return redirect(route('course'))->with('success', 'Course Update Succesfully');
    }
    public function destroy(Material $material){
        $material->delete();
        return redirect(route('course'))->with('success', 'Course Update Succesfully');
    }

}
