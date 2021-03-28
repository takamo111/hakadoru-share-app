@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')
  <!--トップ -->
  <div class="container">
    <div class="top-head">
      <p class="top-head-text">捗る商品を共有しよう</p>
      <div class="text-center">
        <div class="container">
          <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="Responsive image" width="18%" height="18%"></img>
          <div class="row justify-content-center">
            <div>
              <div class="card-body card-body-top p-2">
              <form class="form-inline" action="{{ route('searchs.index') }}" method="get">
                <div class="form-group">
                <input type="text" name="keyword"  class="form-control" style="width:250px;" placeholder="商品名または商品コード入力">
                </div>
                <input type="submit" value="検索" class="btn btn-info">
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--センター -->
    <section class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <h1 class="mt-5 text-secondary "> ハカドル=シェアとは </h1>
              <div class="m-3  border-bottom border-primary "> </div>
            </div>
            <h4 class="text-center font-weight-bold">便利商品のレビューサイトです。</h4>
            <h6 class="text-center font-weight-bold">ネットでたまに見かける便利な商品ランキングって見ているだけでわくわくしませんか？</h6>
            <h6 class="text-center font-weight-bold">ネットでたまに</h6>
            <h6 class="text-center font-weight-bold">ネットでたまに</h6>
            <h6 class="text-center font-weight-bold">ネットでたまに</h6>
            <h6 class="text-center font-weight-bold">ネットでたまに</h6>
            <div class="text-center mt-5"> 
              <a href="{{route('articles.create')}}" class="btn btn-danger btn-lg">
              <i class="fa fa-edit mr-2"></i>
                投稿する
              </a>
              <p class="text-center font-weight-bold mt-2"> <span style="background: linear-gradient(transparent 50%, yellow 50%); font-size: 20px;">あなたのオススメ商品を教えてください！</span> </p>
            </div>
            <div class="row mb-3 mt-5">
              <div class="col-md-6 text-center">
                <div>
                  <div class="card-ttl"> <i class="fa fa-edit fa-3x"></i> <span class="font-weight-bold">レビューする</span> </div>
                  <h6 class="text-center font-weight-bold mt-3">ネットでたまに</h6>
                </div>
              </div>
              <div class="col-md-6 text-center ">
                <div>
                  <div class="card-ttl"> <i class="fas fa-comment fa-3x"></i> <span class="font-weight-bold">レビューを見る</span> </div>
                  <h6 class="text-center font-weight-bold mt-3">ネットでたまに</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--数値集計 -->
      <div class="row">
        <div class="col-md-12 mb-6 text-center">
          <h2>レビュー投稿数</h2>
          <div class="center-review row col-md-6 mx-auto  mb-3 mt-3" >
            <div class="col-md-4  col-12">
              <div class="card-ttl">レビュー総数</div>
              <p class="w-75 mx-auto">
                1
                <span class="bold2">数</span>
              </p>
            </div>
            <div class="col-md-4  col-12">
              <div class="card-ttl">本日のレビュー数</div>
              <p class="w-75 mx-auto">
              {{}}
                <span class="bold2">数</span>
              </p>
            </div>
            <div class="col-md-4  col-12">
              <div class="card-ttl">今月のレビュー数</div>
              <p class="w-75 mx-auto">
                1 
                <span class="bold2">数</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="top-foot">
      <p class="top-foot-text">SNSを使用する</p>
      <div class="text-center">
        <div class="container">
          <div class="row justify-content-center">
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
  </div>
</div>
@endsection


