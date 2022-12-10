{{ dd($students) }}
@foreach($students as $student)
    <p>{{$student->name}}</p>
@endforeach
