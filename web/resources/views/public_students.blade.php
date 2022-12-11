@extends('layouts.app')
@section('content')
    <div class="row row-cols-3 row-cols-md-4 g-4">
        @foreach($students as $student)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img
                        src="{{ asset($student->photo) }}"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$student->name}}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
