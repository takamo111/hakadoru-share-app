# README

# アプリ名
 
ハカドル=シェア - Hakadoru=Share -

# 概要
 
ハカドル=シェア - Hakadoru=Share -は、自分のおすすめ商品を紹介できるアプリです。  
  <a href="https://gyazo.com/64d14faad18971074030858738d90e35"><img src="https://i.gyazo.com/64d14faad18971074030858738d90e35.png" alt="Image from Gyazo" width="30%"/></a>



 
# 本番環境
heroku  


# 制作背景（意図）
・
・前回SNS形式のアプリを作成したため違う形式のものを作りたいと思いクイズアプリを作成しました。また、あまり無い題材のクイズを作りたいと思い、大学で地学を専攻していたことから、馴染みのある鉱物を題材にしてアプリを作成しました。  
・前回はRuby on Railsでのアプリ作成を行いましたが、より幅を広げるため、PHP,laravelでアプリを作成しました。  

# DEMO

## トップページ
ホーム画面のロゴは、canvaというロゴを作成できるサービスで作っています。 
上部ナビバーではそれぞれユーザー登録、ログイン、商品検索、記事投稿、投稿記事の確認、マイページ画面へ移動できます。
全ての機能を使うにはユーザー登録が必要です。
ホームの下に移動するとサイトの使用方法が記載されています。

<a href="https://gyazo.com/3491cea4376a03534da5607bff6e07a7"><img src="https://i.gyazo.com/3491cea4376a03534da5607bff6e07a7.png" alt="Image from Gyazo" width="50%"/></a>



## 会員登録
### 新規登録
新規登録を行うと記事投稿が行えます。登録には名前、メールアドレスとパスワードを入力します。
googleアカウントでの登録も可能です。  
<a href="https://gyazo.com/32da0a53e79f21f1ee1180c03d721097"><img src="https://i.gyazo.com/32da0a53e79f21f1ee1180c03d721097.png" alt="Image from Gyazo" width="50%"/></a>


### ログイン 
<a href="https://gyazo.com/ffcb308fe29c7671741c8129fc3c73a0"><img src="https://i.gyazo.com/ffcb308fe29c7671741c8129fc3c73a0.png" alt="Image from Gyazo" width="50%"/></a>


## 商品検索

### 商品検索
記事投稿を行うには紹介したい記事の商品コードが必要になります(商品情報の抽出には楽天APIを使用しています)
検索フォームで名前を入力して検索したい商品を探してください。記事を見つけたら投稿するボタンから投稿画面に移行するか(自動で商品コードを取得)、商品コードを控えておいてください。
<img src="images/search.png" width="50%"> 

### 商品詳細
商品詳細ボタンを押すと商品の詳細情報を表示します。


## 投稿画面
画像と、一の句〜三の句を記入します。  
任意でコメントも書き込め、こちらは詳細画面で確認できます。  

<a href="https://gyazo.com/52d225610e2e5b6e1ada9a61002d432e"><img src="https://i.gyazo.com/52d225610e2e5b6e1ada9a61002d432e.jpg" alt="Image from Gyazo" width="50%"/></a>


## 商品検索画面

<img src="images/search.png" width="50%"> 

また、過去の投稿に関してはページの下で確認できるようにしています。こちらは投稿時間もしくは、いいねの数でソートできるようになっています。  

<a href="https://gyazo.com/86318b4ba6ae4072ec99016b5aa94952"><img src="https://i.gyazo.com/86318b4ba6ae4072ec99016b5aa94952.png" alt="Image from Gyazo" width="100%"/></a>  

## 詳細画面  

詳細画面では、投稿のより詳しい情報を見ることができます。投稿画面でコメントを入力した場合、こちらに表示されます。また、閲覧者はこちらで投稿にいいねをしたりコメントを残すこともできます。  

<a href="https://gyazo.com/c8ceaa9afb7edbc1b544e14d6fcbb15f"><img src="https://i.gyazo.com/c8ceaa9afb7edbc1b544e14d6fcbb15f.jpg" alt="Image from Gyazo" width="50%"/></a>

コメント機能  
<a href="https://gyazo.com/a58a19d02282c5e579ccc14551fb9d9d"><img src="https://i.gyazo.com/a58a19d02282c5e579ccc14551fb9d9d.png" alt="Image from Gyazo" width="50%"/></a>  










































## クイズ画面

### 回答前
鉱物の特徴と写真を元にその鉱物の名前は何か4択から回答してください。  
全部で10問、選択したカテゴリーの中からランダムで出題されます。  

<a href="https://gyazo.com/8359c0c600dc4e13de49a2971f5b8bad"><img src="https://i.gyazo.com/8359c0c600dc4e13de49a2971f5b8bad.png" alt="Image from Gyazo" width="100%"/></a>

### 回答後
回答後は正解番号とと解説が表示されます。こちらの解説は鉱物解説機能でも見ることができます。10問答えると正答率が表示されます。  

<a href="https://gyazo.com/4464e7c29264174a28571f2d4c8ff4e6"><img src="https://i.gyazo.com/4464e7c29264174a28571f2d4c8ff4e6.png" alt="Image from Gyazo" width="100%"/></a>

### 正答率表示(10問回答後)
10問回答を行うと最後に正答率が表示されます。  

<a href="https://gyazo.com/46d5b6c424bd71cc075bd0c965c8b3a6"><img src="https://i.gyazo.com/46d5b6c424bd71cc075bd0c965c8b3a6.png" alt="Image from Gyazo" width="50%"/></a>


## 鉱物解説機能
鉱物の解説を見たい方は右側の鉱物解説から見ることができます。  

<a href="https://gyazo.com/6531fae184227d23c72a49c82e0b5354"><img src="https://i.gyazo.com/6531fae184227d23c72a49c82e0b5354.png" alt="Image from Gyazo" width="100%"/></a>

## マイページ画面
マイページではクイズの正答率をグラフとして見ることができます。  

<a href="https://gyazo.com/61df49f6ed1ab2148ad83da48c1bdf18"><img src="https://i.gyazo.com/61df49f6ed1ab2148ad83da48c1bdf18.png" alt="Image from Gyazo" width="50%"/></a>



# 工夫したポイント
・クイズを解いていくことで自然に鉱物の知識を得られるように写真と説明を交えて問題を作成した。  
・回答後に正答率をすぐ確認できるようにした。  
・トップページから全ての機能にアクセスできるようにした。  

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
・
・



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
- has_one :ranking



## followsテーブル

|Column|Type|Options|
|------|----|-------|
|follower_id|integer|null: false, foreign_key: true|
|followee_id|integer|null: false, foreign_key: true|

### Association
- has_one :ranking



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
