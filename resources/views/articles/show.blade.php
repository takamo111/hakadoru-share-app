@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')


<div class="container">
  <div class="pb-3">
    <div class="row justify-content-center">
      <div class="col-md-10 mt-3">
        <div class="card">
          <h5 class="card-header">
            <a href="{{ route('users.show', ['name' => $article->user->name]) }}">投稿者：{{ $article->user->name }}</a>
          </h5>
          <div class="card-body">
            <div>
              <h2> {{ $article->title }} </h2>
            </div>        
              <div class="card mb20 ">
                <div class="card-body border ">
                  <div class='image-wrapper'><img class='book-image' src="{{ $article->r_image_url_a }}"></div>
                  <div class='image-wrapper'><img class='book-image' src="{{ $article->r_image_url_b }}"></div>
                  <div class='image-wrapper'><img class='book-image' src="{{ $article->r_image_url_c }}"></div>
                </div>
              </div>
              <div class="card-body border">
              <h5> {{ $article->body }} </h5>
            </div>
            <table class="table table-striped my-4" style="color: rgb(80, 80, 80);">
              <tbody>
                <tr>
                <td class="row" style=" margin: 0;" >
                  <div class="col-1 font-weight-bold" style="padding: 0;">商品名</div>
                  <div class="col-11" style="padding: 0;">{{ $article->r_name }} </div>
                </td>
                </tr>
                <td class="row" style=" margin: 0;" >
                  <div class="col-1 font-weight-bold" style="padding: 0;"> 説明</div>
                  <div class="col-11" style="padding: 0;">{{ $article->r_caption }} </div>
                </td>
                </tr>
                <tr>
                  <td class="row" style=" margin: 0;" >
                    <div class="col-1 font-weight-bold" style="padding: 0;"> URL</div>
                    <a  class="col-11" style="padding: 0;" href="{{ $article->r_item_url }}">{{ $article->r_item_url }}</a>
                  </td>
                <tr>
                  <td class="row" style=" margin: 0;" >
                    <div class="col-1 font-weight-bold" style="padding: 0;"> 価格</div>
                    <div class="col-11" style="padding: 0;">￥{{ $article->r_price }} </div>
                  </td>
                </tr>
                <tr>
                  <td class="row" style=" margin: 0;" >
                    <div class="col-1 font-weight-bold" style="padding: 0;">店舗名</div>
                    <div class="col-11" style="padding: 0;">{{ $article->r_shop }} </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <article-like
              :initial-is-liked-by='@json($article->isLikedBy(Auth::user()))'
              :initial-count-likes='@json($article->count_likes)'
              :authorized='@json(Auth::check())'
              endpoint="{{ route('articles.like', ['article' => $article]) }}"
            >
            </article-like>
            <p>投稿日：{{ $article->created_at->format('Y年m月d日') }}</p>
            <a href="" class="btn-flat-border my-2">戻る</a>
          </div>
        </div>
      </div>
    </div>
  




    <div class="row justify-content-center">
      <div class="col-md-10 mt-3">
        <div class="card">
          <h3 class="card-header">
            <div class="comment">コメント</div>
          </h3>
          <form method='POST' action="{{ route('articles.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
            <div class="form-group">

              <div class="form-group">
                <textarea class='description form-control' rows="6" name='body' placeholder='コメントを入力'></textarea>
              </div>
              <div class="form-group">
          
              <input type='submit' class='btn btn-primary' value='コメントする'>
            </div>
        </div>
      </form>

            <div class="table border-top border-dark p-2">
              <a class="font-weight-bold text-dark " href="{{ route('users.show', ['name' => $article->user->name]) }}">投稿者：{{ $article->user->name }}</a>
              <div class="article-name">{{ $article->r_name }} </div>
              <p class="py-1">投稿日：{{ $article->created_at->format('Y年m月d日') }}</p>
            </div>
            <div class="table border-top border-dark p-2">
              <a class="font-weight-bold text-dark " href="{{ route('users.show', ['name' => $article->user->name]) }}">投稿者：{{ $article->user->name }}</a>
              <div class="article-name">{{ $article->r_name }} </div>
              <p class="py-1">投稿日：{{ $article->created_at->format('Y年m月d日') }}</p>
            </div>


            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>




@endsection






