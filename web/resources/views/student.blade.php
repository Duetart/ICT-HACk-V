@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Профиль студента</div>

                    <div class="card-body">
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
                                Ваш аккаунт не привязан к Telegram. Пожалуйста, привяжите аккаунт к Telegram. Код для
                                подтверждения: {{ $student->telegram_auth_code }}
                            </div>
                        @endif
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
        </div>
    </div>
@endsection
