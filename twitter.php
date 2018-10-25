<?php
 // load library TwitterOAuth
 require "vendor/autoload.php";
 use Abraham\TwitterOAuth\TwitterOAuth;

 // menentukan keyword yang akan di cari
$getcari = $_GET['search'];
$keyword = $getcari;

 // ganti dengan API twitter anda
 $key = 'Ian1y2YtFgN07KB6VZ7RiHJqu';
 $secret_key = 'w13loCr1RckHkZvDXbAazxv5gEpbFZ8a6sDFrsBZo9ID5Des5l';
 $token = '464384965-wrh2z3T9FNgP7TyFwzFi6lJP2eJwwJ51mjo5IP52';
 $secret_token = 'ohHc8F561BkQlYk1i1X4JTbjr4Y0v4D74IdH7QigkI6aW';

 // membuka koneksi
 $conn = new TwitterOAuth($key, $secret_key, $token, $secret_token);

 // mengambil tweet berdasarkan keyword yang di tentukan
 // anda bisa merubah jumlah tweet yang akan di tampilkanb dengan merubah angka pada count
 $tweets = $conn->get('search/tweets', array('q'=>$keyword, 'count'=>100, 'lang'=>'in'));


 // menampilkan hasil keyword yang di tentukan
//  echo '<h4>Keyword @'.$keyword.'</h4><hr />';
//  foreach ($tweets->statuses as $tweet) {
//   $str_id = $tweet->id_str;
//   $user = $tweet->user->screen_name;
//   $text = $tweet->text;
//   $date = date('Y-m-d h:i:s', strtotime($tweet->created_at));

//   echo '</strong>'.$date.'</strong>< br />';
//   echo '<strong>'.$user.'</strong> : '.$text.'< br /><hr />< br />';
// }
?>


