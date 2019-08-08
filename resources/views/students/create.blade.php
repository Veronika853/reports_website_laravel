@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/students" method="post">
            @csrf

            <label for="name" class="col-md-4 col-form-label">Имя</label>
            <input id="name"
                   type="text"
                   name="name"
                   class="form-control @error('name') is-invalid @enderror"
                   name="name"
                   value="{{ old('name')}}"
                   autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror


            <label for="fname" class="col-md-4 col-form-label">Фамилия</label>
            <input id="fname"
                   type="text"
                   name="fname"
                   class="form-control @error('fname') is-invalid @enderror"
                   name="fname"
                   value="{{ old('fname')}}"
                   autocomplete="name" autofocus>

            @error('fname')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror


            <div>
                <label for="group_id" class="col-md-4 col-form-label">Группа</label>
                <select name="group_id">
                    <option value="">Выберите группу</option>
                    @foreach($groups as $group)
                        <option value="{{$group->id}}">{{$group->name}}</option>
                    @endforeach
                </select>

                @error('group_id')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>


            <label for="uni_id" class="col-md-4 col-form-label">Желаемый университет</label>
            <select name="uni_id">
                <option value="">Выберите университет</option>
                @foreach($universities as $university)
                    <option value="{{$university->id}}">{{$university->name}}</option>
                @endforeach
            </select>
            @error('uni_id')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror


            <div>
                <label for="exp_res" class="col-md-4 col-form-label">Ожидаемый результат</label>
                <input id="exp_res"
                       type="text"
                       name="exp_res"
                       class="form-control @error('exp_res') is-invalid @enderror"
                       name="exp_res"
                       value="{{ old('exp_res')}}"
                       autocomplete="name" autofocus>
                @error('exp_res')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>


            <label for="misc" class="col-md-4 col-form-label">Другое</label>
            <textarea id="misc"
                      name="misc"
                      class="form-control @error('misc') is-invalid @enderror"
                      name="misc"
                      autocomplete="name" autofocus>
                </textarea>
            @error('misc')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror


            <div class="pt-4">
                <button class="btn btn-primary">Добавить ученика</button>
            </div>

        </form>
    </div>
@endsection
