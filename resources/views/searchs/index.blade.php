@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')

<main >

<div class="container-fluid">
<div class="row">
 
<!--↓↓ 検索フォーム -->
<div class="col-sm-4" style="padding:20px 0; padding-left:0px;">
<form class="form-inline" action="{{ route('searchs.index') }}"　method="get">
  <div class="form-group">
  <input type="text" name="keyword"  class="form-control" placeholder="名前を入力してください">
  </div>
  <input type="submit" value="検索" class="btn btn-info">
</form>
</div>

    <!-- 商品カード一覧 -->
    <div class="main_column col-md-10 ">
    @if ($items > 0) { 
      <div class="row bg-secondary ">
      @foreach($items as $item)
        
        <!-- 商品カード -->
          <div class="card m-4 " style="width: 15rem;" >
          
            <div class='card-image-main ' >
              <img class='card-image' src="{{ asset('images/background.jpg') }}" width="100%" height="180"></img>
            </div>
            <div class="card-body" style="height: 6rem;">
              <h6 class="card-text text-truncate">{{$item['itemName']}}</h6>
              <p class="card-text text-truncate">{{$item['mediumImageUrls']}}￥</p>
              
            </div>
            <a class=" border border-primary text-center animated swing infinite  " href=""  style="height: 3rem;">
              <h5 class="text-primary" > 
              <i class="fas fa-newspaper mr-1"></i>
   
                
                レビュー詳細</p>
              </h5>
            </a>
</div>
        @endforeach 
      </div>
    } @else{
      <p>検索結果はありません</p>

    }
    @endif
    </div>

</div>



</main>





@endsection

