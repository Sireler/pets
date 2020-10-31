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
                               Карточка животного № XXXX-XX
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
                           <input required id="name" class=" form-control" type="text" name="name" placeholder="" value="">
                       </div>

                       <div class="col">
                           <label for="type">Тип</label>
                           <select id="type" class=" form-control" name="type">
                               <option value="">Собака</option>
                               <option value="">Щенок</option>
                               <option value="">Кошка</option>
                               <option value="">Котёнок</option>
                           </select>
                       </div>
                   </div>


                   <div class="row">
                       <div class="col">
                           <label for="breed">Порода</label>
                           <select id="breed" class=" form-control" name="breed_name">
                           </select>
                       </div>

                       <div class="col">
                           <label for="customFile">Фотография</label>
                           <div class="custom-file">
                               <label class="custom-file-label" for="customFile">Выберите фото</label>
                               <input  type="file" class="custom-file-input" id="customFile" name="image">
                           </div>
                       </div>
                   </div>

                   <div class="row mt-2">
                       <div class="col">
                           <label for="birthDate">Дата рождения</label>
                           <input required id="birthDate" class=" form-control" type="date" name="" placeholder="" value="">
                       </div>
                       <div class="col">
                           <div class="row">
                               <div class="col-12"></div>
                           </div>
                           <label>Пол</label>
                           <div class="form-check form-check-inline">
                               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                               <label class="form-check-label" for="inlineRadio1">М</label>
                           </div>
                           <div class="form-check form-check-inline">
                               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
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
                               <select id="color" class=" form-control" name="color">
                               </select>
                           </div>

                           <div class="col">
                               <label for="skin">Шерсть</label>
                               <select id="skin" class=" form-control" name="skin">
                               </select>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col">
                               <label for="ears">Уши</label>
                               <select id="ears" class=" form-control" name="ears">
                               </select>
                           </div>

                           <div class="col">
                               <label for="tale">Хвост</label>
                               <select id="tale" class=" form-control" name="tale">
                               </select>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col">
                               <label for="size">Размер (см)</label>
                               <input id="size" class=" form-control" name="size" type="text" placeholder="см" value="" >
                           </div>

                           <div class="col">
                               <label for="weight">Вес (кг)</label>
                               <input id="weight" class=" form-control" name="weight" type="text" placeholder="кг" value="" >
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
                           <textarea required id="individuals" class=" form-control" name="individuals" cols="10" rows="5"></textarea>
                       </div>

                       <div class="col">
                           <label for="character">Характер</label>
                           <textarea required id="character" class=" form-control" name="character" cols="10" rows="5"></textarea>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-auto">
                           <label for="idPetNumber">Идентификационная метка</label>
                           <input required id="idPetNumber" class="form-control" type="text" name="idPetNumber" maxlength="15" placeholder="" value="">
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
                        <div class="col-auto ml-4">
                            <input type="checkbox" id="checkbox"> Стерилизация

                            <script>
                                $('#checkbox').click(function(){
                                    if ($(this).is(':checked')){
                                        $('#sterText').show(100);
                                    } else {
                                        $('#sterText').hide(100);
                                    }
                                });
                            </script>
                        </div>
                    </div>

                    <div class="row" id="sterText" style="display: none;">
                        <div class="col-3">
                            <label for="sterDate">Дата стерилизации</label>
                            <input required id="sterDate" class=" form-control" type="date" name="" placeholder="" value="">

                            <label for="sterDoctor">Ветеренарный врач</label>
                            <input required id="sterDoctor" class="form-control" type="text" name="sterDoctor" maxlength="" placeholder="Ф.И.О." value="">
                        </div>
                        <div class="col">
                            <label for="sterPlace">Место стерилизации</label>
                            <input required id="sterPlace" class="form-control" type="text" name="sterPlace" maxlength="" placeholder="" value="">
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
                           <input required id="sterPlace" class="form-control" type="text" name="sterPlace" maxlength="4" placeholder="№" value="">
                       </div>
                       от
                       <div class="col-auto">
                           <input required class=" form-control" type="date" name="" placeholder="" value="">
                       </div>
                   </div>

                   <div class="row align-items-center">
                       <div class="col-1">
                           Акт отлова
                       </div>
                       <div class="col-1">
                           <input required id="sterPlace" class="form-control" type="text" name="sterPlace" maxlength="4" placeholder="№" value="">
                       </div>
                       от
                       <div class="col-auto">
                           <input required class=" form-control" type="date" name="" placeholder="" value="">
                       </div>
                   </div>

                   <div class="row mt-3">
                       <div class="col">
                           <label for="otlPlace">Адрес места отлова</label>
                           <input required id="otlPlace" class=" form-control" type="text" name="otlPlace" placeholder="" value="">
                       </div>
                   </div>

                   <div class="row mt-3">
                       <div class="col">
                           <label for="video">Видеофиксация отлова</label>
                           <input required id="video" class=" form-control" type="text" name="video" placeholder="" value="">
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
                   <div class="h4 mt-3">Юридическое лицо</div>


                   <!-- Выбор лица -->
                   <div class="col">
                       <div class="row">
                           <div class="col-12"></div>
                       </div>
                       <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                           <label class="form-check-label" for="inlineRadio1">Юридическое лицо</label>
                       </div>


                       <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                           <label class="form-check-label" for="inlineRadio2">Физическое лицо</label>
                       </div>
                   </div>

                   <div class="row" id="urFaceBl">
                       <div class="col">
                           <label for="urFace">Юридическое лицо</label>
                           <input required id="urFace" class=" form-control" type="text" name="urFace" placeholder="" value="">
                       </div>

                       <div class="col">
                           <label for="phone">Телефон:</label>
                           <input required class="form-control phone_mask" type="tel" minlength="11" maxlength="11"
                                  name="phone" placeholder="" value="">
                       </div>
                   </div>

                   <div class="row">
                       <div class="col">
                           <label for="urFace">Адрес</label>
                           <input required id="adress" class=" form-control" type="text" name="adress" placeholder="" value="">
                       </div>
                   </div>
                   <div class="row">
                       <div class="col">
                           <label for="opeka">Опекун</label>
                           <input required id="opeka" class=" form-control" type="text" name="opeka" placeholder="Ф.И.О." value="">
                       </div>
                       <div class="col">
                           <label for="contacts">Контактные данные</label>
                           <input required id="contacts" class=" form-control" type="text" name="contacts" placeholder="" value="">
                       </div>
                   </div>

                   <div class="h4 mt-3">Физическое лицо</div>
                   <div class="row">
                       <div class="col">
                           <label for="matFace">Физическое лицо</label>
                           <input required id="matFace" class=" form-control" type="text" name="matFace" placeholder="Ф.И.О." value="">
                       </div>
                   </div>

                   <div class="row">
                       <div class="col">
                           <label for="contacts2">Контактные данные</label>
                           <input required id="contacts2" class=" form-control" type="text" name="contacts2" placeholder="" value="">
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
                                <input required id="arriving" class=" form-control" type="date" name="date_of_arrived" placeholder="" value="">
                            </div>
                            <div class="col-auto">
                                <label for="actAr">Акт</label>
                                <input required id="actAr" class="form-control" type="text" name="actAr" maxlength="4" placeholder="№" value="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <label for="adopting">Дата выбытия из приюта</label>
                                <input required id="adopting" class=" form-control" type="date" name="date_of_adopted" placeholder="" value="">
                            </div>
                            <div class="col-auto">
                                <label for="actAd">Акт</label>
                                <input required id="actAd" class="form-control" type="text" name="actAd" maxlength="4" placeholder="№" value="">
                            </div>
                        </div>
                    <div class="row">
                        <div class="col">
                            <label for="reason">Причина выбытия из приюта</label>
                            <input required id="reason" class="form-control" type="text" name="reason" maxlength="" placeholder="" value="">
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
                            <h4>Сведения о состоянии здорвья</h4>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                </div>


                <!-- Ответственниы за животное -->
                <div class="container">
                    <div class="row">
                        <div class="col-3 border-bottom my-4">
                            <h4>Ответственниы за животное</h4>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                </div>

                <br>

                <input type="submit" name="submit" class="btn-dark btn" value="Сохранить">

            </form>
        </div>
    </div>
@endsection
