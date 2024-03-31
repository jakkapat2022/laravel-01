<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/material-kit.css?v=3.0.4') }}" rel="stylesheet" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
.py-4 {
    padding-top: -1.5rem; 
}
</style>

<body>
</head>
<body>
          <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
  <div class="container-fluid">
    <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{ route('home') }}" rel="tooltip" data-placement="bottom" >
    ยินดีต้อนรับ
    @if(Auth::check())
        {{ Auth::user()->name }}
    @endif
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto dropdown dropdown-hover mx-2">
      @guest
        @if (Route::has('login'))
        <li class="nav-item">
            <a class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
            <a class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif

        @else
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('homepages.index') }}">หน้าแรก</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('students.index') }}">ข้อมูลนักเรียน</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('companies.index') }}">ข้อมูลบริษัท</a>
            </li>
            <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ Auth::user()->name }}">
                @php($profile_image = auth()->user()->profile_image)
                <img alt="Image placeholder" src="@if($profile_image == null) {{ asset("storage/profile_images/avatar.jpg") }}  @else {{ asset("storage/$profile_image") }} @endif">
                </a>
            <li class="nav-item dropdown dropdown-hover ">
                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}</a>
                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                    <div class="d-none d-lg-block">
                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                        Profile edit</h6>
                        <span><a class="dropdown-item" href="{{ route('profileSeting') }}">ProfileSeting</a></span></a>
                    </div>
            </li>
            
            <a class="btn btn-sm  bg-gradient-dark  mb-1 me-1 mt-1 mt-md-0" href="{{ route('home') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        @endguest
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
</div></div></div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script src="{{ asset('js/profileupdate.js') }}"></script>
</html>
