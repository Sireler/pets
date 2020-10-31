<div class="btn-group">
    <button type="button" class="btn btn-primary mb-4 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Справочники
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ route('directories.shelters') }}">Приюты</a>
        <a class="dropdown-item" href="{{ route('directories.organizations') }}">Эксплуатирующие организации</a>
        <a class="dropdown-item" href="{{ route('directories.pet_types') }}">Виды животных</a>
        <a class="dropdown-item" href="{{ route('directories.gender_types') }}">Виды пола</a>
        <a class="dropdown-item" href="{{ route('directories.ear_types') }}">Типы ушей</a>
        <a class="dropdown-item" href="{{ route('directories.tail_types') }}">Типы хвостов</a>
        <a class="dropdown-item" href="{{ route('directories.death_types') }}">Причины смерти</a>
        <a class="dropdown-item" href="{{ route('directories.left_types') }}">Причины выбытия из приюта</a>
        <a class="dropdown-item" href="{{ route('directories.euthanasia_types') }}">Причины эвтанации</a>
        <a class="dropdown-item" href="{{ route('directories.breed_types') }}">Породы</a>
        <a class="dropdown-item" href="{{ route('directories.color_types') }}">Окрасы</a>
        <a class="dropdown-item" href="{{ route('directories.wool_types') }}">Типы шерсти</a>
    </div>
</div>
