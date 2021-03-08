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
                    <div class="card mb20">
                      <div class="card-body border">
                        <div class='image-wrapper'><img class='book-image' src="{{ asset('images/background.jpg') }}"></div>
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
                        <div class="col-11" style="padding: 0;">{{ $article->body }} </div>
                      </td>
                      </tr>
                      <td class="row" style=" margin: 0;" >
                        <div class="col-1 font-weight-bold" style="padding: 0;"> 説明</div>
                        <div class="col-11" style="padding: 0;">{{ $article->title }} </div>
                      </td>
                      </tr>
                      <tr>
                        <td class="row" style=" margin: 0;" >
                          <div class="col-1 font-weight-bold" style="padding: 0;"> URL</div>
                          <div class="col-11" style="padding: 0;">{{ $article->title }} </div>
                        </td>
                      <tr>
                        <td class="row" style=" margin: 0;" >
                          <div class="col-1 font-weight-bold" style="padding: 0;"> 価格</div>
                          <div class="col-11" style="padding: 0;">{{ $article->title }} </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="row" style=" margin: 0;" >
                          <div class="col-1 font-weight-bold" style="padding: 0;">店舗名</div>
                          <div class="col-11" style="padding: 0;">{{ $article->title }} </div>
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

                  <div class="card-body pt-0 pb-2 pl-3">
                  <div class="card-text">
    </div>
  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

  </div>

@endsection






