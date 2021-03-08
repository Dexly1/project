@extends('employs.layout')
@extends('layouts.app')
@section("name_str")Сотрудники@endsection
@section("main_block")
    <center><h1>Сотрудники</h1></center>
    @if(count($employs))
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="get" action="{{route('employs.index')}}">
                        <select  id="c" name="c">
                            <option value="first_name">Имя
                            <option value="last_name">Фамилия
                            <option value="position">Должность
                            <option value="emp_date">Дата
                            <option value="wage">Зарплата
                        </select>
                        <div class="form-row">
                            <div class="form-group col-md-10">

                                <input type="text" class="form-control" id="s" name="s" placeholder="Поиск">
                            </div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary btn-block">Поиск</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th scope="col">Номер</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Должность</th>
                    <th scope="col">Дата</th>
                    <th scope="col">ЗП</th>
{{--                    <th scope="col">Начальник</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($employs as $emp)
                    <tr>
                        <th scope="row">{{$emp->id}}</th>
                        <td>{{$emp->first_name}}</td>
                        <td>{{$emp->last_name}}</td>
                        <td>{{$emp->position}}</td>
                        <td>{{$emp->emp_date}}</td>
                        <td>{{$emp->wage}}</td>
{{--                        <td>{{$emp->chief}}</td>--}}
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <example-component></example-component>
   @else
        <p>Ничего</p>
   @endif
@endsection


