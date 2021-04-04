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
      <form method="POST" action="{{ route('articles.update', ['article' => $article->id]) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="card">
            <div class="card-body">
            <div class="form-group">
                <label>ジャンル</label>
                <select lang="ja" id="genre_id" name="genre_id" class="form-genre form-control"><option value="1">家電</option> <option value="2">ガジェット</option><option value="3">生活雑貨</option><option value="4">食事</option><option value="5">ファッション</option><option value="6">インテリア</option><option value="7">その他</option></select>
              </div>
              <div class="form-group">
                <label>タイトル</label>
                <input type='text' class='form-control' name='title' placeholder='タイトルを入力' required value="{{ $article->title ?? old('title') }}">
              </div>
              <div class="form-group">
              <label>レビュー本文</label>
                <textarea class='description form-control' rows="5"  name='body' placeholder='本文を入力'>{{ $article->body ?? old('body') }}</textarea>
              </div>
              <input type='submit' class='btn btn-primary' value='更新する'>
            </div>
        </div>
      </form>
    </div>
</div>
@endsection