@extends('layouts.app')

@section('content')
<body>
    <div class="container mt-10">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Edit Company</h2>
            </div>
            <div>
                <a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
            </div>  
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Company Name</strong>
                            <input type="text" name="name" value="{{ $company->name }}" class="form-control" placeholder="Company Name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Company email</strong>
                            <input type="email" name="email" value="{{ $company->email }}" class="form-control" placeholder="Company email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Company address</strong>
                            <input type="text" name="address" value="{{ $company->address }}" class="form-control" placeholder="Company address">
                            @error('address')
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
</html>
@endsection