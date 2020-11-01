@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('home.shelter', ['id' => $shelter->id]) }}">В приют</a>
            </div>
        </div>
        <div class="row">
            <div class="col m-auto">
                <form method="POST" action="{{ route('home.pet_add_post', $shelter->id) }}">
                @csrf
                <!-- Основное -->
                    <div class="container">
                        <div class="row my-5">
                            <div class="col">
                                <div class="h1">
                                    Карточка животного № <input name="card_number" required maxlength="5" type="text"> Z
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                @php
                                    @$photo = asset('img/nophoto.jpg');
                                @endphp

                                <div class="text-left">
                                    <img class="card-img-top"
                                         src="{{ $photo }}"
                                         style="max-height: 500px; max-width: 450px;"
                                         alt="Card image cap">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 border-bottom">
                                <h4>Основные сведения</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="name">Кличка</label>
                                <input required id="name" class=" form-control"
                                       type="text" name="name"  value="без клички">
                            </div>

                            <div class="col">
                                <label for="type">Тип</label>
                                <select required id="type" class=" form-control" name="type">
                                    @foreach($petTypes as $petType)

                                        <option>
                                            {{ $petType->name }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <label for="breed">Порода</label>
                                <select required id="breed" class=" form-control" name="breed_name">
                                    @foreach($petBreeds as $petBreed)

                                        <option>
                                            {{ $petBreed->name }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label for="customFile">Фотография</label>

                                <div class="custom-file my-2">
                                    <label class="custom-file-label" for="customFile">Выберите фото</label>
                                    <input disabled type="file" class="custom-file-input" id="customFile" name="image">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="birthDate">Дата рождения</label>
                                <input required id="birthDate" maxlength="4" class="form-control" name="date_of_birth" placeholder="" value="2020">
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-12"></div>
                                </div>
                                <label>Пол</label>
                                <div class="form-check form-check-inline">
                                    <input checked class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="мужской">
                                    <label class="form-check-label" for="inlineRadio1">М</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="женский">
                                    <label class="form-check-label" for="inlineRadio2">Ж</label>
                                </div>
                            </div>
                        </div>


                        <!-- Внешний вид -->
                        <div class="row my-4">
                            <div class="col-3 border-bottom">
                                <h4>Внешний вид</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="color">Окрас</label>
                                <select required id="color" class=" form-control" name="color">
                                    @foreach($petColors as $c)
                                        <option>{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label for="skin">Шерсть</label>
                                <select required id="skin" class=" form-control" name="fur">
                                    @foreach($petFurs as $c)
                                        <option>{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="ears">Уши</label>
                                <select required id="ears" class=" form-control" name="ears">
                                    @foreach($petEars as $c)
                                        <option>{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label for="tale">Хвост</label>
                                <select required id="tale" class=" form-control" name="tail">
                                    @foreach($petTails as $c)
                                        <option>{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="size">Размер</label>
                                <select required id="size" class=" form-control" name="size">
                                    <option>средний</option>
                                    <option>малый</option>
                                    <option>крупный</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="weight">Вес</label>
                                <input required id="weight" class=" form-control"
                                       name="weight" type="text" placeholder="кг" >
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <button class="btn btn-success">Добавить</button>
                            </div>
                        </div>

                    </div>
                </form>

                <br>

            </div>
        </div>
@endsection
