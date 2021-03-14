@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')
  <div class="container">
    <div class="card mt-3">
      <div class="card-body">
        <div class="d-flex flex-row">
          <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
            <i class="fas fa-user-circle fa-3x"></i>
          </a>
          @if( Auth::id() !== $user->id )
            <follow-button
              class="ml-auto"
              :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))'
              :authorized='@json(Auth::check())'
              endpoint="{{ route('users.follow', ['name' => $user->name]) }}"
            >
            </follow-button>
          @endif
        </div>
        <h2 class="h5 card-title m-0">
          <a href="{{ route('users.show', ['name' => $user->name]) }}" class="text-dark">
            {{ $user->name }}
          </a>
        </h2>
      </div>
      <div class="card-body">
        <div class="card-text">
          <a href="" class="text-muted">
          {{ $user->count_followings }} フォロー 
          </a>
          <a href="" class="text-muted">
          {{ $user->count_followers }} フォロワー
          </a>
        </div>
      </div>
    </div>

    <ul class="nav nav-tabs nav-justified mt-3">
      <li class="nav-item">
        <a class="nav-link text-muted active"
           href="{{ route('users.show', ['name' => $user->name]) }}">
          記事
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-muted"
           href="">
          いいね
        </a>
      </li>
    </ul>
    <div class="row">
        <div class="main_column col-12 ">
              <!-- タブ -->
            <!-- 商品カード一覧 -->
          <div class="main_column col-md-12 ">
            <div class="row bg-secondary ">
              @foreach($articles as $article)

              <!-- 商品カード -->
                <div class="card m-4 " style="width: 15rem;" >
                
                  <div class='card-image-main border' >
                  <img class='card-image' src="{{ $article->r_image_url_a }}" width="100%" height="180"></img>

                  </div>
                  <div class="card-body" style="height: 6rem;">
                    <h5 class="card-text text-truncate">{{ $article->title }}</h5>
                    <p class="card-text text-truncate">{{ $article->body }}</p>
                    
                  </div>
                  <a class=" border border-primary text-center animated swing infinite  " href="{{ route('articles.show', ['article' => $article]) }}"  style="height: 3rem;">
                    <h5 class="text-primary" > 
                    <i class="fas fa-newspaper mr-1"></i>               
                      レビュー詳細</p>
                    </h5>
                  </a>
                </div>
              @endforeach   
            </div>
            

          </div>  
        </div>       
    </div>
  </div>
@endsection