@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are admin in!') }}

                    You are admin user.

                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                @php($profile_image = auth()->user()->profile_image)
                <img class="rounded-circle mt-5" height="250" width="250" src="@if($profile_image == null) {{ asset("storage/profile_images/avatar.jpg") }}  @else {{ asset("storage/$profile_image") }} @endif" id="image_preview_container">
                <h4 class="mt-3">{{ auth()->user()->name }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
