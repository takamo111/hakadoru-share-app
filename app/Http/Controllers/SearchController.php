<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RakutenRws_Client;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchController extends Controller
{
    public function index(Request $request){
        $items = '';

               //楽天APIを扱うRakutenRws_Clientクラスのインスタンスを作成します
               $client = new RakutenRws_Client();

               //定数化
               define("RAKUTEN_APPLICATION_ID"     , config('app.rakuten_id'));
               define("RAKUTEN_APPLICATION_SEACRET", config('app.rakuten_key'));
       
               //アプリIDをセット
               $client->setApplicationId(RAKUTEN_APPLICATION_ID);
       
               //リクエストから検索キーワードを取り出し
               $keyword = $request->input('keyword');
       
               // IchibaItemSearch API から、指定条件で検索
               if(!empty($keyword)){ 
               $response = $client->execute('IchibaItemSearch', array(
                   //入力パラメーター
                   'keyword' => $keyword,
                   'hits' => 30,
               ));
               // レスポンスが正しいかを isOk() で確認
               if ($response->isOk()) {
               $items = array();
               foreach ($response as $item){
                   $str = str_replace("_ex=128x128", "_ex=175x175", $item['mediumImageUrls'][0]['imageUrl']);
                   $items[] = array(
                       'itemName' => $item['itemName'],
                       'itemPrice' => $item['itemPrice'],
                       'itemUrl' => $item['itemUrl'],
                       'itemCode' => $item['itemCode'],
                       'itemCaption' => $item['itemCaption'],
                       'shopName' => $item['shopName'],
                       'mediumImageUrls' => $str,
                       'siteIcon' => "../images/rakuten_logo.png",
                   );

               }

               } else {
                   echo 'Error:'.$response->getMessage();
                 }
       
               } 
               return view('searchs.index',compact('items'));
        
    }

    public function detail(Request $request)
    {
        $items = '';

        //楽天APIを扱うRakutenRws_Clientクラスのインスタンスを作成します
        $client = new RakutenRws_Client();

        //定数化
        define("RAKUTEN_APPLICATION_ID"     , config('app.rakuten_id'));
        define("RAKUTEN_APPLICATION_SEACRET", config('app.rakuten_key'));

        //アプリIDをセット
        $client->setApplicationId(RAKUTEN_APPLICATION_ID);

        //リクエストから検索キーワードを取り出し
        $itemcode = $request->input('code');

        // IchibaItemSearch API から、指定条件で検索

        if(!empty($itemcode)){ 
            $response = $client->execute('IchibaItemSearch', array(
                //入力パラメーター
                'itemCode' => $itemcode,
            ));
            // レスポンスが正しいかを isOk() で確認
            if ($response->isOk()) {
               $items = array();
            foreach ($response as $item){
                $str = str_replace("_ex=128x128", "_ex=175x175", $item['mediumImageUrls'][0]['imageUrl']);
                $items[] = array(
                    
                    'RImageUrlA' => str_replace("_ex=128x128", "_ex=175x175", $item['mediumImageUrls'][0]['imageUrl']),

                    'itemName' => $item['itemName'],
                    'itemPrice' => $item['itemPrice'],
                    'itemUrl' => $item['itemUrl'],
                    'itemCode' => $item['itemCode'],
                    'itemCaption' => $item['itemCaption'],
                    'shopName' => $item['shopName'],
                    'mediumImageUrls' => $str,
                    'siteIcon' => "../images/rakuten_logo.png",
                );

                
            }

            } else {
                echo 'Error:'.$response->getMessage();
              }
    
            } 
            

        return view('searchs.detail',compact('items'));
    }  
    



    

}
