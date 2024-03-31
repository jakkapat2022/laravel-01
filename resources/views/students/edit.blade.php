@extends('layouts.app')

@section('content')
<body>
    <div class="container mt-10">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Edit Students</h2>
            </div>
            <div>
                <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
            </div>  
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Students id</strong>
                            <input type="text" name="id_student" value="{{ $student->id_student }}" class="form-control" placeholder="Students id">
                            @error('id_student')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Student name</strong>
                            <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="Student name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Student address</strong>
                            <input type="text" name="address" value="{{ $student->address }}" class="form-control" placeholder="Student address">
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Student phone</strong>
                            <input type="text" name="phone" value="{{ $student->phone }}" class="form-control" placeholder="Student phone">
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Student email</strong>
                            <input type="email" name="email" value="{{ $student->email }}" class="form-control" placeholder="Student email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                    <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                     </div>
                </div>
            </form>
        </div>
    </div>
@endsection