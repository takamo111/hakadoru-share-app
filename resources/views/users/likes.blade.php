@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
<div class="main_column col-12 ">
  @include('users.user')
  @include('users.tabs', ['hasArticles' => false, 'hasLikes' => true])
    <div class="row">
        <div class="main_column col-12 ">
              <!-- タブ -->
            <!-- 商品カード一覧 -->
          <div class="main_column col-md-12 ">
            <div class="row bg-secondary ">
              @foreach($articles as $article)

              <!-- 商品カード -->
                <div class="card m-2 mx-auto " style="width: 15rem;" >
                
                  <div class='card-image-main border' >
                  <img class='card-image' src="{{ $article->r_image_url_a }}" width="100%" height="180"></img>

                  </div>
                  <div class="card-body" style="height: 6rem;">
                    <h5 class="card-text text-truncate">{{ $article->title }}</h5>
                    <p class="card-text text-truncate">{{ $article->body }}</p>     
                  </div>
                  <a class="detail-button border border-primary text-center" href="{{ route('articles.show', ['article' => $article]) }}"  style="height: 3rem;">
                    <h5 class="text-primary" > 
                    <i class="fas fa-newspaper mr-1"></i>               
                      <p>レビュー詳細</p>
                    </h5>
                  </a>
                </div>
              @endforeach   
            </div>       
          </div>  
        </div>       
      </div>
    </div>
  </div> 
@endsection