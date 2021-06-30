<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <link rel="stylesheet" href="css/style.css">
    <title>Yosino Shingo</title>
    <link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">
</head>
<body>
    <form action="mail.php" method="post" class="confimation-form">
        <h2>確認画面</h2>
        <table border="1">
            <tr>
                <td>名前</td>
                <td><?php echo $_POST["name"]; ?></td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td><?php echo $_POST["mail"]; ?></td>
            </tr>
            <tr>
                <td>お問い合わせ内容</td>
                <td><?php echo $_POST["content"]; ?></td>
            </tr>
        </table>
        <input type="submit" value="送信"/>
        <a href="index.html">戻る</a>
    </form>
</body>
</html>


<!--POSTの中身をsessionへ受け流す-->
<?php

session_start();
$_SESSION["name"]=$_POST["name"];
$_SESSION["mail"]=$_POST["mail"];
$_SESSION["message"]=$_POST["message"];

?>