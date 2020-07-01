@if (app()->getLocale() == 'ar')

@else

@endif
<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
  <a class="navbar-brand" href="/">@lang('site.archive')</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarColor01">



      <ul class="navbar-nav  justify-content">
        <!--hide all of these from guest -->
          @if(Auth::check())
              <li class="nav-item active">
                <a class="nav-link" href="/home">@lang('site.home')<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/folders/index">@lang('site.upload_files')</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">@lang('site.dashboard')</a>
              </li>
          @endif
          <!-- For guest only -->
          @guest
              <li class="nav-item">
                <a class="nav-link" href="/about">@lang('site.about')</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">@lang('site.contact')</a>
              </li>
          @endguest
      </ul>


    <!-- login & register -->

    <!-- switch languages to switch  mr-auto or ml-auto -->
      @if (app()->getLocale() == 'ar')
            <ul class="navbar-nav mr-auto">
      @else
            <ul class="navbar-nav ml-auto">
      @endif

      <!--  Languages Links -->
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            @lang('site.languages')
          </a>
          <div class="dropdown-menu">
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a  class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
              @endforeach
          </div>
      </li>

        <!--  Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">@lang('site.login')</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">@lang('site.register')</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        @lang('site.Logout')
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
