@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')

<main class="pb-3">
  <div id="contentsBody" >
    <div class="row">
      <div class="main_column col-9 ">
            <!-- タブ -->
        <ul id="myTabs" class="nav nav-tabs ">
          <li role="presentation" class="active"><a href="#home"  aria-controls="home" role="tab" data-toggle="tab" class="nav-link active">家電</a></li>
          <li role="presentation"><a href="#gadget" aria-controls="gadget" role="tab" data-toggle="tab" class="nav-link">ガジェット</a></li>
          <li role="presentation"><a href="#cooking" aria-controls="cooking" role="tab" data-toggle="tab" class="nav-link">食事</a></li>
          <li role="presentation"><a href="#life"  aria-controls="life" role="tab" data-toggle="tab" class="nav-link active">生活雑貨</a></li>
          <li role="presentation"><a href="#fashion" aria-controls="fashion" role="tab" data-toggle="tab" class="nav-link">ファッション</a></li>
          <li role="presentation"><a href="#interior" aria-controls="interior" role="tab" data-toggle="tab" class="nav-link">インテリア</a></li>
          <li role="presentation"><a href="#book" aria-controls="book" role="tab" data-toggle="tab" class="nav-link">書籍</a></li>
          <li role="presentation"><a href="#another" aria-controls="another" role="tab" data-toggle="tab" class="nav-link">その他</a></li>
        </ul>
          <!-- 商品カード一覧 -->
        <div class="tab-content">
          <div id="home" class="main_column col-md-12 tab-pane active ">
            <div class="row bg-secondary ">
              @foreach($articles as $article)
                @if ($article->genre_id === 1)        
                @include('articles.card')
              @endif
            </div>
            {{ $articles->links() }}
          </div> 
          <div id="gadget" class="main_column col-md-12 tab-pane tab-pane">
            <div class="row bg-secondary ">
                @if ($article->genre_id === 2)        
                @include('articles.card')
              @endif
            </div>
            {{ $articles->links() }}
          </div> 

          <div id="cooking" class="main_column col-md-12 tab-pane tab-pane">
            <div class="row bg-secondary ">
              @if ($article->genre_id === 3)        
                @include('articles.card')
              @endif
            </div>
            {{ $articles->links() }}
          </div>
          <div id="life" class="main_column col-md-12 tab-pane tab-pane">
            <div class="row bg-secondary ">
              @if ($article->genre_id === 4)        
                @include('articles.card')
              @endif
            </div>
            {{ $articles->links() }}
          </div>
          <div id="fashion" class="main_column col-md-12 tab-pane tab-pane">
            <div class="row bg-secondary ">
              @if ($article->genre_id === 5)        
                @include('articles.card')
              @endif
            </div>
            {{ $articles->links() }}
          </div>
          <div id="interior" class="tab-pane">
            <div class="row bg-secondary ">
              @if ($article->genre_id === 6)        
                @include('articles.card')
              @endif
            </div>
            {{ $articles->links() }}
          </div>
          <div id="book" class="tab-pane">
            <div class="row bg-secondary ">
              @if ($article->genre_id === 7)        
                @include('articles.card')
              @endif
            </div>
            {{ $articles->links() }}
          </div>
          <div id="another" class="tab-pane">
            <div class="row bg-secondary ">
              @if ($article->genre_id === 8)        
                @include('articles.card')
              @endif
            </div>
            {{ $articles->links() }}
          </div>
          @endforeach
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




