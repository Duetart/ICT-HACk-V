@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="node_modules/smart-webcomponents/source/styles/smart.default.css"/>
    <div class="h2">Заявка на проект</div>
    <form action="">

        <input class="form-control mb-2" placeholder="Название проекта">
        <textarea class="form-control mb-2" cols="30" rows="7" placeholder="Описание"></textarea>
        <h3>Тип проекта</h3>
        <select class="form-control mb-2" name="items">
            <option value="">Открытый</option>
            <option value="1">Закрытый</option>
        </select>
        <h3>Необходимые люди (2)
            <button class="btn btn-primary">+</button>
            <button class="btn btn-primary">-</button>
        </h3>
        1.
        <select class="form-control mb-2" name="items" multiple>
            <option value="">Java</option>
            <option value="1">Python</option>
            <option value="2">Менеджмент</option>
            <option value="3">Больше трёх проектов</option>
        </select>

        2.
        <select class="form-control mb-2" name="items" multiple>
            <option value="">Java</option>
            <option value="1">Python</option>
            <option value="2">Менеджмент</option>
            <option value="3">Больше трёх проектов</option>
        </select>
        <button class="btn btn-primary">Отправить заявку</button>
    </form>
    <script type="module" src="node_modules/smart-webcomponents/source/modules/smart.input.js"></script>
@endsection
