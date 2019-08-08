@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/lessons/create">Добавить занятие</a>
        <div class="row">
            @if(!count($lessons))
                Занятий нет
            @else
                <form>
                    @csrf
                    <button type="submit" formaction="/lessons/delete" formmethod="post">Удалить</button>
                    <table class="table-bordered">
                        <tr>
                            <th></th>
                            <th>Номер</th>
                            <th>Тема</th>
                            <th>Дата</th>
                            <th colspan="2">Действия</th>
                        </tr>
                        @foreach($lessons as $lesson)
                            <tr>
                                <td><input type="checkbox" value="{{$lesson->id}}" name="lesson[]"></td>
                                <td>{{$lesson->number}}</td>
                                <td>{{$lesson->subject}}</td>
                                <td>{{$lesson->date}}</td>
                                <td>
                                    <a href="/lessons/{{ $lesson->id }}/edit" class="edit_btn">Edit</a>
                                </td>
                                <td>
                                    <a href="/lessons/{{ $lesson->id }}/delete" class="del_btn">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @endif
                </form>
        </div>
    </div>
@endsection
