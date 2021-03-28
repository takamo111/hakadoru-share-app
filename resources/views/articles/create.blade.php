@extends('layouts.app')

@section('content')
<h1 class='pagetitle'>レビュー投稿ページ</h1>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="row justify-content-center container">
    <div class="col-md-10">
      <form method='POST' action="{{ route('articles.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
            <div class="form-group">
                <label>ジャンル</label>
                <select lang="ja" id="genre_id" name="genre_id" class="form-genre form-control"><option value="1">家電</option> <option value="2">電子機器</option><option value="3">生活雑貨</option><option value="4">食事</option><option value="5">ファッション</option><option value="6">インテリア</option><option value="7">書籍</option><option value="8">その他</option></select>
              </div>
              <div class="form-group">
                <label>タイトル</label>
                <input type='text' class='form-control' name='title' placeholder='タイトルを入力'>
              </div>
              <div class="form-group">
              <label>レビュー本文</label>
                <textarea class='description form-control' rows="5"  name='body' placeholder='本文を入力'></textarea>
              </div>
              <div class="form-group">
              <label>商品コード</label>
              @isset($code)   
                <input type='text' value="{{$code}}" class='form-control' name='itemCode' placeholder='商品コードを入力'>
                @else
                <input type='text' class='form-control' name='itemCode' placeholder='商品コードを入力'>
                @endisset
              </div>  
              <input type='submit' class='btn btn-primary' value='レビューを登録'>

            </div>
        </div>
      </form>
    </div>
</div>
@endsection