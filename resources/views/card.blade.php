@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-5">
                <img class="card-img-top" src="{{ asset('../img/3/1197.jpg') }}" alt="pet-image">
            </div>
            <div class="col-6">
            <div class="col-auto">
                <div class="row">
                    <div class="col-6">
                        <!-- основная инф-ия -->
                        <div class="card" style="height: 15vh">
                            <span class="w-100 border-bottom pl-3 font-weight-bold">основная информация</span>
                            <div class="overflow-auto">
                                <ul class="list-unstyled pl-3 pt-1">
                                    <li>
                                        <div class="row w-100">
                                            <div class="col-auto">
                                                Кличка:
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row w-100">
                                            <div class="col-auto">
                                                Пол:
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row w-100">
                                            <div class="col-auto">
                                                Возраст:
                                            </div>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="row w-100">
                                            <div class="col-auto">
                                                Вес:
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Контактные сведения -->
                    <div class="col-6">
                        <div class="card h-100" >
                            <span class="w-100 border-bottom pl-3 font-weight-bold">контактные сведения</span>
                            <div class="overflow-auto">
                                <ul class="list-unstyled pl-3 pt-1">
                                    <li>
                                        <div class="row w-100">
                                            <div class="col-auto">
                                                Приют:
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row w-100">
                                            <div class="col-auto">
                                                Телефон:
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row w-100">
                                            <div class="col-auto">
                                                Эксплуатирующая организация:
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row w-100">
                                            <div class="col-auto">
                                                Номер вольера:
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


                <!--Доп сведения -->
            <div class="col-auto">
                <div class="card mt-4" >
                    <span class="w-100 border-bottom pl-3 font-weight-bold">дополнительные сведения</span>
                    <div class=" overflow-auto">
                        <ul class="list-unstyled pl-3 pt-1">
                            <li>
                                <div class="row w-100">
                                    <div class="col-auto">
                                        Порода:
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row w-100">
                                    <div class="col-auto">
                                        Окрас:
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row w-100">
                                    <div class="col-auto">
                                        Шерсть:
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row w-100">
                                    <div class="col-auto">
                                        Уши:
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row w-100">
                                    <div class="col-auto">
                                        Хвост:
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row w-100">
                                    <div class="col-auto">
                                        Размер:
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row w-100">
                                    <div class="col-auto">
                                        Особые приметы:
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row w-100">
                                    <div class="col-auto">
                                        Характер:
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="card p-2 border-0">
                            <form action="">
                            <div class="row justify-content-around">
                                    <div class="col-auto">
                                        <input type="button" class="btn btn-primary" value="Подать заявку">
                                    </div>
                                    <div class="col-auto">
                                        <input type="button" class="btn btn-primary" value="Посмотреть на карте">
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



        <!-- Дополнительная информация -->
    <div class="row my-4 border-bottom">
        <div class="col-auto">
            <ul class="list-unstyled">
                <li class="pt-1">
                    <a class="btn-link-mos form-control border-0"  data-toggle="collapse" href="#collapseQ" role="button" aria-expanded="false" aria-controls="collapseSearch">
                        <div class="row">
                            <div class="col-auto">
                                <div class="row align-items-center">
                                    <h4>Дополнительная информация</h4>
                                    <i class="fas fa-angle-down pl-1"></i>
                                </div>

                            </div>
                        </div>
                    </a>
                    <div class="collapse" id="collapseQ">
                        <div class="card card-body border-right-0 border-left-0 border-top-0" style="border-radius: 0">
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                                id itaque molestias natus odio quaerat sequi. A ab aspernatur,
                                distinctio earum eius eum eveniet nulla praesentium repellendus
                                repudiandae similique sunt!
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@endsection
