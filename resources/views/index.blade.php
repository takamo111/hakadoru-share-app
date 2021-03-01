@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container">
  <main class="pb-3">
    <div>
      <div id="p-index" class="p-index">
        <div class="p-index__image">
          <p class="p-index--copy">捗る商品を共有しよう</p>
          <div class="p-index__search-form text-center">
            <div class="container">
            <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="Responsive image" width="15%" height="15%">
              <div class="row justify-content-center">
                <div>
                  <div class="card-body card-body-top p-2">
                    <form action="/shop/search" method="get" class="form-inline"> <input type="hidden" name="_token" value="">
                      <div class="d-flex">
                        <div class="form-group"> <select lang="ja" id="pref_id" name="pref_id" class="form-areaPrefInfo form-control"><option value="13"></select></div>
                        <div class="form-group ml-2"><input type="text" name="keyword" id="keyword" placeholder="amazon.com" class="form-control" style="width: 180px;"></div>
                        <div><button class="btn-flat-border ml-2 col-xs-1 "><i class="fa fa-search"></i>
                        </button> 
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="p-index__point bg-light">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-12">
                <div class="text-center">
                  <h2 id="description"> ハカドルシェアとは </h2>
                </div>
                <p class="text-center h2-desc font-weight-bold">便利商品のレビューサイトです。</p>
                <p class="text-center h2-desc font-weight-bold">ネットでたまに見かける便利な商品ランキングって見ているだけでわくわくしませんか？</p>
                <p class="text-center h2-desc font-weight-bold">このサイトでは</p>
                <p class="text-center h2-desc font-weight-bold">サンプル</p>
                <p class="text-center h2-desc font-weight-bold"></p>
                <p class="text-center h2-desc font-weight-bold"></p>
                <div class="text-center mt-5"> <a href="https://musicstore-reviews.com/shop" class="btn btn-danger btn-lg">
                        <i class="fa fa-edit mr-2"></i>
                        投稿する
                    </a>
                  <p class="text-center font-weight-bold mt-2"> <span style="background: linear-gradient(transparent 50%, yellow 50%); font-size: 20px;">あなたのオススメ商品を教えてください！</span> </p>
                </div>
                <div class="row mb-3 mt-5">
                  <div class="col-md-6 col-sm-6 col-12">
                    <div>
                      <div class="card-ttl"> <i class="fa fa-edit fa-3x"></i> <span class="font-weight-bold">レビューする</span> </div>
                      <p class="w-75 mx-auto font-weight-bold">レビューしましょう</p>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-12">
                    <div>
                      <div class="card-ttl"> <i class="fas fa-comment fa-3x"></i> <span class="font-weight-bold">レビューを見る</span> </div>
                      <p class="w-75 mx-auto font-weight-bold">レビューをみてみましょう</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="p-index__top3-blogger">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-12">
                <div class="text-center">
                  <h2>レビュー投稿数</h2>
                </div>
                <p class="text-center h2-desc"></p>
              </div>
            </div>
            <div class="row mb-3 mt-3" style="border: 5px solid rgb(214, 223, 229); background-color: rgb(255, 255, 255);">
              <div class="col-md-4 col-sm-4 col-12">
                <div style="text-align: center;">
                  <div class="card-ttl">レビュー総数</div>
                  <p class="w-75 mx-auto">1 <span class="bold2">数</span></p>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-12">
                <div style="text-align: center;">
                  <div class="card-ttl">本日のレビュー数</div>
                  <p class="w-75 mx-auto">0 <span class="bold2">数</span></p>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-12">
                <div style="text-align: center;">
                  <div class="card-ttl">今月のレビュー数</div>
                  <p class="w-75 mx-auto">0 <span class="bold2">数</span></p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="p-index-bottom__image mb-0 pb-0">
        <p class="p-index--copy">SNSを使用する</p>
        <div class="p-index__search-form text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div>
                <div class="card-body card-body-top p-2">
                  <div class="center-block">
                    <p class="text-center text-white font-weight-bold">SNSでログイン</p>
                    <div class="text-center social-btn"> <a href="login/facebook" class="btn-flat-border-facebook my-1">
                        <i class="fab fa-facebook"></i>&nbsp; Facebook</a> <a href="login/twitter" class="btn-flat-border-twitter my-1">
                        <i class="fab fa-twitter"></i>&nbsp; Twitter</a> <a href="login/google" class="btn-flat-border-google my-1">
                        <i class="fab fa-google"></i>&nbsp; Google</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <example-component>
</example-component>
    </div>

  </main>
</div>
@endsection



