<?php

// ファイルの読み込み
require_once('Models/Task.php');
// データの受け取り
$title = $_post['title'];
$contents = $_post['contents'];
// dateメソッド：日付を入力する際に使う
$currentTime = date("Y/m/d H:i:s");


// DBへのデータ保存
$task = new Task();
$task->create([$title, $contents, $currentTime]);
// リダイレクト
header('location:index.php');
exit;

