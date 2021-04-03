<!doctype html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Hakadoru=Share') }}</title>

      <!-- Scripts -->
      <script src="{{ mix('js/app.js') }}"></script>
      <script src="{{ asset('js/app.js') }}" defer></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      
      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

      <!-- Styles -->
      <link href="{{ mix('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
      <link href="{{ asset('css/utility.css') }}" rel="stylesheet">

      
      @yield('css')
    </head>
    <body>
      <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
          <div class="container">
            <!-- ヘッダー左側 -->
            <a class="navbar-brand" href="{{ url('/') }}">
              <img class='navbar-logo' src="{{ asset('images/logo.png') }}">
              {{ config('ハカドル=シェア', 'Hakadoru=Share') }}
            </a>
            <!-- ヘッダー右側  -->
            <ul class="navbar-nav ml-auto">
              @guest
                <li class="nav-item mx-1 underline_effect">
                  <a href="" class="nav-link text-center p-0 text-white">
                  <i class="fa fa-question-circle fa-lg"></i> 
                    <span class="text-center d-block" style="font-size: 10px;">このサイトについて</span>
                  </a>
                </li>              
                <li class="nav-item mx-1 underline_effect">
                  <a href=" /articles" class="nav-link text-center p-0 text-white">
                  <i class="fas fa-comment fa-lg"></i> 
                    <span class="text-center d-block" style="font-size: 10px;">レビューを見る</span>
                  </a>
                </li> 
                  <li class="nav-item mx-1 underline_effect">
                  <a href="{{route('searchs.index')}}" class="nav-link text-center p-0 text-white">
                    <i class="fa fa-search fa-lg"></i> 
                    <span class="text-center d-block" style="font-size: 10px;">商品検索</span>
                  </a>
                </li> 
                @if (Route::has('register'))
                <li class="nav-item mx-1 underline_effect">
                  <a href="{{ route('login') }}" class="nav-link text-center p-0 text-white">
                    <i class="fa fa-door-open fa-lg"></i> 
                    <span class="text-center d-block" style="font-size: 10px;">ログイン</span>
                  </a>
                </li> 
                <li class="nav-item mx-1 underline_effect">
                  <a href="{{ route('register') }}" class="nav-link text-center p-0 text-white">
                    <i class="fa fa-user-plus fa-lg"></i>
                    <span class="text-center d-block" style="font-size: 10px;">新規登録</span>
                  </a>
                </li>
                @endif
                @else
                <!-- ヘッダー右側 ログイン後 -->
                <li class="nav-item mx-1 underline_effect">
                  <a href="" class="nav-link text-center p-0 text-white">
                    <i class="fa fa-question-circle fa-lg"></i> 
                      <span class="text-center d-block" style="font-size: 10px;">このサイトについて</span>
                  </a>
                </li>
                  
                <li class="nav-item mx-1 underline_effect">
                  <a href=" /articles" class="nav-link text-center p-0 text-white">
                    <i class="fas fa-comment fa-lg"></i> 
                    <span class="text-center d-block" style="font-size: 10px;">レビューを見る</span>
                  </a>
                </li>    
                <li class="nav-item mx-1 underline_effect">
                  <a href="{{ route('articles.create') }}" class="nav-link text-center p-0 text-white">
                    <i class="fa fa-edit fa-lg"></i> 
                    <span class="text-center d-block" style="font-size: 10px;">レビューを投稿</span>
                  </a>
                </li> 
                <li class="nav-item mx-1 underline_effect">
                  <a href="{{route('searchs.index')}}" class="nav-link text-center p-0 text-white">
                    <i class="fa fa-search fa-lg"></i> 
                    <span class="text-center d-block" style="font-size: 10px;">商品検索</span>
                  </a>
                <!-- ドロップダウン -->
                @auth
                <li class="av-item mx-1 underline_effect">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle"></i>
                 </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <button class="dropdown-item" type="button" onclick="location.href='{{ route("users.show", ["name" => Auth::user()->name]) }}'">
                      マイページ
                    </button>
                  <div class="dropdown-divider"></div>
                    <button form="logout-button" class="dropdown-item" type="submit">
                      ログアウト
                    </button>
                  </div>
                </li>
                <form id="logout-button" method="POST" action="{{ route('logout') }}">
                @csrf
                </form>
                @endauth
              @endguest
            </ul>
          </div>
        </nav>
        <main class="main">
          @yield('content')
        </main>
        <footer class='footer p20'>
          <small class='copyright'>Hakadoru=Share 2021 copyright</small>
        </footer>
      </div>


      <!-- JQuery -->
      
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>

    </body>
  </html>
