<?php

namespace App\Http\Controllers;

use App\Group;
use App\Student;
use App\Uni;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index', [
            'students' => Student::all(),

        ]);
    }

    public function create()
    {
        return view('students.create', [
            'groups' => Group::all(),
            'universities' => Uni::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'fname' => 'required|max:255',
            'group_id' => '',
            'uni_id' => '',
            'exp_res' => '',
            'misc' => '',
        ]);

        $student = new Student([
            'name' => $data['name'],
            'fname' => $data['fname'],
            'group_id' => $data['group_id'],
            'uni_id' => $data['uni_id'],
            'exp_res' => $data['exp_res'],
            'misc' => $data['misc']
        ]);
        $student->save();
        return redirect('/students');
    }

    public function edit(Student $student)
    {
        return view('/students/edit', [
            'student' => $student,
            'groups' => Group::all(),
            'universities' => Uni::all(),
        ]);
    }

    public function update(Student $student)
    {
        $data = request()->validate([
            'name' => 'required',
            'fname' => 'required',
            'group_id' => '',
            'uni_id' => '',
            'exp_res' => '',
            'misc' => ''
        ]);

        $student->update($data);
        return redirect('/students');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students');

    }

    public function delete(Request $request)
    {
        $ids = $request->get('student');
        if ($ids) {
            foreach ($ids as $id) {
                $student = Student::find($id);
                $student->delete();
            }
        }
        return redirect('/students');
    }

}
