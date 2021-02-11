@extends('templates.app')

@section('content')
<div class="container">
    <a href="/students" class="btn btn-danger btn-sm">Back</a>
    <div class="row">
       
        <div class="col-md-6">
            <form action="/students/{{ $student->id }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $student->name }}">
                </div>

                <div class="form-group">x
                    <label for="address">Address</label>
                    <input id="address" class="form-control" type="text" name="address" value="{{ $student->address }}">
                </div>

                <div class="form-group">
                    <label for="city">city</label>
                    <input id="city" class="form-control" type="text" name="city" value="{{ $student->city }}">
                </div>

                <div class="form-group">
                    <label for="roll">roll</label>
                    <input id="roll" class="form-control" type="text" name="roll"  value="{{ $student->roll }}">
                </div>

                <div class="form-group">
                    <label for="faculty">Text</label>
                    <select id="faculty" class="form-control" name="faculty">
                        <option value="1">Computer</option>
                        <option value="2">Civil</option>
                        <option value="3">Electronic</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="dob">DOB</label>
                    <input id="dob" class="form-control" type="date" name="dob" value="{{ $student->dob }}">
                </div>

                <button type="submit" class="btn btn-primary mt-4">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection