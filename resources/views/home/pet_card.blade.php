@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <form action="#" method="post" enctype="multipart/form-data">

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
                                <input disabled required id="name" class=" form-control"
                                       type="text" name="name"  value="{{ $pet->name }}">
                            </div>

                            <div class="col">
                                <label for="type">Тип</label>
                                <select disabled id="type" class=" form-control" name="type">
                                    <option value="">{{ $pet->type }}</option>
                                </select>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <label for="breed">Порода</label>
                                <select disabled id="breed" class=" form-control" name="breed_name">
                                    <option value="">{{ $pet->breed_name }}</option>
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
                                <input disabled required id="birthDate" class=" form-control" name="" placeholder="" value="{{ $pet->date_of_birth }}">
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-12"></div>
                                </div>
                                <label>Пол</label>
                                <div class="form-check form-check-inline">
                                    <input disabled class="form-check-input" @if($pet->sex == 'мужской') checked @endif type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">М</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input disabled class="form-check-input" @if($pet->sex == 'женский') checked @endif type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
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
                                <select disabled id="color" class=" form-control" name="color">
                                    <option value="">{{ $pet->color }}</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="skin">Шерсть</label>
                                <select disabled id="skin" class=" form-control" name="skin">
                                    <option value="">{{ $pet->fur }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="ears">Уши</label>
                                <select disabled id="ears" class=" form-control" name="ears">
                                    <option value="">{{ $pet->ears }}</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="tale">Хвост</label>
                                <select disabled id="tale" class=" form-control" name="tale">
                                    <option value="">{{ $pet->tail }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="size">Размер</label>
                                <input disabled id="size" class=" form-control"
                                       name="size" type="text" value="{{ $pet->size }}" >
                            </div>

                            <div class="col">
                                <label for="weight">Вес</label>
                                <input disabled id="weight" class=" form-control"
                                       name="weight" type="text" value="{{ $pet->weight }} кг" >
                            </div>
                        </div>
                    </div>

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

                        <div class="row">
                            <div class="col-auto">
                                <label for="idPetNumber">Идентификационная метка</label>
                                <input disabled required id="idPetNumber" class="form-control"
                                       type="text" name="idPetNumber"
                                       maxlength="16" value="{{ @$pet->info->identification_mark }}">
                            </div>
                        </div>
                    </div>

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


                    <!-- Сведения о новых владельцах -->
                    <div class="container">
                        <div class="row">
                            <div class="col-3 border-bottom my-4">
                                <h4>Сведения о новых владельцах</h4>
                            </div>
                        </div>


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


                    <!-- Движение животного -->
                    <div class="container">
                        <div class="row">
                            <div class="col-3 border-bottom my-4">
                                <h4>Движение животного</h4>
                            </div>
                        </div>

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

                    <!-- Сведения об обработке от экто- и эндопаразитов -->
                    <div class="container">
                        <div class="row">
                            <div class="col-3 border-bottom my-4">
                                <h4>Сведения об обработке от экто- и эндопаразитов</h4>
                            </div>
                        </div>
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


                    <!-- Сведения о вакцинации -->
                    <div class="container">
                        <div class="row">
                            <div class="col-3 border-bottom my-4">
                                <h4>Медицинская карточка животного</h4>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                    </div>


                    <!-- Сведения о состоянии здорвья -->
                    <div class="container">
                        <div class="row">
                            <div class="col-3 border-bottom my-4">
                                <h4>Сведения о состоянии здоровья</h4>
                            </div>
                        </div>
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

                </form>
            </div>
        </div>
@endsection
