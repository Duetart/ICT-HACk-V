@extends('layouts.app')
@section('content')
{{--    <i class="fixed-position fa-solid fa-sitemap"></i>--}}
    <div class="row">
        @foreach($students as $student)
            <div class="col">
                <div class="card m-1 p-0 border-0" style="width: 15rem; color: #221183;">
                    <img
                        src="{{ asset($student->photo) }}"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$student->name}}</h5>
                         <h6 class="card-subtitle" style="color: #7B45EC;">{{$student->student_rating}}/5</h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
