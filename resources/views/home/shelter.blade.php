@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <a class="btn btn-primary" href="{{ route('home.shelters') }}">Назад</a>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-primary font-weight-bold">{{ $shelter->name }}</h2>
                            </div>
                            <div class="col-md-12">
                                <h4 class="text-secondary">Животные в приюте:</h4>

                                <table id="pets" class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Номер карточки</th>
                                        <th scope="col">Тип</th>
                                        <th scope="col">Кличка</th>
                                        <th scope="col">Пол</th>
                                        <th scope="col">Порода</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($petShelter as $ps)
                                            <tr>
                                                <td>
                                                    <a href="#">{{ $ps->pet->card_number }}</a>
                                                </td>
                                                <td>{{ $ps->pet->type }}</td>
                                                <td>{{ $ps->pet->name }}</td>
                                                <td>{{ $ps->pet->sex }}</td>
                                                <td>{{ $ps->pet->breed_name }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                            <script>

                                $(document).ready( function () {
                                    $('#pets').DataTable({
                                        paging: true
                                    });
                                });

                            </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
