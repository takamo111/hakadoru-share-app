<!-- 商品カード -->
<div class="card m-4" style="width: 15rem;" >
  <div class='card-image-main border' >
    <img class='card-image' src="{{ $article->r_image_url_a }}" width="100%" height="180"></img>
    <!-- dropdown -->
    @include('articles.dropdown')
    <!-- dropdown -->
  </div>
  <div class="card-body" style="height: 6rem;">
    <h5 class="card-text text-truncate">{{ $article->title }}</h5>
    <p class="card-text text-truncate">{{ $article->body }}</p> 
  </div>
  <a class=" border border-primary text-center" href="{{ route('articles.show', ['article' => $article]) }}"  style="height: 3rem;">
    <h5 class="text-primary" > 
    <i class="fas fa-newspaper mr-1"></i>    
      <p>レビュー詳細</p>
    </h5>
  </a>
</div>