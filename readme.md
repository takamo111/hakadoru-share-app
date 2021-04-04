# README

# アプリ名
 
ハカドル=シェア - Hakadoru=Share -

# 概要
 
ハカドル=シェア - Hakadoru=Share -は、自分のおすすめ商品を紹介できるアプリです。  
  

<a href="https://gyazo.com/07a43c72f10a861693bde666372d4289"><img src="https://i.gyazo.com/07a43c72f10a861693bde666372d4289.png" alt="Image from Gyazo" width="50%"/></a>


 
# 本番環境
heroku  


# 制作背景（意図）
・
・前回SNS形式のアプリを作成したため違う形式のものを作りたいと思いクイズアプリを作成しました。また、あまり無い題材のクイズを作りたいと思い、大学で地学を専攻していたことから、馴染みのある鉱物を題材にしてアプリを作成しました。  
・前回はRuby on Railsでのアプリ作成を行いましたが、より幅を広げるため、PHP,laravelでアプリを作成しました。  

# DEMO

## トップページ
ホーム画面のロゴは、ocanvaというロゴを作成できるサービスで作っています。 

<a href="https://gyazo.com/64d14faad18971074030858738d90e35"><img src="https://i.gyazo.com/64d14faad18971074030858738d90e35.png" alt="Image from Gyazo" width="100%"/></a>


### 出題カテゴリー選択
出題するカテゴリーを選ぶことができます。鉱物の分類には元素鉱物、酸化鉱物、炭酸塩鉱物、珪酸塩鉱物、硫化鉱物、宝石、その他の7種類があります。全項目を選択するには『全項目チェック』のONを選択します。
クイズを開始する場合は『出題開始』を押してください(問題が10問に満たない場合はトップページに戻ります）  

<a href="https://gyazo.com/7a31ba98210e5239a1f83730362288be"><img src="https://i.gyazo.com/7a31ba98210e5239a1f83730362288be.png" alt="Image from Gyazo" width="100%"/></a>

### ランキング機能
会員登録を行いクイズを回答すると、高得点の順にこのランキングに名前が載ります。総合、月間、週間ごとにランキングが分かれています。  

<a href="https://gyazo.com/392583d2e4992af5931f32480c52b71d"><img src="https://i.gyazo.com/392583d2e4992af5931f32480c52b71d.png" alt="Image from Gyazo" width="50%"/></a>

## 会員登録
### 新規登録
登録を行わなくてもクイズはできますが、新規登録を行うとマイページ機能とランキング機能が使えます。登録には名前、メールアドレスとパスワードを入力します。  

<a href="https://gyazo.com/7d584cbe70948c36b4771699436e5398"><img src="https://i.gyazo.com/7d584cbe70948c36b4771699436e5398.png" alt="Image from Gyazo" width="100%"/></a>

### サインイン  
<a href="https://gyazo.com/1ca821f19581c8a9ad65d9f1c93002ec"><img src="https://i.gyazo.com/1ca821f19581c8a9ad65d9f1c93002ec.png" alt="Image from Gyazo" width="100%"/></a>

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
