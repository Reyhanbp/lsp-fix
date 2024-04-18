<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ReyGoal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  @stack('heads')
</head>
<body>
    <div id="app">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand">
        <img class="header" style="width: 50px; " src="{{ asset('images/logoreyhan.png') }}" alt="Logo Quick Goals"/>
            ReyGoal
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    @if (Route::has('regis.view'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('regis.view') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </div>
                </li>
            @endguest
        </ul>
        @auth
          <a class="btn px-3 btn btn-danger" href="{{ route('logout') }}">Logout</a>
        @endauth
        <!-- @guest
          <a class="btn px-3 me-2 btn-outline-primary" href="{{ route('regis.view') }}">Daftar</a>
          <a class="btn px-3 btn-primary" href="{{ route('login') }}">Login</a>
        @endguest -->
      </div>
    </div>
  </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @stack('scripts')
</body>
<style>
    .navbar {
        background-color: #f8f9fa; /* Warna latar belakang navbar */
        padding: 10px 0; /* Padding atas dan bawah navbar */
    }

    .navbar-brand img {
        max-width: 100%; /* Agar logo tidak melebihi lebar container */
    }

    .navbar-nav .nav-link {
        color: #000; /* Warna teks link navbar */
        padding: 0.5rem 1rem; /* Padding atas dan bawah serta kiri dan kanan link navbar */
    }

    .navbar-nav .nav-link:hover {
        color: #007bff; /* Warna teks link navbar saat dihover */
    }

    .btn-outline-primary {
        color: #007bff; /* Warna teks tombol outline primary */
        border-color: #007bff; /* Warna border tombol outline primary */
    }

    .btn-outline-primary:hover {
        background-color: #007bff; /* Warna latar belakang tombol outline primary saat dihover */
        color: #fff; /* Warna teks tombol outline primary saat dihover */
    }

    .btn-danger {
        background-color: #dc3545; /* Warna latar belakang tombol danger */
        border-color: #dc3545; /* Warna border tombol danger */
        color: #fff; /* Warna teks tombol danger */
    }

    .btn-danger:hover {
        background-color: #c82333; /* Warna latar belakang tombol danger saat dihover */
        border-color: #bd2130; /* Warna border tombol danger saat dihover */
    }
</style>

</html>
