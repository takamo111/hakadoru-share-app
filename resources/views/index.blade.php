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
            <h4 class="text-center font-weight-bold">便利商品を共有できるレビューサイトです。</h4>
            <h6 class="text-center font-weight-bold">ネットでたまに見かける便利な商品ランキングって見ているだけでわくわくしませんか？</h6>
            <h6 class="text-center font-weight-bold">このサイトでは自分のイチオシ商品の情報を投稿して他のユーザーに共有できます。</h6>
            <h6 class="text-center font-weight-bold">商品コードから商品情報を自動でまとめてくれるので投稿も簡単!</h6>
            <h6 class="text-center font-weight-bold">(注意 : 楽天APIを使用しているためラインナップにない商品は投稿できません)</h6>

            <p class="text-center font-weight-bold mt-2"> <span style="background: linear-gradient(transparent 50%, yellow 50%); font-size: 20px;">あなたのオススメ商品を教えてください！</span> </p>
            <div class="container py-4 border">
              <h5 class="text-center font-weight-bold my-3">STEP1 新規登録</h5>            
              <div class="text-center my-1"> 
                <a href="{{ route('register') }}" class="btn btn-danger btn-lg">
                <i class="fa fa-user-plus mr-2"></i>
                  新規登録
                </a>
              </div>
            </div>
            <div class="row justify-content-center">
            <i class="fa fa-angle-down fa-3x mr-2"  ></i>
            </div>
            <div class="container py-4 border">
              <h5 class="text-center font-weight-bold mt-4">STEP2 商品検索</h5>
              <div class="container">
                    <img src="{{ asset('images/search.png') }}" class="img-fluid my-3" alt="Responsive image" width="100%" height="100%"></img>
                  </div>
              <div class="row justify-content-center">
                <div>
                  <div class="card-body card-body-top p-2">
                    <form class="form-inline" action="{{ route('searchs.index') }}" method="get">
                      <div class="form-group">
                      <input type="text" name="keyword"  class="form-control" style="width:250px;" placeholder="こちらからも商品検索できます">
                      </div>
                      <input type="submit" value="検索" class="btn btn-info">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
            <i class="fa fa-angle-down fa-3x mr-2"  ></i>
            </div>
            <div class="container py-4 border">
              <div class="card-body card-body-top p-2">
                <h5 class="text-center font-weight-bold mt-4">STEP3 投稿する </h5>
                <div class="text-center mt-2"> 
                  <div class="container">
                    <img src="{{ asset('images/article.png') }}" class="img-fluid" alt="Responsive image" width="100%" height="100%"></img>
                  </div>
                  <div class="card-body card-body-top p-4">
                  <a href="{{route('articles.create')}}" class="btn btn-danger btn-lg">
                  <i class="fa fa-edit mr-2"></i>
                    投稿する
                  </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
            <i class="fa fa-angle-down fa-3x mr-2"  ></i>
            </div>
            <div class="container py-4 border">
              <div class="card-body card-body-top p-2">
                <h5 class="text-center font-weight-bold mt-4">レビューが投稿されます<br>他のユーザーの投稿にいいねをしたり、コメントもできます！ </h5>
                <div class="text-center mt-5"> 
                  <a href=" /articles" class="btn btn-danger btn-lg">
                  <i class="fa fa-edit mr-2"></i>
                    レビューを見る<br>
                  </a>
                </div>
              </div>
            </div>       
          </div>
        </div>
      </div>
    </section>
    <div class="top-foot">
    <div class="text-center">
              <h2 class="mt-5 text-white "> 皆様の投稿をお待ちしています！ </h2>
            </div>
    </div>
  </div>
</div>
@endsection


