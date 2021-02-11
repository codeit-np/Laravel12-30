@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-sm mt-4" id="datatable">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Roll</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
    
                    <tbody>
                       @foreach ($students as $key => $student)
                           <tr>
                               <td> {{ ++$key }} </td>
                               <td>{{ $student->name }}</td>
                               <td>{{ $student->address }}</td>
                               <td>{{ $student->city }}</td>
                               <td>{{ $student->roll }}</td>
                               <td><img src="{{ $student->image }}" alt="" width="64"></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <a href="/students/{{ $student->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="/students/{{ $student->id }}" class="btn btn-primary btn-sm">Show</a>
                                        </div>
                                        <div class="col">
                                            <form action="/students/{{ $student->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                   
                                   
                                  
                               </td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
    
                {{ $students->render('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection