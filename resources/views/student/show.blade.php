@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Student Information</h1>
        <a href="/students" class="btn btn-danger btn-sm">Back</a>
        <br>
        <br>
        <address>
            <img src="{{ asset($student->image) }}" alt="" width="120"> <br>
            Student Name: {{ $student->name }} <br>
            Address: {{ $student->address }} <br>
            City: {{ $student->city }} <br>
            Faculty: {{ $student->faculty->name}} <br>
            DOB: {{ $student->dob }} <br>
        </address>
    </div>
@endsection