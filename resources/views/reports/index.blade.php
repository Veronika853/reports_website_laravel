@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/reports/create">Добавить отчёт</a>
        <div class="row">
            @if(!count($reports))
                Отчётов нет
            @else
                <form>
                    @csrf
                    <button type="submit" formaction="/reports/delete" formmethod="post">Удалить</button>
                    <button type="submit" formaction="/reports/export" formmethod="post">CSV</button>
                    <table class="table-bordered">
                        <tr>
                            <th></th>
                            <th>Ученик</th>
                            <th>Урок</th>
                            <th>Тема</th>
                            <th>Усвоение</th>
                            <th>Активность</th>
                            <th>Настроение</th>
                            <th>Присутствие</th>
                            <th>ДЗ</th>
                            <th colspan="2">Действия</th>
                        </tr>
                        @foreach($reports as $report)
                            <tr>
                                <td><input type="checkbox" value="{{$report->id ?? ""}}" name="report[]"></td>
                                <td>{{$report->student->name ?? ""}} {{$report->student->fname ?? ""}}</td>
                                <td>{{$report->lesson->number ?? ""}}</td>
                                <td>{{$report->lesson->subject ?? ""}}</td>
                                <td>{{$report->progress ?? ""}}</td>
                                <td>{{$report->participation->name ?? ""}}</td>
                                <td>{{$report->mood->name ?? ""}}</td>
                                <td>
                                    @if(!$report->attendance)
                                        Нет
                                    @else
                                        Да
                                    @endif
                                </td>
                                <td>{{$report->hw_result ?? ""}}</td>
                                <td>
                                    <a href="/reports/{{ $report->id }}/edit" class="edit_btn">Edit</a>
                                </td>
                                <td>
                                    <a href="/reports/{{ $report->id }}/delete" class="del_btn">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @endif
                    <form>
        </div>
    </div>
@endsection
