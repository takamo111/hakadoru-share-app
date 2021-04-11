# README

# アプリ名
 
ハカドル=シェア - Hakadoru=Share -

# 概要
 
ハカドル=シェア - Hakadoru=Share -は、自分のおすすめ商品を紹介できるアプリです。    
  
  <a href="https://gyazo.com/64d14faad18971074030858738d90e35"><img src="https://i.gyazo.com/64d14faad18971074030858738d90e35.png" alt="Image from Gyazo" width="30%"/></a>

 
# 本番環境
heroku  


# 制作背景（意図）
Laravelでの2作品目として違うジャンルのものを作成したいと思い、レビューを投稿するタイプのアプリを作りました。  
おすすめ商品をまとめたサイトを見るのが好きなのでそれを自分のアプリに組み込みたいと思っていたところ、楽天API(商品情報を取得するAPI)の存在を知り、アイデアを実現できるのではと考え形にしました。
工夫次第で自分の理想を実現できることがプログラミングの魅力だと思っているため、まだ勉強不足で実現しきれない部分はありますがその魅力を感じることができたと思います。    
  
# DEMO

## トップページ
ホーム画面のロゴは、canvaというロゴを作成できるサービスで作っています。  
上部ナビバーではそれぞれユーザー登録、ログイン、商品検索、記事投稿、投稿記事の確認、マイページ画面へ移動できます(全ての機能を使うにはユーザー登録が必要です)  
ホームの下に移動するとサイトの使用方法が記載されています。    
  
<a href="https://gyazo.com/3491cea4376a03534da5607bff6e07a7"><img src="https://i.gyazo.com/3491cea4376a03534da5607bff6e07a7.png" alt="Image from Gyazo" width="50%"/></a>



## 会員登録
### 新規登録
新規登録を行うと記事投稿が行えます。登録には名前、メールアドレスとパスワードを入力します。  
googleアカウントでの登録も可能です。    
  
<a href="https://gyazo.com/32da0a53e79f21f1ee1180c03d721097"><img src="https://i.gyazo.com/32da0a53e79f21f1ee1180c03d721097.png" alt="Image from Gyazo" width="50%"/></a>

### ログイン 
<a href="https://gyazo.com/ffcb308fe29c7671741c8129fc3c73a0"><img src="https://i.gyazo.com/ffcb308fe29c7671741c8129fc3c73a0.png" alt="Image from Gyazo" width="50%"/></a>


## 商品検索画面

### 商品検索
記事投稿を行うには紹介したい記事の商品コードが必要になります(商品情報の抽出には楽天APIを使用しています)  
検索フォームで名前を入力して検索したい商品を探してください。記事を見つけたら投稿するボタンから投稿画面に移行するか(自動で商品コードを取得)、商品コードを控えておいてください。    
  
<a href="https://gyazo.com/6b9af0702bb5b439d768eb3d113ee2d7"><img src="https://i.gyazo.com/6b9af0702bb5b439d768eb3d113ee2d7.png" alt="Image from Gyazo" width="100%"/></a>

### 商品詳細
商品詳細ボタンを押すと商品の詳細情報を表示します。  
(投稿記事の詳細画面に近いため画像は省略)    
  

## 投稿画面
ここで記事の投稿を行います。  
記事のタイトル、本文(紹介したい商品の特徴や魅力などを記入してください)、商品のオススメ度評価(5段階)と、商品コードを記入してください。  
商品コードについては、商品検索から投稿するボタンで投稿画面に移動している場合自動で設定されます。    
  
<a href="https://gyazo.com/573c82a7734e18e334b493d0c0e393e3"><img src="https://i.gyazo.com/573c82a7734e18e334b493d0c0e393e3.png" alt="Image from Gyazo" width="100%"/></a>



## 記事一覧画面
投稿した記事の一覧が表示されます。  
デフォルトでは全ての記事が表示されますが、左上のタブからカテゴリーを選択するとそのカテゴリーでソートされます。また、投稿順、タイトル順にソートも可能です。  
投稿記事の詳細ボタンを押すと投稿記事の詳細が表示されます。投稿者は記事左上に表示される三点アイコンをクリックすると記事の編集、削除を行うことができます。    
  
<a href="https://gyazo.com/80ecbe5e29784db8bca83dd713524cfc"><img src="https://i.gyazo.com/80ecbe5e29784db8bca83dd713524cfc.png" alt="Image from Gyazo" width="100%"/></a>


## 詳細画面  

投稿記事一覧で詳細ボタンを押すと投稿した記事の詳細が表示されます。タイトル、レビュー、星評価に加え、
商品名称、商品説明、価格、店舗名などが表示されます。  
下のハートマークを押すと記事に対していいねができます。いいねをするとマイページにていいねをした記事を表示できます。
記事の下に移動するとコメント投稿機能があります。コメントと記事に対する星評価ができます。    
  
<a href="https://gyazo.com/ec4d0794d38bafbbe90ba2e6059a4309"><img src="https://i.gyazo.com/ec4d0794d38bafbbe90ba2e6059a4309.png" alt="Image from Gyazo" width="100%"/></a>

## マイページ
ログイン中にナビバーの人型のアイコンをクリックし、マイページを選択するとユーザーのマイページへ移動します。  
マイページでは投稿記事の閲覧と、いいねをした記事の閲覧が可能です。また、フォローしたユーザーと、自身のフォロワーを確認できます。  
他のユーザーの投稿記事の詳細へ移動し、ユーザーの名前を選択すると他のユーザーのマイページへ移動します。フォローボタンを押すことでそのユーザーをフォローすることができます。    
  
<a href="https://gyazo.com/da370a77bc6d8ee9a3fe833651a9b024"><img src="https://i.gyazo.com/da370a77bc6d8ee9a3fe833651a9b024.png" alt="Image from Gyazo" width="1160"/></a>


# 工夫したポイント
・商品コードを自動取得するなどできるだけ投稿の手間がないようにした。  
・楽天APIを活用することで商品情報を簡単に取得できるようにした。  
・bootstrapを使用し、CSSコーディングをできるだけ少なくするように作成した。  
  

# 使用技術（開発環境）

## バックエンド
PHP,laravel
## フロントエンド
HTTP,Sass,Vue.js,Node.js
## データベース
PostgreSQL 
## インフラ
heroku
## ソース管理
GitHub, GitHubDesktop
## テスト
RSpec
## エディタ
VSCode

# 課題や今後実装したいこと
・いいね機能の拡張
・ソート機能の拡張
・視覚効果をもう少し入れる



## usersテーブル

|Column|Type|Options|
|------|----|-------|
|name|string|null: false|
|email|string|null: false|
|password|string|null: false|
|twitter_id|string|null: false|
|avatar|string|null: false|
|nickname|string|null: false|

### Association
- has_many :articles
- has_many :comments
- belongs_to_many :followers
- belongs_to_many :likes



## articlesテーブル

|Column|Type|Options|
|------|----|-------|
|genre_id|integer|null: false|
|title|string|null: false|
|article_rating|text|null: false|
|body|text|null: false|
|r_image_url_a|text||
|r_image_url_b|text||
|r_image_url_c|text||
|r_name|text|null: false|
|r_caption|text|null: false|
|r_item_url|text|null: false|
|r_price|text|null: false|
|r_shop|text|null: false|
|r_code|text|null: false|
|user_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :user
- belongs_to_many :likes
- belongs_to_many :followrs
- has_many :comments



## likesテーブル

|Column|Type|Options|
|------|----|-------|
|user_id|integer|null: false, foreign_key: true|
|article_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :user
- belongs_to :article



## followsテーブル

|Column|Type|Options|
|------|----|-------|
|follower_id|integer|null: false, foreign_key: true|
|followee_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :user
- belongs_to :article



## commentsテーブル

|Column|Type|Options|
|------|----|-------|
|text|text|null: false|
|comment_rating|text||
|user_id|integer|null: false, foreign_key: true|
|article_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :user
- belongs_to :article
