<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Subject;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        return view('lessons.index', [
            'lessons' => Lesson::all(),

        ]);
    }

    public function create()
    {
        return view('lessons.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number' => 'required|max:255',
            'subject' => 'required|max:255',
            'date' => '',
        ]);
        $lesson = new Lesson([
            'number' => $data['number'],
            'subject' => $data['subject'],
            'date' => $data['date'],
        ]);
        $lesson->save();
        return redirect('/lessons');
    }

    public function edit(Lesson $lesson){
        return view('/lessons/edit', [
            'lesson' => $lesson,
        ] );
    }

    public function update(Lesson $lesson){
        $data = request()->validate([
            'number' => 'required',
            'subject' => 'required',
            'date' => '',
        ]);

        $lesson->update($data);
        return redirect('/lessons');
    }

    public function destroy($id){
        $lesson = Lesson::find($id);
        $lesson->delete();
        return redirect('/lessons');

    }

    public function delete(Request $request)
    {
        $ids = $request->get('lesson');
        if ($ids) {
            foreach ($ids as $id) {
                $lesson = Lesson::find($id);
                $lesson->delete();
            }
        }
        return redirect('/lessons');
    }
}
