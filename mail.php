<?php

mb_language("japanese");
mb_internal_encoding("utf-8");

session_start();

$to='ys-soccer-4821@outlook.jp';
$name=htmlspecialchars($_SESSION['name']);
$mail=htmlspecialchars($_SESSION['mail']);
$message=htmlspecialchars($_SESSION['message']);
$header="From:$mail";

$body="お名前"."\n"."$name"."\n\n"
."メールアドレス"."\n"."$mail"."\n\n"
."お問い合わせ内容"."\n"."$message"."\n\n";

?>

<?php if((mb_send_mail($to,'',$body,$header))) : ?>
    <p>メールの送信が完了しました</p>
<?php else : ?>
    <p>メールの送信に失敗しました。</p>
<?php endif ; ?>
<a href="index.html">戻る</a>