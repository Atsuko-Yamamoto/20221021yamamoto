<?php
$username = htmlspecialchars($_POST['name'], ENT_QUOTES);
echo $username . "さんご登録ありがとうございます！";