<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Grado;

class GradeController extends Controller
{
    //
    public function grades()
    {
        $grades = Grado::all();
        $typeUser = self::getDataBasic()['typeUser'];
        $nameView = self::getDataBasic()['name'] . ".grades";
        return
            view($nameView,
                compact('title', 'grades', 'typeUser'));

    }

    function create()
    {
        $crud = true;
        $grades = Grado::all();
        return
            view('grades.create', compact('crud', 'grades'));
    }

    public function store()
    {
        $data = request()->validate([
            'nombre' => 'required',
            'countCourses' => 'required|numeric|min:1|max:4'
        ], [
            'nombre.required' => 'El campo nombre es obligatorio',
            'countCourses.required' => 'Digite un número menor de 4',
            'countCourses.numeric' => 'El numero de grados bede ser un numero'
        ]);
        if (is_numeric($data['countCourses'])) {
            $grade = Grado::create([
                'nombre' => $data['nombre'],
            ]);

            $letter = ['A', 'B', 'C', 'D'];
            for ($i = 0; $i < $data['countCourses']; $i++) {
                $curso = Curso::create([
                    'nombre_curso' => "$letter[$i]",
                    'id_grado' => $grade->id
                ]);
            }
            return redirect()->back();
        }

    }

    public function edit(Grado $grade)
    {
        $crud = true;
        return view('grades.edit', ['grade' => $grade], compact('crud'));
    }

    public function show(Grado $grade)
    {
        $crud = true;
        return view('grades.show', compact('crud', 'grade'));
    }

    public function search()
    {
        $crud = true;
        $grades = Grado::all();
        return view('grades.search', compact('crud', 'grades'));
    }

    public function update(Grado $grade)
    {
        // User
        $data = request()->validate([
            'nombre' => 'required',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio'
        ]);
        $grade->update($data);

        return redirect()->route('grades.show', ['grades' => $grade]);
    }


    function destroy(Grado $grade)
    {
        $grade->delete();
        return redirect()->back();
    }
}
