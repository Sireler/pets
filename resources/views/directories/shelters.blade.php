@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @include('directories.nav')

            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Справочник: ПРИЮТЫ</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <table id="table_org" class="table table-primary">
                            <thead>
                            <tr>
                                <th>Наименование</th>
                                <th>Подчинение</th>
                                <th>Адрес</th>
                                <th>Телефон</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($types as $type)
                                <tr>
                                    <td>{{ $type->name }}</td>
                                    <td>{{ $type->organization->name }}</td>
                                    <td>{{ $type->address }}</td>
                                    <td>{{ $type->phone }}</td>
                                    <td>
                                        <button class="edit-table btn mb-1"
                                                data-id="{{ $type->id }}"
                                                data-org="{{ $type->name }}"
                                                data-orgid="{{ $type->organization->id }}"
                                                data-address="{{ $type->address }}"
                                                data-phone="{{ $type->phone }}"
                                                data-toggle="modal"
                                                data-target="#exampleModal"
                                                href="#">
                                            Редактировать
                                        </button>
                                        <form method="POST" action="{{ route('directories.shelters.delete', $type->id) }}">
                                            @csrf
                                            <button class="btn">Удалить</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                            Создать
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(document).ready( function () {
            $('#table_org').DataTable({
                paging: true
            });

            $('.edit-table').on('click', function () {
                $('#org-id').val($(this).data('id'));
                $('#eshelter-name').val($(this).data('org'));
                $('#edit-select-org option[value=' + $(this).data('orgid') + ']').attr('selected', true);
                $('#org-address').val($(this).data('address'));
                $('#org-phone').val($(this).data('phone'));
            });
        } );

    </script>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Приюты</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form method="POST" action="{{ route('directories.shelters.update') }}">
                        @method('PUT')
                        @csrf
                        <input type="text" name="id" hidden id="org-id">

                        <div class="form-group">
                            <label for="shelter-name">Наименование</label>
                            <input name="name" type="text" class="form-control" id="eshelter-name" placeholder="Наименование">
                        </div>

                        <div class="form-group">
                            <label for="org-name">Управляющая организация</label>

                            <select id="edit-select-org" name="organization_id" class="form-control">
                                @foreach($organizations as $org)
                                    <option value="{{ $org->id }}">{{ $org->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="org-address">Адрес</label>
                            <input name="address" type="text" class="form-control" id="org-address" placeholder="Адрес">
                        </div>

                        <div class="form-group">
                            <label for="org-phone">Телефон</label>
                            <input name="phone" type="text" class="form-control" id="org-phone" placeholder="Телефон">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Приюты</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form method="POST" action="{{ route('directories.shelters.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="shelter-name">Наименование</label>
                            <input name="name" type="text" class="form-control" id="shelter-name" placeholder="Наименование">
                        </div>

                        <div class="form-group">
                            <label for="org-name">Управляющая организация</label>

                            <select name="organization_id" class="form-control">
                                @foreach($organizations as $org)
                                    <option value="{{ $org->id }}">{{ $org->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="org-addresss">Адрес</label>
                            <input name="address" type="text" class="form-control" id="org-addresss" placeholder="Адрес">
                        </div>

                        <div class="form-group">
                            <label for="org-phonee">Телефон</label>
                            <input name="phone" type="text" class="form-control" id="org-phonee" placeholder="Телефон">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection
