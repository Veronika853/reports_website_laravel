<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Mood;
use App\Participation;
use App\Report;
use App\Student;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('reports.index', [
            'reports' => Report::all(),

        ]);
    }

    public function create()
    {
        return view('reports.create', [
            'students' => Student::all(),
            'lessons' => Lesson::all(),
            'participations' => Participation::all(),
            'moods' => Mood::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'student_id' => 'required',
            'lesson_id' => 'required',
            'progress' => '',
            'participation_id' => '',
            'mood_id' => '',
            'attendance' => '',
            'hw_result' => '',
        ]);
        $report = new Report([
            'student_id' => $data['student_id'],
            'lesson_id' => $data['lesson_id'],
            'progress' => $data['progress'],
            'participation_id' => $data['participation_id'],
            'mood_id' => $data['mood_id'],
            'attendance' => $data['attendance'],
            'hw_result' => $data['hw_result'],
        ]);
        $report->save();
        return redirect('/reports');
    }

    public function edit(Report $report)
    {
        return view('/reports/edit', [
            'report' => $report,
            'students' => Student::all(),
            'lessons' => Lesson::all(),
            'participations' => Participation::all(),
            'moods' => Mood::all(),
        ]);
    }

    public function update(Report $report)
    {
        $data = request()->validate([
            'student_id' => 'required',
            'lesson_id' => 'required',
            'progress' => '',
            'participation_id' => '',
            'mood_id' => '',
            'attendance' => '',
            'hw_result' => '',
        ]);

        $report->update($data);
        return redirect('/reports');
    }

    public function destroy($id)
    {
        $report = Report::find($id);
        $report->delete();
        return redirect('/reports');

    }

    public function delete(Request $request)
    {
        $ids = $request->get('report');
        if ($ids) {
            foreach ($ids as $id) {
                $report = Report::find($id);
                $report->delete();
            }
        }
        return redirect('/reports');
    }

    public function export(Request $request)
    {
        $headers = array("Имя", "Фамилия", "Урок", "Тема", "Усвоение", "Присутствие", "Настроение", "Активность", "ДЗ");
        $ids = $request->get('report');

        if ($ids) {
            $data = [];
            foreach ($ids as $id) {
                $report = Report::find($id);
                $data[] = [
                    'name' => $report->student->name,
                    'fname' => $report->student->fname,
                    'number' => $report->lesson->number,
                    'theme' => $report->lesson->subject,
                    'progress' => $report->progress,
                    'attendance' => $report->attendance,
                    'mood' => $report->mood->name,
                    'participation' => $report->participation->name,
                    'hw_result' => $report->hw_result,
                ];

            }
        }

        $fh = fopen("file.csv", "w");

        fputcsv($fh, $headers);
        foreach ($data as $field) {
            fputcsv($fh, $field);
        }
        fclose($fh);

        return response()->download('file.csv', 'отчёт.csv');
    }

}
