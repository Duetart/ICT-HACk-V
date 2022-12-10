@extends('layouts.app')
@section('content')

    <main class="container">
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" style="width: 210px;" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home"
                        type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Профиль
                </button>
                <button class="nav-link" id="v-pills-profile-tab" style="width: 210px;" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile"
                        type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Редактировать
                    профиль
                </button>
                <button class="nav-link" id="v-pills-disabled-tab" style="width: 210px;" data-bs-toggle="pill"
                        data-bs-target="#v-pills-my-project" type="button" role="tab" aria-controls="v-pills-my-project"
                        aria-selected="false">Мои проекты
                </button>
                <button class="nav-link" id="v-pills-messages-tab" style="width: 210px;" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages"
                        type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Избранные
                    проекты
                </button>
            </div>

            <div class="tab-content m-3 mt-0" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab"
                     tabindex="0">
                    <div class="row ml">
                        <div class="col-12">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if ($student->verification_status == 'uncompleted')
                                <div class="alert alert-danger" role="alert">
                                    Ваш аккаунт не подтвержден! Для подтверждения аккаунта, заполните все поля ниже.
                                </div>
                            @endif
                            @if ($student->verification_status == 'pending')
                                <div class="alert alert-warning" role="alert">
                                    Ваш аккаунт находится на проверке. Пожалуйста, подождите.
                                </div>
                            @endif
                            @if ($student->verification_status == 'rejected')
                                <div class="alert alert-danger" role="alert">
                                    Ваш аккаунт отклонен. Пожалуйста, заполните все поля ниже и отправьте заявку на
                                    проверку.
                                </div>
                            @endif
                            @if($student->no_telegram())
                                <div class="alert alert-danger" role="alert">
                                    Ваш аккаунт не привязан к Telegram. Пожалуйста, привяжите аккаунт к Telegram. Код
                                    для
                                    подтверждения: {{ $student->telegram_auth_code }}
                                </div>
                            @endif
                        </div>

                        <div class="col-3 p-o ml-3">
                            <figure class="figure">
                                <img src="https://pbs.twimg.com/media/FVokXFJWYAMOsGe.png"
                                     class="img-thumbnail p-0 border-0 float-start">
                                <figcaption class="figure-caption">В системе с 2022 года.</figcaption>
                            </figure>
                        </div>
                        <div class="col-9">
                            <div class="row mb-2">
                                <div class="col">
                                    <div class="h4">Котенок Ра Андреевич</div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <div class="h5">Образование: НИУ ВШЕ магистратура</div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <div class="h5">Статус: занят</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <span class="badge rounded-pill text-bg-success p-1.9 m-1 align-middle">2 проекта <button type="button" class="btn-close align-middle" aria-label="Закрыть"></button></span>
                                <span class="badge rounded-pill text-bg-danger p-1.9 m-1 align-middle">5 лет разработки <button type="button" class="btn-close align-middle" aria-label="Закрыть"></button></span>
                                <span class="badge rounded-pill text-bg-warning p-1.9 m-1 align-middle">Middle <button type="button" class="btn-close align-middle" aria-label="Закрыть"></button></span>
                                <span class="badge rounded-pill text-bg-primary p-1.9 m-1 align-middle">Success <button type="button" class="btn-close align-middle" aria-label="Закрыть"></button></span>
                                <span class="badge rounded-pill text-bg-secondary p-1.9 m-1 align-middle">Success <button type="button" class="btn-close align-middle" aria-label="Закрыть"></button></span>
                                <span class="badge rounded-pill text-bg-info p-1.9 m-1 align-middle">Success <button type="button" class="btn-close align-middle" aria-label="Закрыть"></button></span>


                            </div>
                            <div class="col-sm">
                                <button class="btn btn-outline-danger m-1" type="button" disabled>front-end</button>
                                <button class="btn btn-outline-primary m-1" type="button" disabled>back-end</button>
                                <button class="btn btn-outline-warning m-1" type="button" disabled>react</button>
                                <button class="btn btn-outline-warning m-1" type="button" disabled>react</button>
                                <button class="btn btn-outline-warning m-1" type="button" disabled>react</button>
                                <button class="btn btn-outline-warning m-1" type="button" disabled>react</button>
                                <button class="btn btn-outline-warning m-1" type="button" disabled>react</button>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <form method="POST" action="{{ route('update') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="info" class="col-md-4 col-form-label text-md-end">Расскажите о
                                        себе</label>

                                    <div class="col-md-6">
                        <textarea style="width: 100%"
                                  name="information">{{ $student->information }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Сохранить
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                     tabindex="0">
                    <form class="row needs-validation" novalidate>
                        <div class="h3 mt-2">Сменить пароль</div>
                        <div class="col-md-4 mb-2">
                            <input type="text" class="form-control" id="validationCustom01"
                                   placeholder="Введите старый пароль" required>
                            <div class="valid-feedback">
                                Все хорошо!
                            </div>
                        </div>
                        <div class="col-md-8"></div>
                        <div class="col-md-4 mb-2">
                            <input type="text" class="form-control" id="validationCustom01"
                                   placeholder="Введите новый пароль" required>
                            <div class="valid-feedback">
                                Все хорошо!
                            </div>
                        </div>
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="text" class="form-control" id="validationCustom01"
                                   placeholder="Повторите новый пароль" required>
                            <div class="valid-feedback">
                                Все хорошо!
                            </div>
                        </div>
                        <div class="col-md-8">

                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Отправить форму</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-my-project" role="tabpanel"
                     aria-labelledby="v-pills-disabled-tab"
                     tabindex="0">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-success" type="button">добавить проект</button>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="card m-2 ml-0" style="width: 18rem;">
                                <img
                                    src="https://cdn.iz.ru/sites/default/files/styles/1920x1080/public/article-2022-05/20210614_gaf_u39_903.jpeg.jpg?itok=arZ473cD"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">IT-кресло</h5>
                                    <p class="card-text">Это кресло будет вашим хорошим другом. Оно легко
                                        трансформируется в кровать!</p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#my_project1">
                                        Подробнее
                                    </button>

                                    <!-- Модальное окно для 1 -->
                                    <div class="modal fade" id="my_project1" tabindex="-1"
                                         aria-labelledby="my_projectLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="my_projectLabel1">Заголовок модального
                                                        окна</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Закрыть"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ???
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Закрыть
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card m-2" style="width: 18rem;">
                                <img
                                    src="https://img.championat.com/c/1350x759/news/big/p/y/kogda-nuzhno-otdavat-rebjonka-v-sport-rekomendacii_1574181249956324555.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Перчатки для баскетбола</h5>
                                    <p class="card-text">Наноперчатки для баскетбола отличаются высокой цепкостью и
                                        износостойкостью.</p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#my_project2">
                                        Подробнее
                                    </button>

                                    <!-- Модальное окно для 2 -->
                                    <div class="modal fade" id="my_project2" tabindex="-1"
                                         aria-labelledby="my_projectLabel2" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="my_projectLabel2">Заголовок модального
                                                        окна</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Закрыть"></button>
                                                </div>
                                                <div class="modal-body">
                                                    !!!
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Закрыть
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card m-2" style="width: 18rem;">
                                <img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7QyjW7OJL1cV_wqRFtGGK_Np2juCshL1xlg&usqp=CAU"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Передовой трактор</h5>
                                    <p class="card-text">Благодаря команде из АУ, была разработана более крепкая
                                        конструкция тракторов.</p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#my_project3">
                                        Подробнее
                                    </button>

                                    <!-- Модальное окно для 3 -->
                                    <div class="modal fade" id="my_project3" tabindex="-1"
                                         aria-labelledby="my_projectLabel3" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="my_projectLabel3">Заголовок модального
                                                        окна</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Закрыть"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Закрыть
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                     tabindex="0">

                </div>
            </div>
        </div>
    </main>
    <floor>
    </floor>

@endsection
