<?php
//確認帳密是否正確

include_once "./connect.php";

$acc = $_POST['acc'];

$sql = "SELECT * FROM `users` WHERE `acc` = '$acc'";

$user=$pdo->query($sql)->fetch();

if(empty($user)){
    echo "查無此帳號";
}else{
   echo "你當初提供的密碼提示為:".$user['passnote'];
}

?>
<a href="index.php">回首頁</a><a href="login.php">重新登入</a>