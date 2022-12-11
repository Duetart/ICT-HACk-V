@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <h2 style="text-align: center">Вы можете подать свой проект на платформу краудфандинга</h2>
        </div>
        <div class="row mb-2 p-0">

            <a href="{{ route('burse.registration') }}"
               class="col-10 btn btn-outline-success btn-block">Подать
                заявку</a>

            <div class="col-2">
                @if (Route::current()->getName() == "burse.my")
                    <a href="{{ route('burse') }}"
                       class="btn btn-primary btn-block">Ко всем проектам</a>
                @else
                    <a href="{{ route('burse.my') }}"
                       class="btn btn-primary btn-block">К моим проектам</a>
                @endif
            </div>
            <div class="col-3"></div>
        </div>
        <div class="container">
            <div class="row row-cols-3 row-cols-md-4 g-4">
                @foreach($lots as $lot)
                    <div class="col">
                        <div class="card border-3 m-2 p-0" style="width: 18rem;">
                            <img
                                src="{{ asset($lot->photo) }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #221183 ;">{{$lot->name}}</h5>
                                <h6 class="card-subtitle mb-2 "
                                    style="color: #7B45EC;">{{\App\Models\User::find($lot->author)->name}}</h6>
                                <p class="card-text text-dark">{{ $lot->description }}</p>
                                <div class="row m-1 mb-1"><a href="#" class="btn btn-primary btn-block">Подробнее</a>
                                </div>
                                <div class="row m-1"><a href="#"
                                                        class="btn btn-outline-success btn-block">Поддержать</a></div>
                                @if (Route::current()->getName() == "burse.my")
                                    <div class="row m-1"><a
                                            href="{{ route("burse.edit_form", ["id" => $lot->id]) }}"
                                            class="btn btn-block">Редактировать</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
@endsection
