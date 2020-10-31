@extends('layouts.app')

@section('content')

    <div class="container">
        <!-- header меню -->
        <div class="row pb-2 pt-4 border-bottom">
            <div class="col-auto">
                <a class="btn-link-mos" href="{{ url('/') }}">
                    Главная
                </a>
            </div>
            <div class="col-auto">
                <a class="btn-link-mos" href="#">
                    <ul class="nav">
                        <li class="dropdown">
                            <a href="#" class=" btn-link-mos" data-toggle="dropdown">Каталог</a>
                            <ul class="dropdown-menu">
                                <li>Выберите питомца:</li>
                                @foreach($petTypes as $pt)
                                    <li><a class="btn-link-mos" href="{{ route('catalog.findByPetType', ['pet_type' => $pt->id]) }}">{{ $pt->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>

                </a>
            </div>
        </div>

    <div class="row">

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

                                @foreach ($cats as $pet)
                                    @php
                                        $photo = asset('img/' . $pet->shelter->shelter_id . '/' . $pet->card_number . '.jpg' );
                                        if( ! is_file('img/' . $pet->shelter->shelter_id . '/' . $pet->card_number . '.jpg')) {
                                            $photo = asset('img/nophoto.jpg');
                                        }
                                    @endphp

                                    <div class="col-md-4 pb-3">
                                        <div class="card">
                                            <img class="card-img-top"
                                                 src="{{ $photo }}"
                                                 style="max-height: 260px;"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $pet->name }}</h5>
                                                <p class="card-text">Харизматичный, активный, очень ласковый и невероятно доверчивый
                                                    пес Джони. Кастрирован, привит и здоров! Рост 50 см, вес 32 кг, предположительно
                                                    жил при дворе в деревне. Но в машине при этом ведет себя отлично и спокойно переносит дорогу</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="row justify-content-around text-center">
                                                    <div class="col"><a href="/test" class="card-link btn btn-primary w-100">Подробнее</a></div>
                                                    <div class="col"><a href="#" class="card-link btn btn-primary w-100">На карту</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                @foreach ($dogs as $pet)
                                    @php
                                        $photo = asset('img/' . $pet->shelter->shelter_id . '/' . $pet->card_number . '.jpg' );
                                        if( ! is_file('img/' . $pet->shelter->shelter_id . '/' . $pet->card_number . '.jpg')) {
                                            $photo = asset('img/nophoto.jpg');
                                        }
                                    @endphp

                                    <div class="col-md-4 pb-3">
                                        <div class="card">
                                            <img class="card-img-top"
                                                 src="{{ $photo }}"
                                                 style="max-height: 260px;"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $pet->name }}</h5>
                                                <p class="card-text">Харизматичный, активный, очень ласковый и невероятно доверчивый
                                                    пес Джони. Кастрирован, привит и здоров! Рост 50 см, вес 32 кг, предположительно
                                                    жил при дворе в деревне. Но в машине при этом ведет себя отлично и спокойно переносит дорогу</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="row justify-content-around text-center">
                                                    <div class="col"><a href="/test" class="card-link btn btn-primary w-100">Подробнее</a></div>
                                                    <div class="col"><a href="#" class="card-link btn btn-primary w-100">На карту</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach



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
                                            <li class=" font-weight-light mb-2" style="font-size: 1.2rem">
                                                <i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>
                                                 «Щербинка»: г.Москва, ул.Брусилова, вл.32, стр.1-5
                                            </li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.2rem">
                                                <i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>
                                                 «Некрасовка»: г.Москва, ул.2-я Вольская, вл.17 стр.3
                                            </li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.2rem">
                                                <i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>
                                                 «Печатники»: г.Москва, Проектируемый проезд №5112, вл.2\1
                                            </li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.2rem">
                                                <i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>
                                                 «Солнцево»: г.Москва, ул. Родниковая, вл.26
                                            </li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.2rem">
                                                <i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>
                                                 «GETDOG»: г.Москва, Машкинское шоссе, вл. 4
                                            </li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.2rem">
                                                <i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>
                                                 «Молжаниново»: г.Москва, Проектируемый проезд, 727
                                            </li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.2rem">
                                                <i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>
                                                 «Искра»: г.Москва, ул.Искры, вл. 23А
                                            </li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.2rem">
                                                <i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>
                                                 «Красная сосна»: г.Москва, ул.Красной Сосны, вл. 30, стр.4
                                            </li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.2rem">
                                                <i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>
                                                 «Дубовая роща»: г.Москва, проезд Дубовой Рощи, вл.23-25
                                            </li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.2rem">
                                                <i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>
                                                Кожуховский приют: г.Москва, ул. Пехорская 1Б, с.6
                                            </li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.2rem">
                                                <i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>
                                                 «Бирюлево»: г.Москва, Востряковский пр-д, вл.10 А
                                            </li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.2rem">
                                                <i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>
                                                 «Зеленоград»: г.Москва, Зеленоград, Фирсановское ш., вл.5А
                                            </li>
                                            <li class=" font-weight-light mb-2" style="font-size: 1.2rem">
                                                <i class="fas fa-paw mr-1" style=" font-size: 1rem ;color: #cc2222"></i>
                                                 «Зоорассвет»: г.Москва, ул.Рассветная аллея, влд.10
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (начало) -->
                                    <div style="width: 718px;height: 403px" id="mapbzq2xxco"></div>
                                    <script>function YandexReadyHandlerbzq2xxco() {
                                            var map = new ymaps.Map("mapbzq2xxco", {
                                                center: [55.76162565139989, 37.90831962285752],
                                                zoom: 9,
                                                controls: ["zoomControl","typeSelector"],
                                                type: "yandex#map"
                                            },{
                                                suppressMapOpenBlock: true
                                            });
                                            map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.4987008921379,37.59909521639421],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%3Cp%3E%D0%B3.%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%0A%20%20%D1%83%D0%BB.%D0%91%D1%80%D1%83%D1%81%D0%B8%D0%BB%D0%BE%D0%B2%D0%B0%2C%20%D0%B2%D0%BB.32%2C%20%D1%81%D1%82%D1%80.1-5%3C%2Fp%3E"),
                                                        iconCaption:decodeURIComponent("%C2%AB%D0%A9%D0%B5%D1%80%D0%B1%D0%B8%D0%BD%D0%BA%D0%B0%C2%BB"),
                                                        hintCaption:decodeURIComponent("%C2%AB%D0%A9%D0%B5%D1%80%D0%B1%D0%B8%D0%BD%D0%BA%D0%B0%C2%BB"),
                                                        iconContent:"<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAABwklEQVQ4T6WTPWgUURDHf/MuXjBBxK9asBEkiGiVTgkoCAEVLayMAUNAEAQLs3e79/Zu31lqY+FXoxJQEA0EEiGNlYWVpY2ioBJBUQTB3N2bsJtdz8tHIU45M795/3n/94T/CPmbbTQaezveTCO8x7cmrbVfrL22B+NvZ33eTFg79bZgemDbaD5G9UxWFHlEZ2kMs2kWGFnJ6R0bVifWh+tuHjiWFz+JMq7CA2DXSk5nbVQd3QBOHEiQFxcRmVTVuwI7UtEiXKmFlet/4CRJdre9pImfeHFq9KHAIeDpr/6+8wO/2/eBE8ALPJcwVACDb10UGzuLUMunPcO3zpbL5cEgCL6lOtNNm83m9h/GtDcvdeaA4XyFNfB3gxyPouDlagfj2B1RYQbY0oWtO4jhObAzlS7KSQxDqpmabcAicFWUzyo8AQaBDyXxRzOr4tiNqOEG6GtU+oFT2V7d8Ci3MDqAcsBQuhBFU696fa4nMUh1FViMaIlwuRZWbq6xylq3H8NC19N1320q93AYhu+yN1O02LobA+5tcGrR1gbO2agy3QPnt5leyFbgI8gM+Deo7EM4nSpS+FpCRgs3enb+1w+2DId1njYFJTdyAAAAAElFTkSuQmCC'/>",
                                                    }
                                                }, {
                                                    preset: "islands#blueCircleIcon",
                                                })
                                            );    map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.6877836450722,37.93434931349181],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%3Cp%3E%0A%20%20%D0%B3.%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%20%D1%83%D0%BB.2-%D1%8F%0A%20%20%D0%92%D0%BE%D0%BB%D1%8C%D1%81%D0%BA%D0%B0%D1%8F%2C%20%D0%B2%D0%BB.17%20%D1%81%D1%82%D1%80.3%0A%3C%2Fp%3E"),
                                                        iconCaption:decodeURIComponent("%C2%AB%D0%9D%D0%B5%D0%BA%D1%80%D0%B0%D1%81%D0%BE%D0%B2%D0%BA%D0%B0%C2%BB"),
                                                        hintCaption:decodeURIComponent("%C2%AB%D0%9D%D0%B5%D0%BA%D1%80%D0%B0%D1%81%D0%BE%D0%B2%D0%BA%D0%B0%C2%BB"),
                                                        iconContent:"<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAABwklEQVQ4T6WTPWgUURDHf/MuXjBBxK9asBEkiGiVTgkoCAEVLayMAUNAEAQLs3e79/Zu31lqY+FXoxJQEA0EEiGNlYWVpY2ioBJBUQTB3N2bsJtdz8tHIU45M795/3n/94T/CPmbbTQaezveTCO8x7cmrbVfrL22B+NvZ33eTFg79bZgemDbaD5G9UxWFHlEZ2kMs2kWGFnJ6R0bVifWh+tuHjiWFz+JMq7CA2DXSk5nbVQd3QBOHEiQFxcRmVTVuwI7UtEiXKmFlet/4CRJdre9pImfeHFq9KHAIeDpr/6+8wO/2/eBE8ALPJcwVACDb10UGzuLUMunPcO3zpbL5cEgCL6lOtNNm83m9h/GtDcvdeaA4XyFNfB3gxyPouDlagfj2B1RYQbY0oWtO4jhObAzlS7KSQxDqpmabcAicFWUzyo8AQaBDyXxRzOr4tiNqOEG6GtU+oFT2V7d8Ci3MDqAcsBQuhBFU696fa4nMUh1FViMaIlwuRZWbq6xylq3H8NC19N1320q93AYhu+yN1O02LobA+5tcGrR1gbO2agy3QPnt5leyFbgI8gM+Deo7EM4nSpS+FpCRgs3enb+1w+2DId1njYFJTdyAAAAAElFTkSuQmCC'/>",
                                                    }
                                                }, {
                                                    preset: "islands#blueCircleIcon",
                                                })
                                            );    map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.668069167632034,37.70308086637092],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%3Cp%3E%0A%20%20%D0%B3.%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%0A%20%20%D0%9F%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B8%D1%80%D1%83%D0%B5%D0%BC%D1%8B%D0%B9%20%D0%BF%D1%80%D0%BE%D0%B5%D0%B7%D0%B4%20%E2%84%965112%2C%20%D0%B2%D0%BB.2%5C1%0A%3C%2Fp%3E"),
                                                        iconCaption:decodeURIComponent("%C2%AB%D0%9F%D0%B5%D1%87%D0%B0%D1%82%D0%BD%D0%B8%D0%BA%D0%B8%C2%BB"),
                                                        hintCaption:decodeURIComponent("%C2%AB%D0%9F%D0%B5%D1%87%D0%B0%D1%82%D0%BD%D0%B8%D0%BA%D0%B8%C2%BB"),
                                                        iconContent:"<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAABwklEQVQ4T6WTPWgUURDHf/MuXjBBxK9asBEkiGiVTgkoCAEVLayMAUNAEAQLs3e79/Zu31lqY+FXoxJQEA0EEiGNlYWVpY2ioBJBUQTB3N2bsJtdz8tHIU45M795/3n/94T/CPmbbTQaezveTCO8x7cmrbVfrL22B+NvZ33eTFg79bZgemDbaD5G9UxWFHlEZ2kMs2kWGFnJ6R0bVifWh+tuHjiWFz+JMq7CA2DXSk5nbVQd3QBOHEiQFxcRmVTVuwI7UtEiXKmFlet/4CRJdre9pImfeHFq9KHAIeDpr/6+8wO/2/eBE8ALPJcwVACDb10UGzuLUMunPcO3zpbL5cEgCL6lOtNNm83m9h/GtDcvdeaA4XyFNfB3gxyPouDlagfj2B1RYQbY0oWtO4jhObAzlS7KSQxDqpmabcAicFWUzyo8AQaBDyXxRzOr4tiNqOEG6GtU+oFT2V7d8Ci3MDqAcsBQuhBFU696fa4nMUh1FViMaIlwuRZWbq6xylq3H8NC19N1320q93AYhu+yN1O02LobA+5tcGrR1gbO2agy3QPnt5leyFbgI8gM+Deo7EM4nSpS+FpCRgs3enb+1w+2DId1njYFJTdyAAAAAElFTkSuQmCC'/>",
                                                    }
                                                }, {
                                                    preset: "islands#blueCircleIcon",
                                                })
                                            );    map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.62474019486091,37.376067699771276],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%3Cp%3E%0A%20%20%D0%B3.%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%20%D1%83%D0%BB.%0A%20%20%D0%A0%D0%BE%D0%B4%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2%D0%B0%D1%8F%2C%20%D0%B2%D0%BB.26%0A%3C%2Fp%3E"),
                                                        iconCaption:decodeURIComponent("%C2%AB%D0%A1%D0%BE%D0%BB%D0%BD%D1%86%D0%B5%D0%B2%D0%BE%C2%BB"),
                                                        hintCaption:decodeURIComponent("%C2%AB%D0%A1%D0%BE%D0%BB%D0%BD%D1%86%D0%B5%D0%B2%D0%BE%C2%BB"),
                                                        iconContent:"<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAABwklEQVQ4T6WTPWgUURDHf/MuXjBBxK9asBEkiGiVTgkoCAEVLayMAUNAEAQLs3e79/Zu31lqY+FXoxJQEA0EEiGNlYWVpY2ioBJBUQTB3N2bsJtdz8tHIU45M795/3n/94T/CPmbbTQaezveTCO8x7cmrbVfrL22B+NvZ33eTFg79bZgemDbaD5G9UxWFHlEZ2kMs2kWGFnJ6R0bVifWh+tuHjiWFz+JMq7CA2DXSk5nbVQd3QBOHEiQFxcRmVTVuwI7UtEiXKmFlet/4CRJdre9pImfeHFq9KHAIeDpr/6+8wO/2/eBE8ALPJcwVACDb10UGzuLUMunPcO3zpbL5cEgCL6lOtNNm83m9h/GtDcvdeaA4XyFNfB3gxyPouDlagfj2B1RYQbY0oWtO4jhObAzlS7KSQxDqpmabcAicFWUzyo8AQaBDyXxRzOr4tiNqOEG6GtU+oFT2V7d8Ci3MDqAcsBQuhBFU696fa4nMUh1FViMaIlwuRZWbq6xylq3H8NC19N1320q93AYhu+yN1O02LobA+5tcGrR1gbO2agy3QPnt5leyFbgI8gM+Deo7EM4nSpS+FpCRgs3enb+1w+2DId1njYFJTdyAAAAAElFTkSuQmCC'/>",
                                                    }
                                                }, {
                                                    preset: "islands#blueCircleIcon",
                                                })
                                            );    map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.91305668181759,37.38696355323405],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%3Cp%3E%0A%20%20%D0%B3.%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%0A%20%20%D0%9C%D0%B0%D1%88%D0%BA%D0%B8%D0%BD%D1%81%D0%BA%D0%BE%D0%B5%20%D1%88%D0%BE%D1%81%D1%81%D0%B5%2C%20%D0%B2%D0%BB.%204%0A%3C%2Fp%3E"),
                                                        iconCaption:decodeURIComponent("%C2%ABGETDOG%C2%BB"),
                                                        hintCaption:decodeURIComponent("%C2%ABGETDOG%C2%BB"),
                                                        iconContent:"<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAABwklEQVQ4T6WTPWgUURDHf/MuXjBBxK9asBEkiGiVTgkoCAEVLayMAUNAEAQLs3e79/Zu31lqY+FXoxJQEA0EEiGNlYWVpY2ioBJBUQTB3N2bsJtdz8tHIU45M795/3n/94T/CPmbbTQaezveTCO8x7cmrbVfrL22B+NvZ33eTFg79bZgemDbaD5G9UxWFHlEZ2kMs2kWGFnJ6R0bVifWh+tuHjiWFz+JMq7CA2DXSk5nbVQd3QBOHEiQFxcRmVTVuwI7UtEiXKmFlet/4CRJdre9pImfeHFq9KHAIeDpr/6+8wO/2/eBE8ALPJcwVACDb10UGzuLUMunPcO3zpbL5cEgCL6lOtNNm83m9h/GtDcvdeaA4XyFNfB3gxyPouDlagfj2B1RYQbY0oWtO4jhObAzlS7KSQxDqpmabcAicFWUzyo8AQaBDyXxRzOr4tiNqOEG6GtU+oFT2V7d8Ci3MDqAcsBQuhBFU696fa4nMUh1FViMaIlwuRZWbq6xylq3H8NC19N1320q93AYhu+yN1O02LobA+5tcGrR1gbO2agy3QPnt5leyFbgI8gM+Deo7EM4nSpS+FpCRgs3enb+1w+2DId1njYFJTdyAAAAAElFTkSuQmCC'/>",
                                                    }
                                                }, {
                                                    preset: "islands#blueCircleIcon",
                                                })
                                            );    map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.86186550119682,37.65359089040475],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%3Cp%3E%0A%20%20%D0%B3.%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%20%D1%83%D0%BB.%D0%98%D1%81%D0%BA%D1%80%D1%8B%2C%0A%20%20%D0%B2%D0%BB.%2023%D0%90%0A%3C%2Fp%3E"),
                                                        iconCaption:decodeURIComponent("%C2%AB%D0%98%D1%81%D0%BA%D1%80%D0%B0%C2%BB"),
                                                        hintCaption:decodeURIComponent("%C2%AB%D0%98%D1%81%D0%BA%D1%80%D0%B0%C2%BB"),
                                                        iconContent:"<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAABwklEQVQ4T6WTPWgUURDHf/MuXjBBxK9asBEkiGiVTgkoCAEVLayMAUNAEAQLs3e79/Zu31lqY+FXoxJQEA0EEiGNlYWVpY2ioBJBUQTB3N2bsJtdz8tHIU45M795/3n/94T/CPmbbTQaezveTCO8x7cmrbVfrL22B+NvZ33eTFg79bZgemDbaD5G9UxWFHlEZ2kMs2kWGFnJ6R0bVifWh+tuHjiWFz+JMq7CA2DXSk5nbVQd3QBOHEiQFxcRmVTVuwI7UtEiXKmFlet/4CRJdre9pImfeHFq9KHAIeDpr/6+8wO/2/eBE8ALPJcwVACDb10UGzuLUMunPcO3zpbL5cEgCL6lOtNNm83m9h/GtDcvdeaA4XyFNfB3gxyPouDlagfj2B1RYQbY0oWtO4jhObAzlS7KSQxDqpmabcAicFWUzyo8AQaBDyXxRzOr4tiNqOEG6GtU+oFT2V7d8Ci3MDqAcsBQuhBFU696fa4nMUh1FViMaIlwuRZWbq6xylq3H8NC19N1320q93AYhu+yN1O02LobA+5tcGrR1gbO2agy3QPnt5leyFbgI8gM+Deo7EM4nSpS+FpCRgs3enb+1w+2DId1njYFJTdyAAAAAElFTkSuQmCC'/>",
                                                    }
                                                }, {
                                                    preset: "islands#blueCircleIcon",
                                                })
                                            );    map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.84281982064802,37.67921466798388],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%3Cp%3E%0A%20%20%D0%B3.%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%0A%20%20%D1%83%D0%BB.%D0%9A%D1%80%D0%B0%D1%81%D0%BD%D0%BE%D0%B9%20%D0%A1%D0%BE%D1%81%D0%BD%D1%8B%2C%20%D0%B2%D0%BB.%2030%2C%20%D1%81%D1%82%D1%80.4%0A%3C%2Fp%3E"),
                                                        iconCaption:decodeURIComponent("%C2%AB%D0%9A%D1%80%D0%B0%D1%81%D0%BD%D0%B0%D1%8F%20%D1%81%D0%BE%D1%81%D0%BD%D0%B0%C2%BB"),
                                                        hintCaption:decodeURIComponent("%C2%AB%D0%9A%D1%80%D0%B0%D1%81%D0%BD%D0%B0%D1%8F%20%D1%81%D0%BE%D1%81%D0%BD%D0%B0%C2%BB"),
                                                        iconContent:"<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAABwklEQVQ4T6WTPWgUURDHf/MuXjBBxK9asBEkiGiVTgkoCAEVLayMAUNAEAQLs3e79/Zu31lqY+FXoxJQEA0EEiGNlYWVpY2ioBJBUQTB3N2bsJtdz8tHIU45M795/3n/94T/CPmbbTQaezveTCO8x7cmrbVfrL22B+NvZ33eTFg79bZgemDbaD5G9UxWFHlEZ2kMs2kWGFnJ6R0bVifWh+tuHjiWFz+JMq7CA2DXSk5nbVQd3QBOHEiQFxcRmVTVuwI7UtEiXKmFlet/4CRJdre9pImfeHFq9KHAIeDpr/6+8wO/2/eBE8ALPJcwVACDb10UGzuLUMunPcO3zpbL5cEgCL6lOtNNm83m9h/GtDcvdeaA4XyFNfB3gxyPouDlagfj2B1RYQbY0oWtO4jhObAzlS7KSQxDqpmabcAicFWUzyo8AQaBDyXxRzOr4tiNqOEG6GtU+oFT2V7d8Ci3MDqAcsBQuhBFU696fa4nMUh1FViMaIlwuRZWbq6xylq3H8NC19N1320q93AYhu+yN1O02LobA+5tcGrR1gbO2agy3QPnt5leyFbgI8gM+Deo7EM4nSpS+FpCRgs3enb+1w+2DId1njYFJTdyAAAAAElFTkSuQmCC'/>",
                                                    }
                                                }, {
                                                    preset: "islands#blueCircleIcon",
                                                })
                                            );    map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.81764552069543,37.605137403260656],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%3Cp%3E%0A%20%20%D0%B3.%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%20%D0%BF%D1%80%D0%BE%D0%B5%D0%B7%D0%B4%0A%20%20%D0%94%D1%83%D0%B1%D0%BE%D0%B2%D0%BE%D0%B9%20%D0%A0%D0%BE%D1%89%D0%B8%2C%20%D0%B2%D0%BB.23-25%0A%3C%2Fp%3E"),
                                                        iconCaption:decodeURIComponent("%C2%AB%D0%94%D1%83%D0%B1%D0%BE%D0%B2%D0%B0%D1%8F%20%D1%80%D0%BE%D1%89%D0%B0%C2%BB"),
                                                        hintCaption:decodeURIComponent("%C2%AB%D0%94%D1%83%D0%B1%D0%BE%D0%B2%D0%B0%D1%8F%20%D1%80%D0%BE%D1%89%D0%B0%C2%BB"),
                                                        iconContent:"<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAABwklEQVQ4T6WTPWgUURDHf/MuXjBBxK9asBEkiGiVTgkoCAEVLayMAUNAEAQLs3e79/Zu31lqY+FXoxJQEA0EEiGNlYWVpY2ioBJBUQTB3N2bsJtdz8tHIU45M795/3n/94T/CPmbbTQaezveTCO8x7cmrbVfrL22B+NvZ33eTFg79bZgemDbaD5G9UxWFHlEZ2kMs2kWGFnJ6R0bVifWh+tuHjiWFz+JMq7CA2DXSk5nbVQd3QBOHEiQFxcRmVTVuwI7UtEiXKmFlet/4CRJdre9pImfeHFq9KHAIeDpr/6+8wO/2/eBE8ALPJcwVACDb10UGzuLUMunPcO3zpbL5cEgCL6lOtNNm83m9h/GtDcvdeaA4XyFNfB3gxyPouDlagfj2B1RYQbY0oWtO4jhObAzlS7KSQxDqpmabcAicFWUzyo8AQaBDyXxRzOr4tiNqOEG6GtU+oFT2V7d8Ci3MDqAcsBQuhBFU696fa4nMUh1FViMaIlwuRZWbq6xylq3H8NC19N1320q93AYhu+yN1O02LobA+5tcGrR1gbO2agy3QPnt5leyFbgI8gM+Deo7EM4nSpS+FpCRgs3enb+1w+2DId1njYFJTdyAAAAAElFTkSuQmCC'/>",
                                                    }
                                                }, {
                                                    preset: "islands#blueCircleIcon",
                                                })
                                            );    map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.717277534585314,37.93000700481031],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%3Cp%3E%0A%20%20%D0%B3.%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%0A%20%20%D1%83%D0%BB.%20%D0%9F%D0%B5%D1%85%D0%BE%D1%80%D1%81%D0%BA%D0%B0%D1%8F%201%D0%91%2C%20%D1%81.6%0A%3C%2Fp%3E"),
                                                        iconCaption:decodeURIComponent("%D0%9A%D0%BE%D0%B6%D1%83%D1%85%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9%20%D0%BF%D1%80%D0%B8%D1%8E%D1%82"),
                                                        hintCaption:decodeURIComponent("%D0%9A%D0%BE%D0%B6%D1%83%D1%85%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9%20%D0%BF%D1%80%D0%B8%D1%8E%D1%82"),
                                                        iconContent:"<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAABwklEQVQ4T6WTPWgUURDHf/MuXjBBxK9asBEkiGiVTgkoCAEVLayMAUNAEAQLs3e79/Zu31lqY+FXoxJQEA0EEiGNlYWVpY2ioBJBUQTB3N2bsJtdz8tHIU45M795/3n/94T/CPmbbTQaezveTCO8x7cmrbVfrL22B+NvZ33eTFg79bZgemDbaD5G9UxWFHlEZ2kMs2kWGFnJ6R0bVifWh+tuHjiWFz+JMq7CA2DXSk5nbVQd3QBOHEiQFxcRmVTVuwI7UtEiXKmFlet/4CRJdre9pImfeHFq9KHAIeDpr/6+8wO/2/eBE8ALPJcwVACDb10UGzuLUMunPcO3zpbL5cEgCL6lOtNNm83m9h/GtDcvdeaA4XyFNfB3gxyPouDlagfj2B1RYQbY0oWtO4jhObAzlS7KSQxDqpmabcAicFWUzyo8AQaBDyXxRzOr4tiNqOEG6GtU+oFT2V7d8Ci3MDqAcsBQuhBFU696fa4nMUh1FViMaIlwuRZWbq6xylq3H8NC19N1320q93AYhu+yN1O02LobA+5tcGrR1gbO2agy3QPnt5leyFbgI8gM+Deo7EM4nSpS+FpCRgs3enb+1w+2DId1njYFJTdyAAAAAElFTkSuQmCC'/>",
                                                    }
                                                }, {
                                                    preset: "islands#blueCircleIcon",
                                                })
                                            );    map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.583452385948455,37.61609916879651],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%3Cp%3E%0A%20%20%D0%B3.%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%0A%20%20%D0%92%D0%BE%D1%81%D1%82%D1%80%D1%8F%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9%20%D0%BF%D1%80-%D0%B4%2C%20%D0%B2%D0%BB.10%20%D0%90%0A%3C%2Fp%3E"),
                                                        iconCaption:decodeURIComponent("%C2%AB%D0%91%D0%B8%D1%80%D1%8E%D0%BB%D0%B5%D0%B2%D0%BE%C2%BB"),
                                                        hintCaption:decodeURIComponent("%C2%AB%D0%91%D0%B8%D1%80%D1%8E%D0%BB%D0%B5%D0%B2%D0%BE%C2%BB"),
                                                        iconContent:"<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAABwklEQVQ4T6WTPWgUURDHf/MuXjBBxK9asBEkiGiVTgkoCAEVLayMAUNAEAQLs3e79/Zu31lqY+FXoxJQEA0EEiGNlYWVpY2ioBJBUQTB3N2bsJtdz8tHIU45M795/3n/94T/CPmbbTQaezveTCO8x7cmrbVfrL22B+NvZ33eTFg79bZgemDbaD5G9UxWFHlEZ2kMs2kWGFnJ6R0bVifWh+tuHjiWFz+JMq7CA2DXSk5nbVQd3QBOHEiQFxcRmVTVuwI7UtEiXKmFlet/4CRJdre9pImfeHFq9KHAIeDpr/6+8wO/2/eBE8ALPJcwVACDb10UGzuLUMunPcO3zpbL5cEgCL6lOtNNm83m9h/GtDcvdeaA4XyFNfB3gxyPouDlagfj2B1RYQbY0oWtO4jhObAzlS7KSQxDqpmabcAicFWUzyo8AQaBDyXxRzOr4tiNqOEG6GtU+oFT2V7d8Ci3MDqAcsBQuhBFU696fa4nMUh1FViMaIlwuRZWbq6xylq3H8NC19N1320q93AYhu+yN1O02LobA+5tcGrR1gbO2agy3QPnt5leyFbgI8gM+Deo7EM4nSpS+FpCRgs3enb+1w+2DId1njYFJTdyAAAAAElFTkSuQmCC'/>",
                                                    }
                                                }, {
                                                    preset: "islands#blueCircleIcon",
                                                })
                                            );    map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.98311075571534,37.24845780795516],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%3Cp%3E%0A%20%20%D0%B3.%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%0A%20%20%D0%97%D0%B5%D0%BB%D0%B5%D0%BD%D0%BE%D0%B3%D1%80%D0%B0%D0%B4%2C%20%D0%A4%D0%B8%D1%80%D1%81%D0%B0%D0%BD%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B5%20%D1%88.%2C%20%D0%B2%D0%BB.5%D0%90%0A%3C%2Fp%3E"),
                                                        iconCaption:decodeURIComponent("%C2%AB%D0%97%D0%B5%D0%BB%D0%B5%D0%BD%D0%BE%D0%B3%D1%80%D0%B0%D0%B4%C2%BB"),
                                                        hintCaption:decodeURIComponent("%C2%AB%D0%97%D0%B5%D0%BB%D0%B5%D0%BD%D0%BE%D0%B3%D1%80%D0%B0%D0%B4%C2%BB"),
                                                        iconContent:"<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAABwklEQVQ4T6WTPWgUURDHf/MuXjBBxK9asBEkiGiVTgkoCAEVLayMAUNAEAQLs3e79/Zu31lqY+FXoxJQEA0EEiGNlYWVpY2ioBJBUQTB3N2bsJtdz8tHIU45M795/3n/94T/CPmbbTQaezveTCO8x7cmrbVfrL22B+NvZ33eTFg79bZgemDbaD5G9UxWFHlEZ2kMs2kWGFnJ6R0bVifWh+tuHjiWFz+JMq7CA2DXSk5nbVQd3QBOHEiQFxcRmVTVuwI7UtEiXKmFlet/4CRJdre9pImfeHFq9KHAIeDpr/6+8wO/2/eBE8ALPJcwVACDb10UGzuLUMunPcO3zpbL5cEgCL6lOtNNm83m9h/GtDcvdeaA4XyFNfB3gxyPouDlagfj2B1RYQbY0oWtO4jhObAzlS7KSQxDqpmabcAicFWUzyo8AQaBDyXxRzOr4tiNqOEG6GtU+oFT2V7d8Ci3MDqAcsBQuhBFU696fa4nMUh1FViMaIlwuRZWbq6xylq3H8NC19N1320q93AYhu+yN1O02LobA+5tcGrR1gbO2agy3QPnt5leyFbgI8gM+Deo7EM4nSpS+FpCRgs3enb+1w+2DId1njYFJTdyAAAAAElFTkSuQmCC'/>",
                                                    }
                                                }, {
                                                    preset: "islands#blueCircleIcon",
                                                })
                                            );    map.geoObjects.add(new ymaps.GeoObject({
                                                    geometry: {
                                                        type: "Point",
                                                        coordinates: [55.739815293909864,37.79821580919258],
                                                        hideIconOnBalloonOpen: false
                                                    },
                                                    properties: {
                                                        balloonContent:decodeURIComponent("%3Cp%3E%0A%20%20%D0%B3.%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%0A%20%20%D1%83%D0%BB.%D0%A0%D0%B0%D1%81%D1%81%D0%B2%D0%B5%D1%82%D0%BD%D0%B0%D1%8F%20%D0%B0%D0%BB%D0%BB%D0%B5%D1%8F%2C%20%D0%B2%D0%BB%D0%B4.10%0A%3C%2Fp%3E"),
                                                        iconCaption:decodeURIComponent("%D0%9F%D1%80%D0%B8%D1%8E%D1%82%20%C2%AB%D0%97%D0%BE%D0%BE%D1%80%D0%B0%D1%81%D1%81%D0%B2%D0%B5%D1%82%C2%BB"),
                                                        hintCaption:decodeURIComponent("%D0%9F%D1%80%D0%B8%D1%8E%D1%82%20%C2%AB%D0%97%D0%BE%D0%BE%D1%80%D0%B0%D1%81%D1%81%D0%B2%D0%B5%D1%82%C2%BB"),
                                                        iconContent:"<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAABwklEQVQ4T6WTPWgUURDHf/MuXjBBxK9asBEkiGiVTgkoCAEVLayMAUNAEAQLs3e79/Zu31lqY+FXoxJQEA0EEiGNlYWVpY2ioBJBUQTB3N2bsJtdz8tHIU45M795/3n/94T/CPmbbTQaezveTCO8x7cmrbVfrL22B+NvZ33eTFg79bZgemDbaD5G9UxWFHlEZ2kMs2kWGFnJ6R0bVifWh+tuHjiWFz+JMq7CA2DXSk5nbVQd3QBOHEiQFxcRmVTVuwI7UtEiXKmFlet/4CRJdre9pImfeHFq9KHAIeDpr/6+8wO/2/eBE8ALPJcwVACDb10UGzuLUMunPcO3zpbL5cEgCL6lOtNNm83m9h/GtDcvdeaA4XyFNfB3gxyPouDlagfj2B1RYQbY0oWtO4jhObAzlS7KSQxDqpmabcAicFWUzyo8AQaBDyXxRzOr4tiNqOEG6GtU+oFT2V7d8Ci3MDqAcsBQuhBFU696fa4nMUh1FViMaIlwuRZWbq6xylq3H8NC19N1320q93AYhu+yN1O02LobA+5tcGrR1gbO2agy3QPnt5leyFbgI8gM+Deo7EM4nSpS+FpCRgs3enb+1w+2DId1njYFJTdyAAAAAElFTkSuQmCC'/>",
                                                    }
                                                }, {
                                                    preset: "islands#blueCircleIcon",
                                                })
                                            );    return map;
                                        }</script>
                                    <script src="//api-maps.yandex.ru/2.1/?apikey=YOUR_API_KEY&lang=ru&onload=YandexReadyHandlerbzq2xxco" type="text/javascript"></script>
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
                                            <h4>Вы взяли собаку из приюта: первые шаги</h4>
                                            <p>
                                                1. Если у вас есть дети, подготовьте их заранее. Понятно, что это трудно, сохранять спокойствие, когда в доме появляется такое пушистое счастье, но это необходимо. Собаки из приютов очень редко видят детей и для них это непонятные существа, которые по собачьим меркам ведут себя неадекватно. Прыгают, орут, тискают. Объясните, что все это будет, но когда собака привыкнет. Вообще, лучше всего познакомить детей с собакой в приюте на прогулке. Пусть дети для нее не будут сюрпризом.
                                            </p>
                                            <p>
                                                2. Если у вас есть кошка, поместите ее в переноску и покажите собаке. Если собака будет проявлять слишком повышенную возбудимость, шикните на нее, и отстраните от переноски, пусть поймет: кошка принадлежит вам и вы не позволите ее обижать. Если собака спокойна. Выпустите кошку и , постоянно контролируя ситуацию, познакомьте животных. Кошка, скорее всего, захочет залезть повыше, например на диван, собаке не разрешайте, она может только сидеть возле дивана и наблюдать. Следите за уровнем возбуждения собаки. Она должна понимать: кошка главнее, старшая здесь она и собака не может ее трогать...
                                            </p>

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
                                            <h4>Переезд животного</h4>
                                            <p>
                                                Переезд — стресс для животного, но все-таки его нужно помыть и обработать от насекомых. Многие владельцы дают новым питомцам противоглистные средства, но этого лучше не делать без назначения врача.

                                                После всех процедур собаке или кошке нужно дать время освоиться в доме — пусть она походит по комнатам и все исследует. При этом нужно особенно внимательно следить за ее поведением и тем, как она ест и ходит в туалет. На следующий день питомца можно вести к ветеринару. Врач должен осмотреть животное и взять необходимые анализы, чтобы удостовериться, что у вашего нового друга нет инфекций и он здоров. Если вы взяли питомца с улицы, а не из приюта, то в клинике ему заведут ветпаспорт, который отдадут владельцу животного после первой вакцинации. В том случае, если врач обнаружил у животного паразитов, ему потребуется средство для дегельминтизации — оно продается в ветаптеке или зоомагазине...
                                            </p>


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
                                    <ul class="list-unstyled">
                                        <li class="pt-1">
                                            <a class="btn-link-mos form-control text-center"  data-toggle="collapse" href="#collapseQ" role="button" aria-expanded="false" aria-controls="collapseSearch">
                        <span class="row">
                            <span class="col justify-content-center">
                               А зачем...?
                            </span>
                        </span>
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

                                        <li class="pt-1">
                                            <a class="btn-link-mos form-control text-center"  data-toggle="collapse" href="#collapseQ1" role="button" aria-expanded="false" aria-controls="collapseSearch">
                        <span class="row">
                            <span class="col justify-content-center">
                               А что...?
                            </span>
                        </span>
                                            </a>
                                            <div class="collapse" id="collapseQ1">
                                                <div class="card card-body border-right-0 border-left-0 border-top-0" style="border-radius: 0">
                                                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                                                        id itaque molestias natus odio quaerat sequi. A ab aspernatur,
                                                        distinctio earum eius eum eveniet nulla praesentium repellendus
                                                        repudiandae similique sunt!
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="pt-1">
                                            <a class="btn-link-mos form-control text-center"  data-toggle="collapse" href="#collapseQ2" role="button" aria-expanded="false" aria-controls="collapseSearch">
                        <span class="row">
                            <span class="col justify-content-center">
                               А как...?
                            </span>
                        </span>
                                            </a>
                                            <div class="collapse" id="collapseQ2">
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
