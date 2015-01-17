<?php 
function get_url($words,$la,$count){

require_once('./twitteroauth/twitteroauth.php');
require_once('config.php');
    
$twObj = new TwitterOAuth(
    $consumerKey,
    $consumerSecret,
    $accessToken,
    $accessTokenSecret
);

//�I�v�V�����ݒ�
//$options = array('q'=>$words,'count'=>$count,'lang'=>$la,'result_type'=>'mixed');
$options = array('q'=>$words,'count'=>$count,'lang'=>$la,'result_type'=>'recent');
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
return $output_url;

};

function get_1url($words,$la){

require_once('./twitteroauth/twitteroauth.php');
require_once('config.php');
    
$twObj = new TwitterOAuth(
    $consumerKey,
    $consumerSecret,
    $accessToken,
    $accessTokenSecret
);

$count=1;

//�I�v�V�����ݒ�
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
return $output_url[0];

};

?>