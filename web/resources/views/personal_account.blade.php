<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ICT.Hack V</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: #e3e3e3;
        }
    </style>
</head>
<body>
<header class="antialiased container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid h5">
            <a class="navbar-brand" href="#">ICT.Hack V</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Студенты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Проекты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Биржа</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary disable text-bg-primary">Георгий Кузьмин Игоревич
                        </button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split "
                                data-bs-toggle="dropdown" aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Профиль</a></li>
                            <li><a class="dropdown-item" href="/profile.edit">Редактировать профиль</a></li>
                            <li><a class="dropdown-item" href="#">Мои проекты</a></li>
                            <li><a class="dropdown-item" href="#">Избранные проекты</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Выйти</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>

<main class="container">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active"  style="width: 210px;" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                    type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Профиль
            </button>
            <button class="nav-link" id="v-pills-profile-tab" style="width: 210px;"  data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                    type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Редактировать профиль
            </button>
            <button class="nav-link" id="v-pills-disabled-tab"  style="width: 210px;"    data-bs-toggle="pill"
                    data-bs-target="#v-pills-my-project" type="button" role="tab" aria-controls="v-pills-my-project"
                    aria-selected="false">Мои проекты
            </button>
            <button class="nav-link"  id="v-pills-messages-tab" style="width: 210px;"  data-bs-toggle="pill" data-bs-target="#v-pills-messages"
                    type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Избранные проекты
            </button>
        </div>

        <div class="tab-content m-3 mt-0" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
                 tabindex="0">
                <div class="row ml">
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
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success m-1" type="button" disabled>2 проекта</button>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-9">
                            <button class="btn btn-outline-danger m-1" type="button" disabled>front-end</button>
                            <button class="btn btn-outline-primary m-1" type="button" disabled>back-end</button>
                            <button class="btn btn-outline-warning m-1" type="button" disabled>react</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                 tabindex="0">
                <form class="row needs-validation" novalidate>
                    <div class="h3 mt-2">Сменить пароль</div>
                    <div class="col-md-4 mb-2">
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Введите старый пароль" required>
                        <div class="valid-feedback">
                            Все хорошо!
                        </div>
                    </div>
                    <div class="col-md-8"> </div>
                    <div class="col-md-4 mb-2">
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Введите новый пароль" required>
                        <div class="valid-feedback">
                            Все хорошо!
                        </div>
                    </div>
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Повторите новый пароль" required>
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
            <div class="tab-pane fade" id="v-pills-my-project" role="tabpanel" aria-labelledby="v-pills-disabled-tab"
                 tabindex="0">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-success" type="button">добавить проект</button>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card m-2 ml-0" style="width: 18rem;">
                            <img src="https://cdn.iz.ru/sites/default/files/styles/1920x1080/public/article-2022-05/20210614_gaf_u39_903.jpeg.jpg?itok=arZ473cD" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">IT-кресло</h5>
                                <p class="card-text">Это кресло будет вашим хорошим другом. Оно легко трансформируется в кровать!</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#my_project1">
                                    Подробнее
                                </button>

                                <!-- Модальное окно для 1 -->
                                <div class="modal fade" id="my_project1" tabindex="-1" aria-labelledby="my_projectLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="my_projectLabel1">Заголовок модального окна</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                            </div>
                                            <div class="modal-body">
                                                ???
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                   <div class="col-4">
                    <div class="card m-2" style="width: 18rem;">
                        <img src="https://img.championat.com/c/1350x759/news/big/p/y/kogda-nuzhno-otdavat-rebjonka-v-sport-rekomendacii_1574181249956324555.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Перчатки для баскетбола</h5>
                            <p class="card-text">Наноперчатки для баскетбола отличаются высокой цепкостью и износостойкостью.</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#my_project2">
                                Подробнее
                            </button>

                            <!-- Модальное окно для 2 -->
                            <div class="modal fade" id="my_project2" tabindex="-1" aria-labelledby="my_projectLabel2" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="my_projectLabel2">Заголовок модального окна</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                        </div>
                                        <div class="modal-body">
                                            !!!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-4">
                        <div class="card m-2" style="width: 18rem;">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7QyjW7OJL1cV_wqRFtGGK_Np2juCshL1xlg&usqp=CAU" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Передовой трактор</h5>
                                <p class="card-text">Благодаря команде из АУ, была разработана более крепкая конструкция тракторов.</p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#my_project3">
                                    Подробнее
                                </button>

                                <!-- Модальное окно для 3 -->
                                <div class="modal fade" id="my_project3" tabindex="-1" aria-labelledby="my_projectLabel3" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="my_projectLabel3">Заголовок модального окна</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
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
                 tabindex="0">...
            </div>
        </div>
    </div>
</main>
<floor>

</floor>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/app.js"></script>
</html>

