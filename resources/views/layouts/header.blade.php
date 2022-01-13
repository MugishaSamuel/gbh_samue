<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{ url('/') }}">{{-- <img src="{{ asset('client/image/Logoq.png') }}" alt=""> --}}<span style="font-weight: bold;">Vacational Homes</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/') }}">Home</a></li> 
                    <li class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a class="nav-link" href="/about">About us</a></li>
                    <li class="nav-item {{ Request::is('services') ? 'active' : '' }}"><a class="nav-link" href="/services">Services</a></li>
                    <li class="nav-item {{ Request::is('apartments-and-rooms') ? 'active' : '' }}"><a class="nav-link" href="/apartments-and-rooms">Apartment Rooms</a></li>
                    {{-- <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                        </ul>
                    </li>  --}}
                    {{-- <li class="nav-item"><a class="nav-link" href="elements.html">Elemests</a></li> --}}
                    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a class="nav-link" href="/contact-us">Contact</a></li>
                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#form" href="">{{ __('Login') }}</a>
                           {{--  href="{{ route('login') }}" --}}
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                            <a class="nav-link" data-toggle="modal" data-target="#form2" href="">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa fa-user pr-1" style="size: 50px;"></i>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}">
                                Profile
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}">
                                Settings
                            </a>
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
            </div> 
        </nav>
    </div>
</header>

<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-11">
            <p class="text-center mt-2 mb-2" id="exampleModalLabel" style="font-size: 17px !important;color: grey !important;">Use your existing account to sign in</p>
              <form method="POST" action="{{ route('login') }}">
                 @csrf
                <div class="modal-body">
                  <div class="form-group mt-2">
                    <label for="email1">Email address</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group pt-2">
                    <label for="password1">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                  </div>
                  <div class="row justify-content-center pt-2 mb-2">
                      <div class="col-md-5">
                         @if (Route::has('password.request'))
                            <a class="text-muted" class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                      </div> 
                  </div>
                    <div class="form-group ml-2">
                        <div class="row justify-content-between">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-2 btn-block text-white" style="">SIGN IN</button>
                        </div>
                      </div>
                  </div>
                  <div class="row justify-content-center mb-4">
                      <div class="col-md-5">
                         @if (Route::has('password.request'))
                            <a class="text-muted" class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                      </div> 
                  </div>
                </div>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="form2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-11">
             <p class="text-center mt-2 mb-2" id="exampleModalLabel" style="font-size: 17px !important;color: grey !important;">Create New Account</p>
              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row mb-3 mt-4">
                    <label for="name" >{{ __('Full Name') }}</label>

                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password">{{ __('Password') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-12 pb-4 mb-4 mt-2">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>