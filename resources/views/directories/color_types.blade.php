@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @include('directories.nav')

            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Справочник: ОКРАСЫ</div>

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
                                <th>Тип животного</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($types as $type)
                                <tr>
                                    <td>{{ $type->name }}</td>
                                    <td>{{ $type->petType->name }}</td>
                                    <td>
                                        <button class="edit-table btn mb-1"
                                                data-id="{{ $type->id }}"
                                                data-org="{{ $type->name }}"
                                                data-pt="{{ $type->petType->id }}"
                                                data-toggle="modal"
                                                data-target="#exampleModal"
                                                href="#">
                                            Редактировать
                                        </button>
                                        <form method="POST" action="{{ route('directories.color_types.delete', $type->id) }}">
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
                $('#org-name').val($(this).data('org'));
                $('#pet-type option[value=' + $(this).data('pt') + ']').attr('selected', true);
            });
        } );

    </script>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Окрасы</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form method="POST" action="{{ route('directories.color_types.update') }}">
                        @method('PUT')
                        @csrf
                        <input type="text" name="id" hidden id="org-id">
                        <div class="form-group">
                            <label for="org-name">Наименование</label>
                            <input name="name" type="text" class="form-control" id="org-name" placeholder="Наименование">
                        </div>

                        <div class="form-group">
                            <label for="pet-type">Тип животного</label>

                            <select id="pet-type" name="pet_type_id" class="form-control">
                                @foreach($pet_types as $pt)
                                    <option value="{{ $pt->id }}">{{ $pt->name }}</option>
                                @endforeach
                            </select>
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
                    <h5 class="modal-title" id="exampleModalLabel">Окрасы</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form method="POST" action="{{ route('directories.color_types.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="org-name">Наименование</label>
                            <input name="name" type="text" class="form-control" id="org-add-name" placeholder="Наименование">
                        </div>

                        <div class="form-group">
                            <label for="pet-typee">Тип животного</label>

                            <select id="pet-typee" name="pet_type_id" class="form-control">
                                @foreach($pet_types as $pt)
                                    <option value="{{ $pt->id }}">{{ $pt->name }}</option>
                                @endforeach
                            </select>
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
