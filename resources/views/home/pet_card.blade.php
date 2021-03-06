@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('home.shelter', ['id' => $pet->shelter->shelter_id]) }}">В приют</a>
            </div>
        </div>
        <div class="row">
            <div class="col m-auto">
                <form method="POST" action="{{ route('home.pet_update', $pet->id) }}">
                    @csrf
                    <!-- Основное -->
                    <div class="container">
                        <div class="row my-5">
                            <div class="col">
                                <div class="h1">
                                    Карточка животного № {{ $pet->card_number }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                @php
                                    $photo = asset('img/' . $pet->shelter->shelter_id . '/' . $pet->card_number . '.jpg' );
                                    if( ! is_file('img/' . $pet->shelter->shelter_id . '/' . $pet->card_number . '.jpg')) {
                                        $photo = asset('img/nophoto.jpg');
                                    }
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
                                       type="text" name="name"  value="{{ $pet->name }}">
                            </div>

                            <div class="col">
                                <label for="type">Тип</label>
                                <select required id="type" class=" form-control" name="type">
                                    @foreach($petTypes as $petType)

                                        <option
                                            @if(Str::lower($petType->name) == Str::lower(trim($pet->type))) selected @endif>
                                            {{ $petType->name }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <label for="breed">Порода</label>
                                <select id="breed" class=" form-control" name="breed_name">
                                    @foreach($petBreeds as $petBreed)

                                        <option
                                            @if(Str::lower($petBreed->name) == trim($pet->breed_name)) selected @endif>
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
                                <input required id="birthDate" class=" form-control" name="date_of_birth" placeholder="" value="{{ $pet->date_of_birth }}">
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-12"></div>
                                </div>
                                <label>Пол</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" @if($pet->sex == 'мужской') checked @endif type="radio" name="sex" id="inlineRadio1" value="мужской">
                                    <label class="form-check-label" for="inlineRadio1">М</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" @if($pet->sex == 'женский') checked @endif type="radio" name="sex" id="inlineRadio2" value="женский">
                                    <label class="form-check-label" for="inlineRadio2">Ж</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Внешний вид -->
                    <div class="container">
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
                                        <option @if($c->name == $pet->color) selected @endif>
                                            {{ $c->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label for="skin">Шерсть</label>
                                <select required id="skin" class=" form-control" name="fur">
                                    @foreach($petFurs as $c)
                                        <option @if($c->name == $pet->fur) selected @endif>
                                            {{ $c->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="ears">Уши</label>
                                <select required id="ears" class=" form-control" name="ears">
                                    @foreach($petEars as $c)
                                        <option @if($c->name == $pet->ears) selected @endif>
                                            {{ $c->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label for="tale">Хвост</label>
                                <select required id="tale" class=" form-control" name="tail">
                                    @foreach($petTails as $c)
                                        <option @if($c->name == $pet->tail) selected @endif>
                                            {{ $c->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="size">Размер</label>
                                <select required id="size" class=" form-control" name="size">
                                    <option @if($pet->size == 'средний') selected @endif>средний</option>
                                    <option @if($pet->size == 'малый') selected @endif>малый</option>
                                    <option @if($pet->size == 'крупный') selected @endif>крупный</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="weight">Вес</label>
                                <input required id="weight" class=" form-control"
                                       name="weight" type="text" value="{{ $pet->weight }} кг" >
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <button class="btn btn-success">Сохранить</button>
                            </div>
                        </div>

                    </div>
                </form>
                    <!-- Особенности -->
                    <div class="container">
                        <div class="row">
                            <div class="col-3 border-bottom my-4">
                                <h4>Особенности</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="individuals">Особые приметы</label>
                                <textarea disabled required id="individuals" class=" form-control"
                                          name="individuals" cols="10" rows="5">
                                    {{ $pet->special_signs }}
                                </textarea>
                            </div>

{{--                            <div class="col">--}}
{{--                                <label for="character">Характер</label>--}}
{{--                                <textarea required id="character" class=" form-control" name="character" cols="10" rows="5"></textarea>--}}
{{--                            </div>--}}
                        </div>

                        @if (isset($pet->info))
                        <div class="row">
                            <div class="col-auto">
                                <label for="idPetNumber">Идентификационная метка</label>
                                <input disabled required id="idPetNumber" class="form-control"
                                       type="text" name="idPetNumber"
                                       maxlength="16" value="{{ @$pet->info->identification_mark }}">
                            </div>
                            <div class="col-auto">
                                <label for="petSocialized">Социализировано</label>
                                <input disabled id="petSocialized" class="form-control"
                                       type="checkbox" name="petSocialized"
                                       @if(@$pet->info->socialized == 1) checked @endif>
                            </div>
                        </div>
                        @endif
                    </div>

                    @if (isset($pet->info))
                    <!-- Стерилизация -->
                    <div class="container">
                        <div class="row">
                            <div class="col-3 border-bottom my-4">
                                <h4>Стерилизация</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 ml-4">
                                <input disabled class="form-control"
                                       type="text" value="{{ @$pet->info->sterilization_date }}, {{ $pet->info->doctor_name }}">
                            </div>
                        </div>
                    </div>
                    @endif


                    <!-- Сведения об отлове -->
                    <div class="container">
                        <div class="row">
                            <div class="col-3 border-bottom my-4">
                                <h4>Сведения об отлове</h4>
                            </div>
                        </div>

                        <div class="row align-items-center mb-2">
                            <div class="col-1">
                                Заказ-наряд
                            </div>
                            <div class="col-1">
                                <input disabled required id="sterPlace" class="form-control"
                                       type="text" name="sterPlace" maxlength="4"
                                       placeholder="№" value="{{ @$pet->catch->receipt_act_number }}">
                            </div>
                            от
                            <div class="col-auto">
                                <input disabled required class="form-control"
                                       type="date" name=""
                                       placeholder="" value="{{ @$pet->catch->act_date }}">
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-1">
                                Акт отлова
                            </div>
                            <div class="col-1">
                                <input required id="sterPlace" class="form-control" disabled
                                       type="text" name="sterPlace"
                                       maxlength="4" placeholder="№" value="{{ @$pet->catch->catch_act_number }}">
                            </div>
                            от
                            <div class="col-auto">
                                <input required class="form-control" disabled
                                       type="date" name="" placeholder="" value="{{ @$pet->catch->act_date }}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label for="otlPlace">Адрес места отлова</label>
                                <input required id="otlPlace" class="form-control" disabled
                                       type="text" name="otlPlace"
                                       placeholder="" value="{{ @$pet->catch->catch_address }}">
                            </div>
                        </div>

                    </div>


                    <div id="accordion" class="mt-4">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h4>Сведения о новых владельцах</h4>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <!-- Сведения о новых владельцах -->
                                <div class="container my-4">
                                    <!-- Выбор лица -->

                                    <div class="row" id="urFaceBl">
                                        <div class="col">
                                            <label for="urFace">Юридическое лицо</label>
                                            <input disabled required id="urFace" class=" form-control"
                                                   type="text" name="urFace"
                                                   placeholder="" value="{{ @$pet->owners->entity_name }}">
                                        </div>
                                    </div>

                                    <div class="row" id="urFaceBl">
                                        <div class="col">
                                            <label for="urFace">Опекун</label>
                                            <input disabled required id="urFace" class=" form-control"
                                                   type="text" name="urFace"
                                                   placeholder="" value="{{ @$pet->owners->guardian_name }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="matFace">Физическое лицо</label>
                                            <input disabled required id="matFace" class="form-control"
                                                   type="text" name="matFace"
                                                   placeholder="Ф.И.О." value="{{ @$pet->owners->individual_name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h4>Движение животного</h4>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <!-- Движение животного -->
                                <div class="container my-4">

                                    <div class="row">
                                        <div class="col-2">
                                            <label for="arriving">Дата поступления в приют</label>
                                            <input disabled required id="arriving" class=" form-control"
                                                   name="date_of_arrived" placeholder="" value="{{ @$pet->movements->arrived_date }}">
                                        </div>
                                        <div class="col-auto">
                                            <label for="actAr">Акт</label>
                                            <input disabled required id="actAr" class="form-control"
                                                   type="text" name="actAr" maxlength="4"
                                                   placeholder="№" value="{{ @$pet->movements->act_number }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-2">
                                            <label for="adopting">Дата выбытия из приюта</label>
                                            <input disabled required id="adopting" class=" form-control"
                                                   name="date_of_adopted" placeholder="" value="{{ @$pet->movements->left_date }}">
                                        </div>
                                        <div class="col-auto">
                                            <label for="actAd">Акт</label>
                                            <input disabled required id="actAd" class="form-control"
                                                   type="text" name="actAd" maxlength="4"
                                                   placeholder="№" value="{{ @$pet->movements->contract_number }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="reason">Причина выбытия из приюта</label>
                                            <input disabled required id="reason" class="form-control"
                                                   type="text" name="reason" maxlength=""
                                                   placeholder="" value="{{ @$pet->movements->left_reason }}">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h4>Сведения об обработке от экто- и эндопаразитов</h4>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <!-- Сведения об обработке от экто- и эндопаразитов -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Дата</th>
                                                    <th scope="col">Наименование препарата</th>
                                                    <th scope="col">Доза</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pet->treatments as $t)
                                                    <tr>
                                                        <td>{{ @$t->date }}</td>
                                                        <td>{{ @$t->drug_name }}</td>
                                                        <td>{{ @$t->dose }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <h4>Медицинская карточка животного</h4>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <!-- Сведения о вакцинации -->
                                <p class="m-3">Вакцинация:</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Дата</th>
                                                    <th scope="col">Наименование препарата</th>
                                                    <th scope="col">Доза</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pet->vaccinations as $v)
                                                    <tr>
                                                        <td>{{ @$v->date }}</td>
                                                        <td>{{ @$v->vaccine_type }}</td>
                                                        <td>{{ @$v->serial }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <h4>Сведения о состоянии здоровья</h4>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Дата</th>
                                                    <th scope="col">Статус</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>{{ @$pet->health->date }}</td>
                                                    <td>{{ @$pet->health->status }}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ответственниы за животное -->
                    <div class="container">
                        <div class="row">
                            <div class="col-3 border-bottom my-4">
                                <h4>Ответственный за животное</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Приют</th>
                                        <th scope="col">Владелец приюта</th>
                                        <th scope="col">Ответственный за животное</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ @$pet->shelter->shelter_name }}</td>
                                        <td>{{ @$pet->shelter->shelter_owner_name }}</td>
                                        <td>{{ @$pet->shelter->animal_watcher_name }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <br>


            </div>
        </div>
@endsection
