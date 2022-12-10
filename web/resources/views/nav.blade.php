<?php

function active($current_page)
{
    $url_array = explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if ($current_page == $url) {
        echo 'active'; //class name in css
    }
}

?>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid h5">
        <a class="navbar-brand" href="/">ICT.Hack V</a>
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
                        <li><a class="dropdown-item" href="#">Редактировать профиль</a></li>
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
<?php
if (isset($_GET['alert'])) {
    if ($_GET['alert'] == 'success') {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Заявка принята!</strong> В случае, если Ваши планы изменятся, сообщите менеджеру.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
    }
}
?>
