<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand offset-lg-1" href="/home" style="color:steelblue;">Check-In</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      @if (!auth()->user()->admin)
      <ul class="navbar-nav offset-lg-1">
        <li class="nav-item">
          <a class="nav-link" href="/home">Home</a>
        </li>
        <li class="nav-item offset-lg-3">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item offset-lg-3">
          <a class="nav-link" href="/home#book">Booking</a>
        </li>
        <li class="nav-item offset-lg-3">
          <a class="nav-link" href="#gallary">Gallary</a>
        </li>
        <li class="nav-item col-5 offset-lg-2">
          <a class="nav-link" href="/user/viewreserv.blade.php">My reservation</a>
        </li>
      </ul>
      @elseif (auth()->user()->admin)
      <ul class="navbar-nav">
        <li class="nav-item ml-5">
          <a class="nav-link" href="/home">Home</a>
        </li>
        <li class="nav-item ml-5">
          <a class="nav-link" href="{{'/admin/viewuser.blade.php'}}">View users</a>
        </li>
        <li class="nav-item ml-5">
          <a class="nav-link" href="{{'/admin/viewreserv.blade.php'}}">View reservation</a>
        </li>
        <li class="nav-item ml-5">
          <a class="nav-link" href="{{'/admin/viewrooms.blade.php'}}">View rooms</a>
        </li>
      </ul>
      @endif
      <ul class="navbar-nav ml-auto mr-3">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  @if(!Auth::user()->admin)
                  <a class="dropdown-item" href="/user/viewprofile.blade.php">
                    My profile
                  </a>
                  <hr>
                  <a class="dropdown-item" href="/home">
                    My Booking
                  </a>
                  <hr>
                  @endif
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
    </div>
  </nav>
