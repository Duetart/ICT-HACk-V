@extends('layouts.app')
@section('content')
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
                            <img src="{{ asset($student->photo) }}"
                                 class="img-thumbnail p-0 border-0 float-start">
                        </figure>
                    </div>
                    <div class="col-9">
                        <div class="row">
                            <div class="col">
                                <div class="h4 mb-4">{{ $student->name }}</div>
                                <div class="h6">Рейтинг: {{$student->student_rating}}/5</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="h6">Статус: {{ $student->student_employment_status}}</div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="h5">Образование</div>
                        <pre>{{ $student->education }}</pre>
                    </div>

                    <div class="row mb-2">
                        <div class="h5">Hard & soft skills</div>
                        <pre>{{ $student->skills }}</pre>
                    </div>

                    <div class="row mb-2">
                        <div class="h5">Участие в проектах</div>
                        <pre>{{ $student->projects_participation }}</pre>
                    </div>

                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
             tabindex="0">

            <div class="row mt-4">
                <div class="h4">Выберете теги</div>
                <div class="col-12">
                    @foreach($student->get_tags() as $tag)
                        <span class="badge rounded-pill text-bg-warning align-middle">{{ $tag[0]->name }}<button
                                type="button"
                                class="btn-close"
                                aria-label="Закрыть"></button>  </span>
                    @endforeach
                </div>
                <form class="mt-2 col-md-4" action="{{ route('add_tag') }}" method="POST">
                    @csrf
                    <input type="text" name="tag" class="form-control" placeholder="Добавить тег">
                    <button class="mt-2 btn btn-primary" type="submit">Добавить</button>
                </form>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <form method="POST" action="{{ route('update') }}">
                        @csrf
                        <div class="h3 mt-2">Расскажите о себе</div>
                        <div class="row mb-3">
                            <div class="h4">Образование</div>
                            <div class="col-md-6">
                                    <textarea
                                        name="education" class="form-control"
                                        rows="5">{{ $student->education }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="h4">Hard & soft skills</div>
                            <div class="col-md-6">
                                    <textarea class="form-control"
                                              rows="5"
                                              name="skills">{{ $student->skills }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="h4">Участие в проектах</div>
                            <div class="col-md-6">
                                    <textarea class="form-control"
                                              rows="5"
                                              name="projects_participation">{{ $student->projects_participation }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="h4">Резюме</div>
                            <div class="col-md-6">
                                <input type="file" class="form-control" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <button class="btn btn-primary" type="submit">Сохранить данные</button>
                        </div>
                    </form>
                </div>
            </div>

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


            <div class="row">
                {{--                        @foreach($projects as $project)--}}
                {{--                            <div class="col-sm">--}}

                {{--                                <div class="card m-2 p-0" style="width: 18rem;">--}}
                {{--                                    <img--}}
                {{--                                        src="https://cdn.iz.ru/sites/default/files/styles/1920x1080/public/article-2022-05/20210614_gaf_u39_903.jpeg.jpg?itok=arZ473cD"--}}
                {{--                                        class="card-img-top" alt="...">--}}
                {{--                                    <div class="card-body">--}}
                {{--                                        <h5 class="card-title">{{$project->name}}</h5>--}}
                {{--                                        <h6 class="card-subtitle mb-2 text-muted">{{\App\Models\User::find($project->company_id)->name}}</h6>--}}
                {{--                                        <p class="card-text">{{\Illuminate\Support\Str::limit($project->description, 100, $end='...')}}</p>--}}
                {{--                                        <button type="button" class="btn btn-light" data-bs-toggle="modal"--}}
                {{--                                                data-bs-target="#my_project1">--}}
                {{--                                            Подробнее--}}
                {{--                                        </button>--}}
                {{--                                        <div class="modal fade" id="my_project1" tabindex="-1"--}}
                {{--                                             aria-labelledby="my_projectLabel1" aria-hidden="true">--}}
                {{--                                            <div class="modal-dialog modal-lg">--}}
                {{--                                                <div class="modal-content">--}}
                {{--                                                    <div class="modal-header">--}}
                {{--                                                        <h5 class="modal-title"--}}
                {{--                                                            id="my_projectLabel1">{{$project->name}}</h5>--}}
                {{--                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"--}}
                {{--                                                                aria-label="Закрыть"></button>--}}
                {{--                                                    </div>--}}
                {{--                                                    <div class="modal-body">--}}
                {{--                                                        {{$project->description}}\--}}

                {{--                                                    </div>--}}
                {{--                                                    <div class="modal-footer">--}}
                {{--                                                        <button type="button" class="btn btn-secondary"--}}
                {{--                                                                data-bs-dismiss="modal">Закрыть--}}
                {{--                                                        </button>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}

                {{--                                    </div>--}}
                {{--                                </div>--}}

                {{--                            </div>--}}
                {{--                        @endforeach--}}
            </div>

        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
             tabindex="0">

        </div>
    </div>

    <floor>
    </floor>



@endsection
