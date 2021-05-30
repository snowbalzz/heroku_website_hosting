<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"  type="/text/css" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  </head>
<title>
</title>

<nav class="navbar is-link" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://github.com/snowbalzz">
        <img src="/img/github.png" alt="">
      </a>
  
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="/">
          Home
        </a>
        @if (Route::has('login'))
            @auth
                <a class="navbar-item" href="/article">Articles</a>
            @endauth
        @endif
        </div>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            @if (Route::has('login'))
            @auth
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="">
              @csrf
              <button class="navbar-item button is-light" type="submit">Log out</button>
            </form>
            @else
                <a href="{{ route('login') }}" class="navbar-item button is-light">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="navbar-item button is-primary">Register</a>
            @endif
            @endauth
            @endif
          </div>
        </div>
      </div>
      </div>
    </div>
  </nav>


@yield('content')

</html>
