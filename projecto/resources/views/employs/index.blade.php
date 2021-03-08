@extends('employs.layout')
@extends('layouts.app')
@section("name_str")Сотрудники@endsection
@section("main_block")
    <center><h1>Сотрудники</h1></center>
    @if(count($employs))
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb d-flex justify-content-center p-3">
                    <a class="btn btn-success" href="{{ route('employs.create') }}">Создать запись</a>
                </div>
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
                    <th></th>
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
                        <td class="table-buttons">
                            <a class="btn btn-primary" href="{{ route('employs.edit', $emp->id) }}">Изменить</a>
                            <a class="btn btn-info" href="{{ route('employs.show', $emp->id) }}">Просмотр</a>
                            <form method="POST" action="{{ route ('employs.destroy', $emp->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div>
            @if ($pag)
            {{$employs->links()}}
            @endif
        </div>
    @else
        <p>Ничего</p>
    @endif
@endsection


