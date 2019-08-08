@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/lessons/{{$lesson->id}}" method="post">
            @method('patch')
            @csrf

            <label for="number" class="col-md-4 col-form-label">Номер</label>
            <input id="number"
                   type="number"
                   name="number"
                   class="form-control @error('number') is-invalid @enderror"
                   name="number"
                   value="{{ old('number') ?? $lesson->number}}"
                   autocomplete="name" autofocus>

            @error('number')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror


            <label for="subject" class="col-md-4 col-form-label">Тема</label>
            <input id="subject"
                   type="text"
                   name="subject"
                   class="form-control @error('subject') is-invalid @enderror"
                   name="subject"
                   value="{{ old('subject') ?? $lesson->subject}}"
                   autocomplete="name" autofocus>

            @error('subject')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

            <label for="date" class="col-md-4 col-form-label">Дата</label>
            <input type="date" name="date" id="date" value="{{ old('date') ?? $lesson->date}}">
            @error('date')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror



            <div class="pt-4">
                <button class="btn btn-primary">Изменить ученика</button>
            </div>


        </form>
        <div class="pt-4">
            <a href="/lessons/{{$lesson->id}}/delete"><button class="btn btn-primary">Удалить</button></a>
        </div>
    </div>
@endsection
