@extends('employs.layout')
@extends('layouts.app')
@section("name_str")Создание записи@endsection
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

            <form method="POST" action="{{ route('employs.store') }}">
                @csrf
                <div class="form-group">
                    <label for="emp-fname">Имя</label>
                    <input type="text" name="first_name"
                           value="{{ old('first_name') }}" class="form-control" id="emp-fname">
                </div>
                <div class="form-group">
                    <label for="emp-lname">Фамилия</label>
                    <input type="text" name="last_name"
                           value="{{ old('last_name') }}" class="form-control" id="emp-lname">
                </div>
                <div class="form-group">
                    <label for="emp-pos">Должность</label>
                    <input type="text" name="position"
                           value="{{ old('position') }}" class="form-control" id="emp-pos">
                </div>
                <div class="form-group">
                    <label for="emp-date">Дата</label>
                    <input type="text" name="emp_date"
                           value="{{ old('emp_date') }}" class="form-control" id="emp-date">
                </div>
                <div class="form-group">
                    <label for="emp-wage">Зарплата</label>
                    <input type="text" name="wage"
                           value="{{ old('wage') }}" class="form-control" id="emp-wage">
                </div>
                <div class="form-group">
                    <label for="emp-chief">ID начальника</label>
                    <input type="text" name="chief"
                           value="{{ old('chief') }}" class="form-control" id="emp-chief">
                </div>
                <button type="submit" class="btn btn-success">Добавить запись</button>
            </form>
        </div>
    </div>
@endsection
