<div class="row justify-content-center">
      <div class="col-md-10 mt-3">
        <div class="card">
          <h3 class="card-header">
            <div class="comment">コメント</div>
          </h3>
          @guest
          <div class="card">
            <div class="card-body">
          @endguest
          @auth
          <form method='POST' action="{{ route('comment.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
            <div class="form-group">
              <div class="form-group">
                <textarea class='description form-control' rows="6" name='text' placeholder='コメントを入力'></textarea>
              </div>
              <div class="form-group">
              <label>オススメ度</label>
              <textarea class='description form-control' style='display:none' name='comment_rating'>@{{ rating }}</textarea>
                <star-rating :star-size="25" v-model="rating"></star-rating>
                </div>
              <div class="form-group">
              <input value="{{ Auth::user()->id }}" type="hidden" name="user_id" />
              <input value="{{ $article->id }}" type="hidden" name="article_id" />
              <input type='submit' class='btn btn-primary' value='コメントする'>
            </div>
        </div>
      </form>   
      @endauth
            @foreach ($article->comments as $comment)         
            <div class="table border-top border-dark pt-3">
            <a class="font-weight-bold text-dark" href="/users/{{ $comment->user->name }}">投稿者：{{ $comment->user->name }}</a>
            <star-rating :rating="{{ $comment->comment_rating }}" :read-only="true" :star-size="17" :show-rating="false" ></star-rating>
              <div class="article-name py-2">{{ $comment->text }}</div>
              <p class="comment-day">投稿日：{{ $comment->created_at->format('Y年m月d日') }}
            @auth
              @if ($comment->user->id == Auth::user()->id)
            <a class="text-danger mx-3" data-remote="true" rel="nofollow" data-method="delete" href="/comment/{{ $comment->id }}">削除する</a>
            @endif
            @endauth
              </p>
            </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div> 