@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Реестр животных</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table" id="pet-registry">
                                    <thead>
                                    <tr>
                                        <th scope="col">№ п/п</th>
                                        <th scope="col">Номер карточки</th>
                                        <th scope="col">Кличка</th>
                                        <th scope="col">Вид</th>
                                        <th scope="col">Пол</th>
                                        <th scope="col">Идентификационная метка</th>
                                        <th scope="col">Дата поступления в приют</th>
                                        <th scope="col">Социализация</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pets as $pet)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>
                                                <a href="{{ route('home.shelter.petCard', ['id' => 1, 'pet' => $pet->id]) }}">
                                                    {{ $pet->card_number }}
                                                </a>
                                            </td>
                                            <td>{{ $pet->name }}</td>
                                            <td>{{ $pet->type }}</td>
                                            <td>{{ $pet->sex }}</td>
                                            <td>{{ @$pet->info->identification_mark }}</td>
                                            <td>{{ @$pet->movements->arrived_date }}</td>
                                            <td>
                                                @if(@$pet->info->socialized == 1)
                                                    да
                                                @else
                                                    нет
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <script>

                                    $(document).ready( function () {
                                        $('#pet-registry').DataTable({
                                            paging: true
                                        });


                                        $('.edit-table').on('click', function () {
                                            $('#org-id').val($(this).data('id'));
                                            $('#org-name').val($(this).data('org'));
                                        });
                                    } );

                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
