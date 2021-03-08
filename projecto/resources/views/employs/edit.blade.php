@extends('employs.layout')
@extends('layouts.app')
@section("name_str")Изменение записи@endsection
@section('main_block')
    <div class="row">
        <div class="col-lg-2 mx-auto p-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('employs.update', $employ->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="emp-fname">Имя</label>
                    <input type="text" name="first_name"
                           value="{{ $employ->first_name }}" class="form-control" id="emp-fname">
                </div>
                <div class="form-group">
                    <label for="emp-lname">Фамилия</label>
                    <input type="text" name="last_name"
                           value="{{ $employ->last_name }}" class="form-control" id="emp-lname">
                </div>
                <div class="form-group">
                    <label for="emp-pos">Должность</label>
                    <input type="text" name="position"
                           value="{{ $employ->position }}" class="form-control" id="emp-pos">
                </div>
                <div class="form-group">
                    <label for="emp-date">Дата</label>
                    <input type="text" name="emp_date"
                           value="{{ $employ->emp_date }}" class="form-control" id="emp-date">
                </div>
                <div class="form-group">
                    <label for="emp-wage">Зарплата</label>
                    <input type="text" name="wage"
                           value="{{ $employ->wage }}" class="form-control" id="emp-wage">
                </div>
                <div class="form-group">
                    <label for="emp-chief">ID начальника</label>
                    <input type="text" name="chief"
                           value="{{ $employ->chief }}" class="form-control" id="emp-chief">
                </div>
                <button type="submit" class="btn btn-success">Изменить запись</button>
            </form>
        </div>
    </div>
@endsection
