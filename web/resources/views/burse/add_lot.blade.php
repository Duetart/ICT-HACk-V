@extends('layouts.app')
@section('content')
    <form action="{{ route('burse.registration') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Название проекта</label>
            <input class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание проекта и целей</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Фотография продукта (если есть)</label>
            <input class="form-control" type="file" id="photo" name="photo">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Отправить проект</button>
        </div>

    </form>
@endsection
