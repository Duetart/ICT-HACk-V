@extends('layouts.app')
@section('content')
    <div class="row">
    @foreach($projects as $project)
        <div class="col">
            <div class="card border-0 m-2 p-0 bg-light" style="width: 15rem; color: #221183;">
                <img
                    src="https://cdn.iz.ru/sites/default/files/styles/1920x1080/public/article-2022-05/20210614_gaf_u39_903.jpeg.jpg?itok=arZ473cD"
                    class="card-img-top" alt="...">
                <div class="card-body ">
                    <h5 class="card-title">{{$project->name}}</h5>
                    <h6 class="card-subtitle mb-2" style="color: #7B45EC;">{{\App\Models\User::find($project->company_id)->name}}</h6>
                    <p class="card-text text-dark">{{\Illuminate\Support\Str::limit($project->description, 100, $end='...')}}</p>
                    <button type="button" class="btn btn-light border border-secondary border-opacity-50" style="color: #52A874 ;" data-bs-toggle="modal"
                            data-bs-target="#my_project1">
                        Подробнее
                    </button>
                    <div class="modal fade" id="my_project1" tabindex="-1"
                         aria-labelledby="my_projectLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"
                                        id="my_projectLabel1">{{$project->name}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Закрыть"></button>
                                </div>
                                <div class="modal-body">
                                    {{$project->description}}

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
    @endforeach
    </div>
@endsection
