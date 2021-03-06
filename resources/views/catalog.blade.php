@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row border-bottom mb-5">
            <h1 class="ml-4" style="color: #cc2222"><i class="fas fa-paw mr-2"></i>Каталог</h1>
        </div>
    <div class="row">

        <!-- Sidebar -->

        <div class="col-3 border-right">
            <h3>Фильтры</h3>
            <ul class="list-unstyled">

                <form action="{{ route('catalog.findByPetType') }}">

                    <li class="border-bottom pb-2">
                        <label for="searchType">Вид животного</label>
                        <select name="pet_type" class="form-control" id="searchType">
                            @foreach($petTypes as $pt)
                                <option
                                    @if($pt->id == request()->get('pet_type')) selected @endif
                                    value="{{ $pt->id }}">
                                        {{ $pt->name }}
                                </option>
                            @endforeach
                        </select>
                    </li>

                    <li class="border-bottom pb-2">
                        <label for="searchAge">Возраст животного</label>
                        <select name="age" class="form-control" id="searchAge">
                            <option value="1"
                                @if(request()->get('age') == 1) selected @endif>
                                1 год
                            </option>
                            <option value="2"
                                @if(request()->get('age') == 2) selected @endif>
                                2 года
                            </option>
                            <option value="3"
                                @if(request()->get('age') == 3) selected @endif>
                                3 года
                            </option>
                        </select>
                    </li>

                    <button type="submit" class="btn btn-primary btn-block">Найти</button>

                </form>

{{--                <li class="pt-3">--}}
{{--                    <a class="btn-link-mos form-control text-center"  data-toggle="collapse" href="#collapseSearch" role="button" aria-expanded="false" aria-controls="collapseSearch">--}}
{{--                        <span class="row">--}}
{{--                            <span class="col justify-content-center">--}}
{{--                               Продвинутый поиск <i class="fas fa-angle-down"></i>--}}
{{--                            </span>--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="collapseSearch">--}}
{{--                        <div class="card card-body border-right-0 border-left-0 border-top-0" style="border-radius: 0">--}}
{{--                            <ul class="list-unstyled">--}}

{{--                                <li class="border-bottom">--}}
{{--                                    <label for="nameSearch">Найти по кличке:</label>--}}
{{--                                    <input id="nameSearch" class="form-control mb-3" type="text" placeholder="Введите кличку животного">--}}
{{--                                </li>--}}

{{--                                <li class="border-bottom">--}}
{{--                                    <label for="idSearch">Найти по ID метке:</label>--}}
{{--                                    <input id="idSearch" class="form-control mb-3" type="text" placeholder="Введите ID номер животного">--}}
{{--                                </li>--}}

{{--                                <li class="border-bottom">--}}
{{--                                    <label for="aoSearch">Найти по административному округу:</label>--}}
{{--                                    <input id="aoSearch" class="form-control mb-3" type="text" placeholder="Введите название АО">--}}
{{--                                </li>--}}

{{--                                <li class="border-bottom">--}}
{{--                                    <label for="shelterSearch">Найти по приюту:</label>--}}
{{--                                    <input id="shelterSearch" class="form-control mb-3" type="text" placeholder="Введите название приюта">--}}
{{--                                </li>--}}

{{--                                <li class="border-bottom">--}}
{{--                                    <label for="adoptingDate">Найти по периоду регистрации карточки:</label>--}}
{{--                                    <br>--}}
{{--                                    C<input required id="adoptingDate" class=" form-control" type="date" placeholder="" value="">--}}
{{--                                    По <input required id="adoptingDate" class=" form-control" type="date" placeholder="" value="">--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <label for="searchEx">Причина выбытия</label>--}}
{{--                                    <select class="form-control" id="searchEx">--}}
{{--                                        <option>Все</option>--}}
{{--                                        <option>Смерть</option>--}}
{{--                                        <option>Передан в собственность(под опеку)</option>--}}
{{--                                    </select>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}

            </ul>
        </div>

        <!-- Sidebar end-->

        <div class="col-9">
            <div class="container ">
                <div class="row">

{{--                    @for ($i = 0; $i < 9; $i++)--}}
{{--                        <div class="col-md-4 pb-3">--}}
{{--                            <div class="card">--}}
{{--                                <img class="card-img-top" src="" alt="Card image cap">--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title">Джони</h5>--}}
{{--                                    <p class="card-text">Харизматичный, активный, очень ласковый и невероятно доверчивый--}}
{{--                                        пес Джони. Кастрирован, привит и здоров! Рост 50 см, вес 32 кг, предположительно--}}
{{--                                        жил при дворе в деревне. Но в машине при этом ведет себя отлично и спокойно переносит дорогу</p>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row justify-content-around text-center">--}}
{{--                                        <div class="col"><a href="#" class="card-link btn btn-primary w-100">Подробнее</a></div>--}}
{{--                                        <div class="col"><a href="#" class="card-link btn btn-primary w-100">Карты</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endfor--}}

                    @foreach ($pets as $pet)

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
                                    <p class="card-text">Эта {{ $pet->type }} очень ждет Вас! Очень ласковое создание</p>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-around text-center">
                                        <div class="col"><a href="{{ route('catalog.showPet', $pet->id) }}" class="card-link btn btn-primary w-100">Подробнее</a></div>
                                        <div class="col"><a href="#" class="card-link btn btn-primary w-100">На карту</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- Пагинация -->
                <div class="row justify-content-center mt-5 display-5" style="font-size: 1.4rem">
                    {{ $pets->appends(request()->input())->links() }}
                </div>
                <!-- Конец пагинации -->
            </div>
        </div>
    </div>
    </div>
@endsection
