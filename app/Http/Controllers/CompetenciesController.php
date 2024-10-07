<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Database\QueryException; 
use App\Models\Competence;
use Illuminate\View\View;

class CompetenciesController extends Controller
{
    public function index(){
        return view('course');
    }
    public function create(){
        return view('create');
    }

    public function admin(){
        $competencies = Competence::all();
        return view('course', ['competencies' => $competencies]);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'kompetensi' => 'required'
            ]);

            $newCompetence = Competence::create($data);

            return redirect(route('course'))->with('success', 'Course data has been successfully added.');
        } catch (QueryException $e) {
            // Log the database error or handle it appropriately
            return redirect(route('course'))->with('error', 'A database error occurred while saving student data.');
        } catch (\Exception $e) {
            // Log other general errors or handle them appropriately
            return redirect(route('course'))->with('error', 'An error occurred while processing the request.');
        }
    }

    public function edit(Competence $competence){
        return view('edit', ['competence' => $competence]);
    }

    public function update(Competence $competence, Request $request){
        $data = $request->validate([
            'kompetensi' => 'required'
        ]);

        $competence->update($data);
        return redirect(route('course'))->with('success', 'Course Update Succesfully');
    }
    public function destroy(Competence $competence){
        $competence->delete();
        return redirect(route('course'))->with('success', 'Course Update Succesfully');
    }

}
