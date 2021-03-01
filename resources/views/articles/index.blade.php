@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')

<main class="pb-3">
  <div id="contentsBody" >
      <!-- タブ -->
    <ul id="myTabs" class="nav nav-tabs col-md-7">
      <li role="presentation" class="active"><a href="#home"  aria-controls="home" role="tab" data-toggle="tab" class="nav-link active">家電</a></li>
      <li role="presentation"><a href="#gadget" aria-controls="gadget" role="tab" data-toggle="tab" class="nav-link">ガジェット</a></li>
      <li role="presentation"><a href="#cooking" aria-controls="cooking" role="tab" data-toggle="tab" class="nav-link">食事</a></li>
    </ul>
    <!-- 商品カード一覧 -->
    <div class="main_column col-md-7 ">
      <div class="row bg-secondary ">
        @foreach($articles as $article)
        
        <!-- 商品カード -->
          <div class="card m-4 " style="width: 15rem;" >
          
            <div class='card-image-main ' >
              <img class='card-image' src="{{ asset('images/background.jpg') }}" width="100%" height="180"></img>
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
    </div>
</div>

<tab>
</tab>



</main>





@endsection




