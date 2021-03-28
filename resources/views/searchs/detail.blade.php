@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')

@foreach((array)$items as $item)
<div class="container">
  <div class="pb-3">
    <div class="row justify-content-center">
      <div class="col-md-10 mt-3">
        <div class="card">
          <h5 class="card-header">
          <a class="btn btn-danger m-3" href="/articles/create?code={{$item['itemCode']}}"> 
                  <i class="fa fa-edit mr-2"></i>
                  投稿する
                  </a>
            <a >商品コード：{{$item['itemCode']}}</a>
          </h5>
          <div class="card-body">   
            <div class="card mb20 ">
              <div class="card-body border ">
                <div class='image-wrapper'><img class='book-image' src="{{$item['RImageUrlA']}}"></div>
                @isset($item['RImageUrlB'])
                <div class='image-wrapper'><img class='book-image' src="{{$item['RImageUrlB']}}"></div>
                @endisset
                @isset($item['RImageUrlC'])
                <div class='image-wrapper'><img class='book-image' src="{{$item['RImageUrlC']}}"></div>
                @endisset
              </div>
            </div>

            <table class="table table-striped my-4" style="color: rgb(80, 80, 80);">
              <tbody>
                <tr>
                <td class="row" style=" margin: 0;" >
                  <div class="col-1 font-weight-bold" style="padding: 0;">商品名</div>
                  <div class="col-11" style="padding: 0;">{{$item['itemName']}}</div>
                </td>
                </tr>
                <td class="row" style=" margin: 0;" >
                  <div class="col-1 font-weight-bold" style="padding: 0;"> 説明</div>
                  <div class="col-11" style="padding: 0;">{{$item['itemCaption']}}</div>
                </td>
                </tr>
                <tr>
                  <td class="row" style=" margin: 0;" >
                    <div class="col-1 font-weight-bold" style="padding: 0;"> URL</div>
                    <a  class="col-11" style="padding: 0;" href="{{$item['itemUrl']}}">{{$item['itemUrl']}}</a>
                  </td>
                <tr>
                  <td class="row" style=" margin: 0;" >
                    <div class="col-1 font-weight-bold" style="padding: 0;"> 価格</div>
                    <div class="col-11" style="padding: 0;">￥{{$item['itemPrice']}} </div>
                  </td>
                </tr>
                <tr>
                  <td class="row" style=" margin: 0;" >
                    <div class="col-1 font-weight-bold" style="padding: 0;">店舗名</div>
                    <div class="col-11" style="padding: 0;"> {{$item['shopName']}}</div>
                  </td>
                </tr>
              </tbody>
            </table>
            @endforeach 

            <a href="" class="btn-flat-border my-2">戻る</a>
          </div>
        </div>
      </div>
    </div>

    @endsection
  


