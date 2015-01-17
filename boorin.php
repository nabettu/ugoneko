<?php
  // POSTを取得
  $words = $_POST['words'] ;
  $la = $_POST['la'] ;
  // ファイルデータを読み込む
  $data = $words;
  // 出力
  echo $data;
  
  
require_once('./twitteroauth/twitteroauth.php');
require_once('config.php');

$twObj = new TwitterOAuth(
    $consumerKey,
    $consumerSecret,
    $accessToken,
    $accessTokenSecret
);

$count=1;

//オプション設定
$options = array('q'=>$words,'count'=>$count,'lang'=>$la,'result_type'=>'mixed');
//$options = array('q'=>$words,'count'=>$count,'lang'=>$la,'result_type'=>'recent');
//$options = array('q'=>$words,'count'=>$count,'lang'=>$la);
$json = $twObj->OAuthRequest(
    'https://api.twitter.com/1.1/search/tweets.json',
    'GET',
    $options
);
$jset = json_decode($json, true);

for ($i=0;$i<$count;$i++){
$str_opt[$i]=array('id'=>$jset["statuses"][$i]["id_str"]);
$id_json[$i]= $twObj->OAuthRequest(
    'https://api.twitter.com/1.1/statuses/show.json',
    'GET',
    $str_opt[$i]
);
$id_jset[$i] = json_decode($id_json[$i],true);
$output_url[$i] = $id_jset[$i]["entities"]["urls"][0]["expanded_url"];
};

//echo($output_url[0]);
 
?>