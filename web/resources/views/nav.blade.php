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
<nav class="nav nav-pills flex-column flex-sm-row">
    <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#">Студенты</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="#">Проекты</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="#">Биржа</a>
    <a class="flex-sm-fill text-sm-center nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Вход/регистрация </a>
</nav>

{{--<nav class="navbar navbar-expand-md navbar-light bg-night">--}}
{{--    <button class="navbar-toggler col-12 mb-3" type="button" data-toggle="collapse"--}}
{{--            data-target="#navbarSupportedContent"--}}
{{--            aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">--}}
{{--        <span class="font-monospace">Меню</span>--}}
{{--    </button>--}}

{{--    <div class="collapse navbar-collapse show" id="navbarSupportedContent">--}}
{{--        <a class="navbar-brand" href="client.php">--}}
{{--            <img src="../logo.svg" alt="Bootstrap" width="57" height="70">--}}
{{--        </a>--}}
{{--        <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link fs-5 <?php active('restaurant.php'); ?>" href="restaurant.php">Ресторан</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link fs-5 <?php active('cleaning.php'); ?>" href="cleaning.php">Уборка</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link fs-5 <?php active('elevator.php'); ?>" href="elevator.php">Лифт</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link fs-5 <?php active('emergency.php'); ?>" href="emergency.php">Проблема</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <span class="navbar-text"><a href="manager.php" class="btn btn-outline-success" style="color: #182628;">Hotel.Manager.Authorization</a></span>--}}
{{--    </div>--}}
{{--</nav>--}}
