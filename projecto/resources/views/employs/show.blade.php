@extends('employs.layout')
@extends('layouts.app')
@section("name_str")Просмотр записи@endsection
@section('main_block')
    <div class="card">
        <div class="card-body ">
           <center> <h1>{{ $employ->first_name }} {{ $employ->last_name }}</h1>
            <b>Должность: {{$employ->position}} <br>
            Дата приема на работу: {{$employ->emp_date}} <br>
            Заработная плата: {{$employ->wage}} <br>
                <br> Начальник: {{$chief->first_name}} {{ $chief->last_name }} <br>
                Должность: {{$chief->position}}</b></center>
        </div>
    </div>
@endsection
