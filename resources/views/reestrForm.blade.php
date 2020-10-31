@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <label for="color">Наименование приюта</label>
                            <select id="color" class=" form-control" name="color">
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
