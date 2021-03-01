@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')

  <div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
      <div></div>
    </div>
  </div>
  <div id="app">
    <div class="container">
      <main class="pb-3">
        <div class="pb-5">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header"><a href="{{ route('users.show', ['name' => $article->user->name]) }}">ドライヤー</a></div>
                
                <div class="card-body">
                  <div class="my-3">
                    <h2> いいものです </h2>
                  </div>
                  <div class="col-md-22">
                      <div class="card mb50">
                          <div class="card-body">
                            <div class='image-wrapper'><img class='book-image' src="{{ asset('images/background.jpg') }}"></div>
                      </div>
                  </div>
              </div>
                  <h3 style="color: rgb(80, 80, 80);">評価 <span class="review-stars" style="color: rgb(30, 136, 229);"><i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star"></i> <i aria-hidden="true" class="fa fa-star-o"></i></span>3.7</h3>
                  <table class="table table-striped my-4" style="color: rgb(80, 80, 80);">
                    <tbody>
                      <tr>
                        <td>楽器の品揃え</td>
                        <td><span class="review-stars" style="color: rgb(30, 136, 229);"></span></td>
                      </tr>
                      <tr>
                        <td>楽器の保管状態</td>
                        <td><span class="review-stars" style="color: rgb(30, 136, 229);"></span></td>
                      </tr>
                      <tr>
                        <td>店内の雰囲気</td>
                        <td><span class="review-stars" style="color: rgb(30, 136, 229);"></span></td>
                      </tr>
                      <tr>
                        <td>店員の態度</td>
                        <td><span class="review-stars" style="color: rgb(30, 136, 229);"></span></td>
                      </tr>
                      <tr>
                        <td>客層</td>
                        <td><span class="review-stars" style="color: rgb(30, 136, 229);"></span></td>
                      </tr>
                      <tr>
                        <td>初心者にオススメ？</td>
                        <td><span class="review-stars" style="color: rgb(30, 136, 229);"></span></td>
                      </tr>
                      <tr>
                        <td>経験者にオススメ？</td>
                        <td><span class="review-stars" style="color: rgb(30, 136, 229);"></span></td>
                      </tr>
                    </tbody>
                  </table>
                  <p>投稿日：2021年 1月 11日</p>
                  <p>投稿ユーザー：<a href="/">Deguta Yuichi</a></p> <a href="" class="btn-flat-border my-2">戻る</a>
                  <div class="d-flex justify-content-end">
                    <div class="mr-2"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 92px; height: 28px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.6e189c4f2b6d88c453045806323cdcf3.ja.html#dnt=false&amp;hashtags=%E6%A5%BD%E5%99%A8%E5%BA%97%E3%83%AC%E3%83%93%E3%83%A5%E3%83%BC&amp;id=twitter-widget-0&amp;lang=ja&amp;original_referer=https%3A%2F%2Fmusicstore-reviews.com%2Fpost%2Fdetail%2F15&amp;size=l&amp;text=%E3%80%8E%E5%93%81%E6%8F%83%E3%81%88%E3%81%8C%E3%82%88%E3%81%8B%E3%81%A3%E3%81%9F%E3%81%A7%E3%81%99%E3%80%8Fby%20Deguta%20Yuichi%20%7C%20%E3%83%99%E3%83%BC%E3%82%BF%E3%83%9F%E3%83%A5%E3%83%BC%E3%82%B8%E3%83%83%E3%82%AF%20%E5%A7%AB%E8%B7%AF%E6%9D%B1%E5%BA%97%E3%81%AE%E3%83%AC%E3%83%93%E3%83%A5%E3%83%BC%E3%80%90MusicStore%20Reviews%E3%80%91&amp;time=1613833282494&amp;type=share&amp;url=https%3A%2F%2Fmusicstore-reviews.com%2Fpost%2Fdetail%2F15" data-url="https://musicstore-reviews.com/post/detail/15"></iframe></div>
                    <div>
                      <div data-href="" data-layout="button_count" data-size="large" class="fb-share-button fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=459229228266995&amp;container_width=48&amp;href=https%3A%2F%2Fmusicstore-reviews.com%2Fpost%2Fdetail%2F15&amp;layout=button_count&amp;locale=ja_JP&amp;sdk=joey&amp;size=large"><span style="vertical-align: bottom; width: 91px; height: 28px;"><iframe name="f2a0d23c20f1cfc" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v4.0/plugins/share_button.php?app_id=459229228266995&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3796cffafb517c%26domain%3Dmusicstore-reviews.com%26origin%3Dhttps%253A%252F%252Fmusicstore-reviews.com%252Ff3c9c67cee8802c%26relation%3Dparent.parent&amp;container_width=48&amp;href=https%3A%2F%2Fmusicstore-reviews.com%2Fpost%2Fdetail%2F15&amp;layout=button_count&amp;locale=ja_JP&amp;sdk=joey&amp;size=large" style="border: none; visibility: visible; width: 91px; height: 28px;" class=""></iframe></span></div>
                    </div>
                  </div>
                  <div>
                  <div class="card-body pt-0 pb-2 pl-3">
                  <div class="card-text">
      <article-like
        :initial-is-liked-by='@json($article->isLikedBy(Auth::user()))'
        :initial-count-likes='@json($article->count_likes)'
        :authorized='@json(Auth::check())'
        endpoint="{{ route('articles.like', ['article' => $article]) }}"
      >
      </article-like>
    </div>
  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </main>
    </div>

  </div>

@endsection






