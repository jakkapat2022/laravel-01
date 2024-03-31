@extends('layouts.app')

@section('content')
<body>
    <div class="container mt-10">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Add students</h2>
            </div>
            <div>
                <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
            </div>  
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Students id</strong>
                            <input type="text" name="id_student" class="form-control" placeholder="Students id">
                            @error('is_student')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Students Name</strong>
                            <input type="text" name="name" class="form-control" placeholder="Students Name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Students Address</strong>
                            <input type="text" name="address" class="form-control" placeholder="Students Address">
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Students phone</strong>
                            <input type="text" name="phone" class="form-control" placeholder="Students phone">
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Students Email</strong>
                            <input type="email" name="email" class="form-control" placeholder="Students Email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Students photo</strong>
                            <input type="file" name="photo" class="form-control" id="photo" placeholder="Students Email">
                            @error('photo')
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
</body>
@endsection