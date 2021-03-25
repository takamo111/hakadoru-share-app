@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')

<main class="pb-3">
  <div id="contentsBody" >
    <div class="row">
      <div class="main_column col-9 ">
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              カテゴリ選択
          </button>
          <div class="dropdown-menu">
          <a class="dropdown-item" href=" /articles">全てのカテゴリ</a>
              <a class="dropdown-item" href="/articles?number=1">家電</a>
              <a class="dropdown-item" href="/articles?number=2">電子機器</a>
              <a class="dropdown-item" href="/articles?number=3">生活雑貨</a>
              <a class="dropdown-item" href="/articles?number=3">食事</a>
              <a class="dropdown-item" href="/articles?number=3">ファッション</a>
              <a class="dropdown-item" href="/articles?number=4">インテリア</a>
              <a class="dropdown-item" href="/articles?number=3">書籍</a>
              <a class="dropdown-item" href="/articles?number=3">その他</a>
          </div>
        </div>

          <!-- 商品カード一覧 -->
        <div class="tab-content">
          <div id="home" class="main_column col-md-12 tab-pane active ">
            <div class="row bg-secondary ">
              @foreach($articles as $article)
              
              <!-- 商品カード -->
              <div class="card m-4 " style="width: 15rem;" >
              
                <div class='card-image-main border' >
                  <img class='card-image' src="{{ $article->r_image_url_a }}" width="100%" height="180"></img>
                  <!-- dropdown -->
                  @include('articles.dropdown')
                  <!-- dropdown -->

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
            {{ $articles->appends(request()->input())->links()  }}
          </div>  
          <div id="gadget" class="tab-pane">
            <p>ガジェット</p>  <!-- タブの内容 -->
          </div>
          <div id="cooking" class="tab-pane">
            <p>食事</p>  <!-- タブの内容 -->
          </div>
          <div id="life" class="tab-pane">
            <p>生活雑貨</p>  <!-- タブの内容 -->
          </div>
          <div id="fashion" class="tab-pane">
            <p>ファション</p>  <!-- タブの内容 -->
          </div>
          <div id="interior" class="tab-pane">
            <p>インテリア</p>  <!-- タブの内容 -->
          </div>
          <div id="book" class="tab-pane">
            <p>書籍</p>  <!-- タブの内容 -->
          </div>
          <div id="another" class="tab-pane">
            <p>その他</p>  <!-- タブの内容 -->
          </div>
        </div>
      </div>



          <!-- ナビ+投稿数 -->
      <div class="main_column col-md-3 ">
        <div class="bg-light m-4">     
          <div class="container py-4">
            <div class="text-center">
            <p class="text-center font-weight-bold "> <span style="background: linear-gradient(transparent 50%, yellow 50%); font-size: 18px;">おすすめ商品を紹介する</span> </p>
            </div>
            <h5 class="text-center font-weight-bold">STEP1 ユーザー登録</h5>
            <div class="text-center my-1"> 
              <a href="{{route('articles.create')}}" class="btn btn-danger btn">
              <i class="fa fa-edit mr-2"></i>
                投稿する
              </a>
            </div>
            <h5 class="text-center font-weight-bold mt-4">STEP2 商品検索(商品ID取得)</h5>
            <div class="text-center mt-1"> 
              <a href="{{route('articles.create')}}" class="btn btn-danger ">
              <i class="fa fa-edit mr-2"></i>
                投稿する
              </a>
            </div>
            <h5 class="text-center font-weight-bold my-4">STEP3 投稿する </h5>
            <div class="text-center mt-1"> 
              <a href="{{route('articles.create')}}" class="btn btn-danger">
              <i class="fa fa-edit mr-2"></i>
                投稿する
              </a>
            </div>
          </div>
        </div>  
        
        <div class="bg-light m-4">  
          <div class="container py-4">   
            <div class="asideTitle">
              <h4 class="shopInfoTitle mt-3 h2-line">レビュー投稿数</h4>
            </div> 
            <section id="shopInfoBox" class="box rounded my-3" style="border: 2px solid rgb(214, 223, 229);">
              <table class="table">
                <tbody>
                    <tr>
                      <td style="width: 75%; border-top: none;">今日</td> 
                      <td class="font-weight-bold" style="border-top: none;">0</td>
                    </tr> 
                    <tr>
                      <td>今月</td> 
                      <td class="font-weight-bold">1</td>
                    </tr> 
                    <tr>
                      <td>総数</td> 
                      <td class="font-weight-bold">12</td>
                    </tr>
                </tbody>
              </table>
            </section> 
            <div>
              <h4 class="h2-line mt-3">いいね数ユーザーランキング</h4>
            </div> 
            <section class="box rounded my-3" style="border: 2px solid rgb(214, 223, 229);">
              <table class="table position-relative table-hover">
                <tbody>
                  <tr>
                    <td style="width: 75%; border-top: none;"><i class="fas fa-crown fa-lg mr-2" style="color: gold;"></i>ヒラノ</td> 
                    <td class="font-weight-bold" style="border-top: none;"><a href="">3</a></td>
                  </tr> 
                  <tr>
                    <td><i class="fas fa-crown fa-lg mr-2" style="color: silver;"></i>いーじま</td> 
                    <td class="font-weight-bold"><a href="">1</a></td>
                  </tr> 
                  <tr>
                    <td><i class="fas fa-crown fa-lg mr-2" style="color: rgb(140, 72, 65);"></i>グレッチくん</td> <td class="font-weight-bold"><a href="https://musicstore-reviews.com/user/show/6">1</a>
                    </td>     
                  </tr> 
                  <tr>
                    <td><i class="fas fa-award ml-2 mr-3" style="color: green;"></i>アオケン</td> 
                    <td class="font-weight-bold"><a href="">1</a></td>
                  </tr> 
                  <tr>
                    <td><i class="fas fa-award ml-2 mr-3" style="color: green;"></i>うしらん</td> 
                    <td class="font-weight-bold"><a href="">1</a></td>
                  </tr>
                </tbody>
              </table>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>





@endsection




