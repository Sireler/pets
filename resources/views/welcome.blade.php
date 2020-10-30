@extends('layouts.app')

@section('content')
    <div class="row">
        <img class="img-fluid"
             src=""
             alt="maim" style="height: 460px; width: 100%;">

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="container p-5">

                    <!-- Плитки "О нас" -->
                    <div class="row justify-content-between font-weight-bolder p-3 mb-5" style="font-size: large">
                        <div class="col-3">
                            <div class="row">
                                <div class="col-auto align-self-center"><i class="fas fa-paw" style="font-size: 3rem; color: #cc2222"></i></div>
                                <div class="col"><h2>Мы плотно сотрудничаем с 13 Московскими приютами</h2></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-auto align-self-center"><i class="fas fa-paw" style="font-size: 3rem; color: #cc2222"></i></div>
                                <div class="col"><h2>Поможем вам найти себе верного друга на долгие года</h2></div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-auto align-self-center"><i class="fas fa-paw" style="font-size: 3rem; color: #cc2222"></i></div>
                                <div class="col"><h2>Более 2000 бездомных животных ищут себе дом</h2></div>
                            </div>
                        </div>
                    </div>
                    <!-- Конец плиток "О нас" -->



                    <!-- "Они нуждаются в вас" -->
                    <div class="row">
                        <div class="col text-center pb-2 border-bottom mb-5">
                            <h3>Они нуждаются в вас!</h3>
                        </div>
                    </div>
                    <!-- Конец "Они нуждаются в вас" -->



                    <!-- Блок с карточками -->
                    <div class="container ">
                        <div class="row">

                            @for ($i = 0; $i < 6; $i++)
                                <div class="col-md-4 pb-3">
                                    <div class="card">
                                        <img class="card-img-top" src="img/6.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Джони</h5>
                                            <p class="card-text">Харизматичный, активный, очень ласковый и невероятно доверчивый
                                                пес Джони. Кастрирован, привит и здоров! Рост 50 см, вес 32 кг, предположительно
                                                жил при дворе в деревне. Но в машине при этом ведет себя отлично и спокойно переносит дорогу</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-around text-center">
                                                <div class="col"><a href="#" class="card-link btn btn-primary w-100">Подробнее</a></div>
                                                <div class="col"><a href="#" class="card-link btn btn-primary w-100">Карты</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor

                        </div>
                    </div>
                    <div class="row justify-content-center my-5">
                        <div class="col-auto "><a href="#" class="btn btn-primary p-2 px-4">Посмотреть всех</a></div>
                    </div>
                    <!-- Конец блока с карточками -->

                    <!-- Блок с картами -->
                        <div class="contaier">
                            <div class="row">
                                <div class="col border-bottom pb-2 mb-4">
                                    <h3>Карты</h3>
                                </div>
                            </div>

                            <div class="row justify-content-between mb-4">
                                <div class="col-5">
                                    <h5 class="">Адреса приютов</h5>
                                    <div class="col-auto">
                                        <ul class="list-unstyled">
                                            <li class=" font-weight-light mb-2" style="font-size: 1.5rem"><i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>Lorem ipsum dolor sit amet</li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.5rem"><i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>Lorem ipsum dolor sit amet</li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.5rem"><i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>Lorem ipsum dolor sit amet</li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.5rem"><i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>Lorem ipsum dolor sit amet</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (начало) -->
                                    <div style="width: 718px;height: 403px" id="map1osgc0bf"></div>
                                    <script>function YandexReadyHandler1osgc0bf() {
                                            var map = new ymaps.Map("map1osgc0bf", {
                                                center: [55.76399687812535, 37.62767271307052],
                                                zoom: 14,
                                                controls: ["zoomControl","typeSelector"],
                                                type: "yandex#map"
                                            },{
                                                suppressMapOpenBlock: true
                                            });
                                            map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.75973818285713,37.616772215633986],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%D0%A2%D0%BE%D1%87%D0%BA%D0%B0"),
                                                        iconCaption:decodeURIComponent("%D0%A2%D0%BE%D1%87%D0%BA%D0%B01"),
                                                        hintCaption:decodeURIComponent("%D0%A2%D0%BE%D1%87%D0%BA%D0%B01"),
                                                    }
                                                }, {
                                                    preset: "islands#blueDotIcon",
                                                })
                                            );    map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.76312581936508,37.63162092474044],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%D0%A2%D0%BE%D1%87%D0%BA%D0%B0"),
                                                        iconCaption:decodeURIComponent("%D0%A2%D0%BE%D1%87%D0%BA%D0%B02"),
                                                        hintCaption:decodeURIComponent("%D0%A2%D0%BE%D1%87%D0%BA%D0%B02"),
                                                    }
                                                }, {
                                                    preset: "islands#blueDotIcon",
                                                })
                                            );    map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.75620504709592,37.644581358700385],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%D0%A2%D0%BE%D1%87%D0%BA%D0%B0"),
                                                        iconCaption:decodeURIComponent("%D0%A2%D0%BE%D1%87%D0%BA%D0%B03"),
                                                        hintCaption:decodeURIComponent("%D0%A2%D0%BE%D1%87%D0%BA%D0%B03"),
                                                    }
                                                }, {
                                                    preset: "islands#blueDotIcon",
                                                })
                                            );    return map;
                                        }</script>
                                    <script src="//api-maps.yandex.ru/2.1/?apikey=YOUR_API_KEY&lang=ru&onload=YandexReadyHandler1osgc0bf" type="text/javascript"></script>
                                    <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->
                                </div>
                            </div>
                        </div>
                    <!-- Конец блока с картами -->

                    <!--Блок со статьями -->
                    <div class="container">
                        <div class="row">
                            <div class="col border-bottom pb-2 mb-4">
                                <h3>Полезные статьи</h3>
                            </div>

                            <div class="row">
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col">
                                            <h4>Бла бла бла!</h4>
                                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias asperiores,
                                        facilis illo iure, libero molestias quae ratione repellendus repudiandae temporibus
                                        unde voluptate voluptatem. Dolorem exercitationem fuga reprehenderit sit? Cum.</span>
                                                <span>Consectetur, dicta dolores nesciunt quidem rem unde voluptates. Ab ad aliquid,
                                            amet culpa cumque cupiditate, esse eum hic illo inventore itaque maxime mollitia
                                            nobis obcaecati quis, ratione voluptatem. Incidunt, sequi.</span><span>Adipisci
                                            alias consequuntur cum cumque cupiditate debitis deserunt ducimus earum enim error
                                            esse explicabo harum, hic ipsam iusto molestiae nam numquam porro quia quod quos
                                            repellendus repudiandae tempora ullam veniam?</span><span>Accusamus accusantium at
                                            delectus nihil non nulla numquam officia quae vel? Corporis distinctio dolor libero
                                            necessitatibus quae quaerat quod saepe sapiente velit voluptatibus. Accusamus beatae,
                                            dolorum facere odit similique sunt.</span><span>Ad animi cum earum ipsa iusto laudantium
                                            minus, numquam quaerat quos repellendus sunt, vel voluptas. At dolorum facere incidunt,
                                            inventore natus provident qui voluptates! Ex fugit illo labore nihil quo.</span></p>


                                            <div class="row justify-content-end">
                                                <div class="col-auto pt-4 border-bottom">
                                                    <a href="#" class="btn btn-link-mos">
                                                        Читать далее
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col">
                                            <h4>Бла бла бла!</h4>
                                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias asperiores,
                                        facilis illo iure, libero molestias quae ratione repellendus repudiandae temporibus
                                        unde voluptate voluptatem. Dolorem exercitationem fuga reprehenderit sit? Cum.</span>
                                                <span>Consectetur, dicta dolores nesciunt quidem rem unde voluptates. Ab ad aliquid,
                                            amet culpa cumque cupiditate, esse eum hic illo inventore itaque maxime mollitia
                                            nobis obcaecati quis, ratione voluptatem. Incidunt, sequi.</span><span>Adipisci
                                            alias consequuntur cum cumque cupiditate debitis deserunt ducimus earum enim error
                                            esse explicabo harum, hic ipsam iusto molestiae nam numquam porro quia quod quos
                                            repellendus repudiandae tempora ullam veniam?</span><span>Accusamus accusantium at
                                            delectus nihil non nulla numquam officia quae vel? Corporis distinctio dolor libero
                                            necessitatibus quae quaerat quod saepe sapiente velit voluptatibus. Accusamus beatae,
                                            dolorum facere odit similique sunt.</span><span>Ad animi cum earum ipsa iusto laudantium
                                            minus, numquam quaerat quos repellendus sunt, vel voluptas. At dolorum facere incidunt,
                                            inventore natus provident qui voluptates! Ex fugit illo labore nihil quo.</span></p>


                                            <div class="row justify-content-end">
                                                <div class="col-auto pt-4 border-bottom">
                                                    <a href="#" class="btn btn-link-mos">
                                                        Читать далее
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="col-3 ml-5">
                                    <div class="row justify-content-center border-bottom mb-4">
                                        <h4>Часто задаваемые вопросы</h4>
                                    </div>
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link-grey" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Разворачиваемая панель #1
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link-grey collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Разворачиваемая панель #2
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link-grey collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Разворачиваемая панель #3
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Конец блока со статьями-->



                <!-- Блок с контактами -->
                <div class="container display-5 mb-4">
                    <div class="row border-bottom mb-4">
                        <div class="col">
                            <h3>Как с нами связаться</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <p>Наши номера телефонов:</p>
                        </div>
                        <div class="col">
                            <div class="row justify-content-around text-center">
                                <div class="col-3 border-bottom ml-3">+7(xxx)-xxx-xx-xx</div>
                                <div class="col-3 border-bottom ml-3">+7(xxx)-xxx-xx-xx</div>
                                <div class="col-3 border-bottom ml-3">+7(xxx)-xxx-xx-xx</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <p>Наши адреса почт:</p>
                        </div>
                        <div class="col">
                            <div class="row justify-content-around text-center">
                                <div class="col-3 border-bottom ml-3">xxxxx@mail.ru</div>
                                <div class="col-3 border-bottom ml-3">xxxxx@gmail.ru</div>
                                <div class="col-3 border-bottom ml-3">xxxxx@yandex.ru</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Конец блока с контактами -->

            </div>
        </div>
    </div>
@endsection
