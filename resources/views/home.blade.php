@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <p>
                        Здравствуйте, {{ Auth::user()->name }}!
                    </p>
                    <p>
                        Ваша роль в системе: Администратор
                    </p>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-primary" href="{{ route('directories.organizations') }}">Справочники системы</a>
                            <a class="btn btn-primary" href="{{ route('directories.organizations') }}">Реестр животных</a>
                            <a href="{{ route('home.shelters') }}" class="btn btn-primary my-3">Список приютов</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-primary" href="{{ route('directories.organizations') }}">Аналитика</a>
                            <a class="btn btn-primary" href="{{ route('directories.organizations') }}">Управление учетными записями</a>
                        </div>
                        <div class="col-md-6 text-left">
                            <a class="btn btn-secondary" href="{{ route('home.report') }}">Отчет по приютам</a>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-4">
                            <div class="alert alert-info">
                                <h4 class="font-weight-bold">Приютов в системе: </h4>
                                <div class="text-center display-3">
                                    13
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-4">
                            <div class="alert alert-info">
                                <h4 class="font-weight-bold">Животных в приютах: </h4>
                                <div class="text-center display-2">
                                    252
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
