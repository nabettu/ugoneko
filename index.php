<!--

ソースを見ようだなんて！　のびたさんのエッチ！

-->
<html prefix="og: http://ogp.me/ns#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<link href="po.css" rel="stylesheet">
<!--link href="assets/css/bootstrap-responsive.css" rel="stylesheet"-->
<title>うごねこ</title>

<link rel="shortcut icon" href="./image/favi.png">
<meta property="og:title" content="ugoneko" />
<meta property="og:type" content="うごねこ" />
<meta property="og:url" content="http://ugoneko.t-tu.com/" />
<meta property="og:image" content="http://ugoneko.t-tu.com/image/ugoneko_logo2.png" />

</head>

<body style="">

<div class="container-fluid">

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
	<div class="container">
		<a href="./" class="brand"><img src="image/ugoneko_logo.png" width="130"></a>

        <ul class="nav pull-right">
            <li><a href="http://t-tu.com"><img src="image/hp_logo.png" width="130"></a></li>
        </ul>

		</div>
    </div>
</div>


<div class="ナビゲーションバー以下開始" style="padding-top:100px;">

<script language="javascript" type="text/javascript">
	function ChangeIMG(No) {
	
// src= .$ex_url[$i]."/embed/simple\
	var next_url;
	var n=document.getElementById("vine"+No).name;
	//alert(Number(n)+3);
	a=String(Number(n)+3);
	//alert(a);
	var n_data="num="+a;
	//alert(n_data);
	//document.getElementById("test_out").innerHTML = "a";

$.ajax({
        type: "POST",
//        url: "boorin.php",
//        data: 'num=#CAT AND vine.co/v/&la=en',
        url: "get_url_js.php",
        data: n_data,
        success: function(data) {
 //               alert(data);
//				next_url=data[n];
//				document.getElementById("test_out2").innerHTML =data+'/embed/simple';
				document.getElementById("vine"+No).src = data+'/embed/simple';
				document.getElementById("vine"+No).name = Number(a);
				document.getElementById("twbutton"+No).href = 'http://twitter.com/share?url='+data+'&text=[うごうご]&via=うごねこ　http://t-tu.com/app/ugoneko';


        },
        error: function() {
                alert('error');
        }
});
//*/
//alert('YEAH');
	//document.getElementById("test_out").innerHTML = "b";

	
	};
	
</script>


    <!--input type="button" id="kick_ajax" value="Ajax!">
    <script>
        $(function() {
            $('#kick_ajax').click(function() {
					alert('読み込み終了！');
            });
        });
    </script-->


<?php
require("get_url.php");
//データ取得数
$ex_url=get_db();

echo "<div class=\"row-fluid\">";
//echo "<div class=\"container-fluid\">";

//固定
$tw_count=3;

for($i = 0; $i < $tw_count; $i++){

echo "<div class=\"span4\">";
echo "<img class=\"pola\" src=\"./image/b34.png\" >";

echo "<iframe id=\"vine".$i."\" name=".$i." class=\"vine-embed\" src=\"".$ex_url[$i]."/embed/simple\" width=\"260\" height=\"260\" frameborder=\"2\" ></iframe><script async src=\"//platform.vine.co/static/scripts/embed.js\" charset=\"utf-8\"></script>";

echo "<br>";
echo "<br>";
echo "<div class=\"button\"><a href=\"JavaScript:ChangeIMG('".$i."')\"><img class=\"button\" src=\"./image/nyext.png\" ></a></div>";
echo "<img src=\"./image/re.png\" class=\"ping\" >";

echo "<a id=\"twbutton".$i."\" href=\"http://twitter.com/share?url=".$ex_url[$i]."&text=[うごうご]&via=うごねこ　http://t-tu.com/app/ugoneko\" target=\"_blank\">";
echo "<img src=\"./image/tw.png\" class=\"tw\" >";
echo "</a>";

//echo "<a href=\"http://twitter.com/share?url=".$ex_url[$i]."&text=[うごうご]&via=うごねこ　http://t-tu.com/app/ugoneko>";
//echo "<img src=\"./image/tw.png\" class=\"tw\" >";
//echo "</a>";

echo "</div>";




};
//echo "</div>";
echo "</div>";

?>


<div id="footer" style="padding-top:360px;">
<div class="container">
<div class="row">
	
<hr size="1" color="#999999" style="border-style:dashed;" width="100%">
<!--a href="./">reload</a>
<div id="test_out">testteest</div>
<div id="test_out2">test2teest</div-->

<div class="span6">
<p style="text-align: left;">
<script type="text/javascript">
// <![CDATA[
google_ad_client = "ca-pub-7240536018506970"; /* google 横長 */ google_ad_slot = "5919193843"; google_ad_width = 468; google_ad_height = 60;
// ]] > 
</script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
// <![CDATA[
// ]] > 
</script></p>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="span6">
<div class="pull-right">
<p class="copyright" style="text-align:right;">
<!--ソーシャルボタン-->

<div class="fb-like" data-href="http://tw-eki.t-tu.com" data-width="450" data-layout="button_count" data-show-faces="true" data-send="false"></div>
<a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple-balloon" title="このエントリーをはてなブックマークに追加">
<img src="http://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>
<script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
<div class="g-plusone" data-size="medium"></div>
<script type="text/javascript">
  window.___gcfg = {lang: 'ja'};
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://ugoneko.t-tu.com/" data-lang="ja">ツイート</a>
<script>
!function(d,s,id){
var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);
}}(document, 'script', 'twitter-wjs');
</script>

<p class="copyright" style="text-align:right;">
vineの猫の動画を取得して再生するサービス : うごねこ
<br>
    Copyright &copy; 2013 <a href="http://t-tu.com">t-tu.com</a> All Rights Reserved.
</p>

</div></div>


</div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<br>


</body>
</html>
