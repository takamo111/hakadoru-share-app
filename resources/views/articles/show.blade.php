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
                  @isset($article->r_image_url_b)
                  <div class='image-wrapper'><img class='book-image' src="{{ $article->r_image_url_b }}"></div>
                  @endisset
                  @isset($article->r_image_url_c)
                  <div class='image-wrapper'><img class='book-image' src="{{ $article->r_image_url_c }}"></div>
                  @endisset
                </div>
              </div>
              <div class="card-body border">
              <h5> {{ $article->body }} </h5>
            </div>
            <div class="card-body border mt-3">
            <star-rating :rating="{{ $article->article_rating }}" :read-only="true" :star-size="30" ></star-rating>
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
          <form method='POST' action="{{ route('comment.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
            <div class="form-group">

              <div class="form-group">
                <textarea class='description form-control' rows="6" name='text' placeholder='コメントを入力'></textarea>
              </div>
              <div class="form-group">
              <label>オススメ度</label>
              <textarea class='description form-control' style='display:none' name='comment_rating'>@{{ rating }}</textarea>
                <star-rating star-size="25" v-model="rating"></star-rating>
                </div>
              <div class="form-group">
              <input value="{{ Auth::user()->id }}" type="hidden" name="user_id" />
              <input value="{{ $article->id }}" type="hidden" name="article_id" />
              <input type='submit' class='btn btn-primary' value='コメントする'>
            </div>
        </div>
      </form>
   
            @foreach ($article->comments as $comment) 
            
            <div class="table border-top border-dark pt-3">
            <a class="font-weight-bold text-dark" href="/users/{{ $comment->user->name }}">投稿者：{{ $comment->user->name }}</a>
            <star-rating :rating="{{ $comment->comment_rating }}" :read-only="true" :star-size="30" ></star-rating>
              <div class="article-name py-2">{{ $comment->text }}</div>
              <p class="comment-day">投稿日：{{ $comment->created_at->format('Y年m月d日') }}
              @if ($comment->user->id == Auth::user()->id)
            <a class="text-danger mx-3" data-remote="true" rel="nofollow" data-method="delete" href="/comment/{{ $comment->id }}">削除する</a>
            @endif
              </p>
            </div>
            @endforeach


            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>


</div>




@endsection






