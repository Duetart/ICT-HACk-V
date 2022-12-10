@extends('layouts.app')
@section('content')
    @foreach($projects as $project)
        <div class="card">
            <div class="card-header">
                <h3>{{ $project->name }}</h3>
            </div>
            <div class="card-body">
                <p>{{ $project->description }}</p>
                <p>Компания: {{ \App\Models\User::find($project->company_id)->name }}</p>
            </div>
        </div>
        <hr>
    @endforeach
@endsection
