@extends('layouts.app')
@section('content')
    @foreach($students as $student)
        <p>{{$student->name}}</p>
    @endforeach
@endsection
