@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/students/create">Добавить ученика</a>
        <div class="row">
            @if(!count($students))
                Учеников нет
            @else
                <form>
                    @csrf
                    <button type="submit" formaction="/students/delete" formmethod="post">Удалить</button>
                    <table class="table-bordered">
                        <tr>
                            <th></th>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Группа</th>
                            <th>Университет</th>
                            <th>Ожидаемый результат</th>
                            <th>Другое</th>
                            <th colspan="2">Действия</th>
                        </tr>
                        @foreach($students as $student)
                            <tr>
                                <td><input type="checkbox" value="{{$student->id}}" name="student[]"></td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->fname}}</td>
                                <td>{{$student->group->name ?? ""}}</td>
                                <td>{{$student->uni->name ?? ""}}</td>
                                <td>{{$student->exp_res ?? ""}}</td>
                                <td>{{$student->misc ?? ""}}</td>
                                <td>
                                    <a href="/students/{{ $student->id }}/edit" class="edit_btn">Edit</a>
                                </td>
                                <td>
                                    <a href="/students/{{ $student->id }}/delete" class="del_btn">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @endif
                </form>
        </div>
    </div>
@endsection
