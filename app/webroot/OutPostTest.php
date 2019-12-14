<?php
echo "<div><div>ポストデータテスト";
echo $_POST['tempPostData'];
$tempPostData ="test"; //$_POST['pay_method'];
?>
<!DOCTYPE html>

<html lang = "ja">
<head>
<meta charset = "UFT-8">
<title>確認</title>
</head>
<body>
<h1>POSTデータテスト</h1>

<form action = "http://www.example.com/pg/cakephp/myaonapp/Customers/nekoin" method = "post">
<input type = "hidden" name ="tempPostData"value= <?php echo $tempPostData ?>><br/>
<input type = "submit" value ="送信">
</form>
</body>
</html>
