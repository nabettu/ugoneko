
<?php
  // POSTを取得
  $num = $_POST['num'] ;

  // ファイルデータを読み込む
  $data = $num;
  // 出力
  //echo $data;
  
require_once('config.php');


  // MySQLへ接続する
  $link = mysql_connect($url,$user,$pass) or die("MySQLへの接続に失敗しました。");

  // データベースを選択する
  $sdb = mysql_select_db($db,$link) or die("データベースの選択に失敗しました。");

  // クエリを送信する
  $sql = "SELECT * FROM ugoneko";
  $result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);

  //結果セットの行数を取得する
  $rows = mysql_num_rows($result);
  $i=0;
  
  
  
while ($row_s = mysql_fetch_assoc($result)) {
 //   print($row_s['No']);
//	echo ":";
  //  echo $row_s['URL'];
//	echo ":";
	
	$v[$i] = $row_s['URL'];
//	echo $v[$i];
	$i=$i+1;
//	echo ":".$i;
   // print($v[$i]);
//	echo "<br>";
	
}


  //結果保持用メモリを開放する
  mysql_free_result($result);

  // MySQLへの接続を閉じる
  mysql_close($link) or die("MySQL切断に失敗しました。");

echo $v[$num];

?>
