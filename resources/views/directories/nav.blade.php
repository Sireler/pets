<div class="btn-group">
    <button type="button" class="btn btn-primary mb-4 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Справочники
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ route('directories.organizations') }}">Оперирующие организации</a>
        <a class="dropdown-item" href="{{ route('directories.pet_types') }}">Виды животных</a>
        <a class="dropdown-item" href="{{ route('directories.gender_types') }}">Виды пола</a>
        <a class="dropdown-item" href="{{ route('directories.ear_types') }}">Типы ушей</a>
        <a class="dropdown-item" href="{{ route('directories.tail_types') }}">Типы хвостов</a>
    </div>
</div>
