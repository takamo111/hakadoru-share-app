@extends('layouts.app')
@section('css')
<link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection
@section('content')
<main >
<div class="container-fluid">
<div class="row">
<!--↓↓ 検索フォーム -->
  <div class="col-sm-3 mx-auto " style="padding:20px 0;">
  <form class="form-inline" action="{{ route('searchs.index') }}" method="get">
    <div class="form-group">
    <input type="text" name="keyword"  class="form-control" style="width:250px;" placeholder="商品名または商品コード入力">
    </div>
    <input type="submit" value="検索" class="btn btn-info">
  </form>
  </div>
    <!-- 商品カード一覧 -->
    <div class="main_column col-md-11 mx-auto ">
    @if($items == 0)  
    <li class="nav-item mx-1 underline_effect">
                  <div class="nav-link text-center p-0 text-white">
                  <i class="fas fa-angle-double-up fa-3x"></i>
                    <i class="fa fa-search fa-lg fa-3x"></i> 
                    <span class="text-center d-block" style="font-size: 40px;">商品を検索</span>
</div>


</div>
    @elseif($items > 0)  
      <div class="row bg-secondary ">
      @foreach($items as $item)      
        <!-- 商品カード -->
        <div class="card col-md-11 my-2 mx-auto" style="width: 15rem;" >
          <div class="row">
            <div class=" col-2 ">
              <div class='card-image-main ' >
                <img class='card-image border' src="{{$item['mediumImageUrls']}} "width="100%" height="180"></img>
              </div>
            </div>
            <div class=" col-10"  >
              <div class="card-body" style="height: 6rem;">
                <h5 class="card-text text-truncate">{{$item['itemName']}}</h5>
                <h5 class="card-text text-truncate">￥{{$item['itemPrice']}}</h5>  
                <h5 class="card-text text-truncate">商品コード: {{$item['itemCode']}}</h5>  
                <a class="btn btn-primary m-3" href="/searchs/detail?code={{$item['itemCode']}}"> 
                <i class="fas fa-newspaper  mr-2"></i>
                詳細を見る
                </a>
                <a class="btn btn-danger m-3" href="/articles/create?code={{$item['itemCode']}}"> 
                <i class="fa fa-edit mr-2"></i>
                この商品で投稿する
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach 
      </div> 
    @endif
    </div>
</div>
</main>
@endsection

