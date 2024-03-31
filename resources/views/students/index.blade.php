@extends('layouts.app')

@section('content')
<div id="app">
    <div class="container mt-10">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Table Students</h2>
            </div>
            <div class="mt-3">
                <a href="{{ route('students.create') }}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
</svg> Create Data Students</a>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert-success mt-3">
                <P>{{ $message }}</P>
            </div>
            @endif

            <table class="table table-light table-bordered mt-3 text-center">
                <tr class="">
                    <th>Image Student</th>
                    <th>ID_Student</th>
                    <th>Students Name</th>
                    <th>Students Address</th>
                    <th>Students phone</th>
                    <th>Students email</th>
                    <th width="200px">Action</th>
                </tr>
                @foreach($students as $student)
                <tr>
                    <td><img class="rounded-circle" height="100" width="100" src="{{ url('public/'.$student->photo) }}"></td>
                    <td>{{ $student->id_student }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <form action="{{ route('students.destroy' , $student->id) }}" method="POST">
                        <a href="{{ route('students.edit' ,$student->id) }}" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> Edit</a>
                            @csrf
                            @method('DELETE')
                            <button typr="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg> Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach   
            </table>
            {!! $students->links('pagination::bootstrap-5') !!}
        </div>
            <div class="mt-3">
                <a href="{{ route('admin.home') }}" class="btn btn-success">back</a>
            </div>
    </div>
</div>
@endsection

