@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-primary">Список приютов:</h2>
                            </div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Наименование</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($shelters as $shelter)
                                        <tr>
                                            <td>
                                                <a href="{{ route('home.shelter', $shelter->id) }}">
                                                    {{ $shelter->name }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
