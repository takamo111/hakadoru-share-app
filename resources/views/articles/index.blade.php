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
          </ul>
            <!-- 商品カード一覧 -->
          <div class="main_column col-md-12 ">
            <div class="row bg-secondary ">
              @foreach($articles as $article)
              
              <!-- 商品カード -->
                <div class="card m-4 " style="width: 15rem;" >
                
                  <div class='card-image-main border' >
                    <img class='card-image' src="{{ $article->r_image_url_a }}" width="100%" height="180"></img>
                  <!-- dropdown -->
                  @if( Auth::id() === $article->user_id )
                    <div class="dropdown">
                      <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <button type="button" class="btn btn-link text-muted m-0 p-2">
                          <i class="fas fa-ellipsis-v"></i>
                        </button>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right ">
                        <a class="dropdown-item" href="{{ route('articles.edit', ['article' => $article]) }}">
                          <i class="fas fa-pen mr-1"></i>記事を更新する
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
                          <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                        </a>
                      </div>
                    </div>


                  <!-- modal -->
                      <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
                              @csrf
                              @method('DELETE')
                              <div class="modal-body">
                                {{ $article->title }}を削除します。よろしいですか？
                              </div>
                              <div class="modal-footer justify-content-between">
                                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                                <button type="submit" class="btn btn-danger">削除する</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      @endif
                  <!-- modal -->
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
            {{ $articles->links() }}
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




