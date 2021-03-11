@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')

<main >

<div class="container-fluid">
<div class="row">
<!--↓↓ 検索フォーム -->
<div class="col-sm-4 mx-auto " style="padding:20px 0;">
<form class="form-inline" action="{{ route('searchs.index') }}" method="get">
  <div class="form-group">
  <input type="text" name="keyword"  class="form-control" placeholder="名前を入力してください">
  </div>
  <input type="submit" value="検索" class="btn btn-info">
</form>
</div>

    <!-- 商品カード一覧 -->
    <div class="main_column col-md-11 mx-auto ">
    @if ($items > 0) { 
      <div class="row bg-secondary ">
      @foreach($items as $item)
        
        <!-- 商品カード -->
          <div class="card col-md-12 my-2 " style="width: 15rem;" >
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
                </div>
              </div>
            </div>
          </div>
        @endforeach 

      </div>
      {{ $items->link() }}
    } @else{
      <p>検索結果はありません</p>

    }
    @endif
    </div>

</div>



</main>





@endsection

