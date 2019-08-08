@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/reports/{{$report->id}}" method="post">
            @method('patch')
            @csrf

            <div>
                <label for="studentId" class="col-md-4 col-form-label">Ученик</label>
                <select name="student_id" id="studentId">
                    <option value="">Выберите ученика</option>
                    @foreach($students as $student)
                        <option value="{{$student->id}}" @if($student->id == $report->student->id) selected="selected" @endif>{{$student->name}} {{$student->fname}}</option>
                    @endforeach
                </select>

                @error('studentId')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div>
                <label for="lessonId" class="col-md-4 col-form-label">Урок</label>
                <select name="lesson_id" id="lessonId">
                    <option value="">Выберите ученика</option>
                    @foreach($lessons as $lesson)
                        <option value="{{$lesson->id}}" @if($lesson->id == $report->lesson->id) selected="selected" @endif>{{$lesson->subject}}</option>
                    @endforeach
                </select>

                @error('lessonId')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <label for="progress" class="col-md-4 col-form-label">Усвоение материала</label>
            <textarea id="progress"
                      name="progress"
                      class="form-control @error('progress') is-invalid @enderror"
                      name="progress"
                      autocomplete="name" autofocus>{{$report->progress}}
                </textarea>
            @error('progress')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

            <div>
                <label for="participationId" class="col-md-4 col-form-label">Активность</label>
                <select name="participation_id" id="participationId">
                    <option value="">Выберите активность</option>
                    @foreach($participations as $participation)
                        <option value="{{$participation->id}}" @if($participation == $report->participation) selected="selected" @endif>{{$participation->name}}</option>
                    @endforeach
                </select>

                @error('participationId')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div>
                <label for="moodId" class="col-md-4 col-form-label">Настроение</label>
                <select name="mood_id" id="moodId">
                    <option value="">Выберите настроение</option>
                    @foreach($moods as $mood)
                        <option value="{{$mood->id}}" @if($mood == $report->mood) selected="selected" @endif>{{$mood->name}}</option>
                    @endforeach
                </select>

                @error('moodId')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div>
                <label for="attendance" class="col-md-4 col-form-label">Присутствие</label>
                <select name="attendance" id="attendance">
                    <option value="">Выберите присутствие</option>
                    <option value="0" @if(!$report->attendance) selected="selected"@endif>{{"Нет"}}</option>
                    <option value="1" @if($report->attendance) selected="selected"@endif>{{"Да"}}</option>
                </select>

                @error('attendance')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <label for="hw_result" class="col-md-4 col-form-label">Выполнение ДЗ</label>
            <input id="hwResult"
                   type="number"
                   step="0.01"
                   name="hw_result"
                   class="form-control @error('hw_result') is-invalid @enderror"
                   name="hw_result"
                   value="{{ old('hw_result') ?? $report->hw_result}}"
                   autocomplete="name" autofocus>

            @error('hw_result')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror


            <div class="pt-4">
                <button class="btn btn-primary">Изменить ученика</button>
            </div>


        </form>
        <div class="pt-4">
            <a href="/students/{{$report->id}}/delete"><button class="btn btn-primary">Удалить</button></a>
        </div>
    </div>
@endsection
