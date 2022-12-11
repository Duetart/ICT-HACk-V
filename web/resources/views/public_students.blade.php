@extends('layouts.app')
@section('content')
    <main class="container">
        <div class="d-flex ">
            <div class="row">
                @foreach($students as $student)
                    <div class="col-sm">
                        <div class="card m-1 p-0 align-right" style="width: 18rem;">
                            <img
                                src="https://cdn.iz.ru/sites/default/files/styles/1920x1080/public/article-2022-05/20210614_gaf_u39_903.jpeg.jpg?itok=arZ473cD"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$student->name}}</h5>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
