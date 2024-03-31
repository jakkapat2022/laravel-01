@extends('layouts.app')

@section('content')
<body>
    <div class="container mt-10">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Wellcome to Laravel 9 Example</h2>
            </div>
            <div>
                <a href="{{ route('companies.create') }}" class="btn btn-success">Create Company</a>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert-success">
                <P>{{ $message }}</P>
            </div>
            @endif

            <table class="table table-light table-bordered mt-3">
                <tr class="">
                    <th>No.</th>
                    <th>Company Name</th>
                    <th>Company Email</th>
                    <th>Company Address</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->address }}</td>
                    <td>
                        <form action="{{ route('companies.destroy' , $company->id) }}" method="POST">
                            <a href="{{ route('companies.edit' ,$company->id) }}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button typr="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach   
            </table>
            {!! $companies->links('pagination::bootstrap-5') !!}
        </div>
            <div class="mt-3">
                <a href="{{ route('admin.home') }}" class="btn btn-success">back</a>
            </div>
    </div>
</body>
</html>
@endsection