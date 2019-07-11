<?php
// var_dump($_POST);
// exit();

//functions.phpの呼び出し
include('functions.php');

// 入力チェック
if (
    !isset($_POST['title']) || $_POST['title'] == '' || // 空入力の場合
    !isset($_POST['comment']) || $_POST['comment'] == '' || // 空入力の場合
    !isset($_POST['price01']) || $_POST['price01'] == '' || // 空入力の場合
    !isset($_POST['price07']) || $_POST['price07'] == '' || // 空入力の場合
    !isset($_POST['price30']) || $_POST['price30'] == '' || // 空入力の場合
    !isset($_POST['zipcode']) || $_POST['zipcode'] == '' || // 空入力の場合
    !isset($_POST['prefecture']) || $_POST['prefecture'] == '' || // 空入力の場合
    !isset($_POST['city']) || $_POST['city'] == '' || // 空入力の場合
    !isset($_POST['adress01']) || $_POST['adress01'] == '' || // 空入力の場合
    !isset($_POST['space01']) || $_POST['space01'] == '' || // 空入力の場合
    !isset($_POST['space02']) || $_POST['space02'] == '' || // 空入力の場合
    !isset($_POST['space03']) || $_POST['space03'] == '' || // 空入力の場合
    !isset($_POST['space04']) || $_POST['space04'] == '' || // 空入力の場合
    !isset($_POST['space05']) || $_POST['space05'] == '' || // 空入力の場合
    !isset($_POST['space06']) || $_POST['space06'] == '' || // 空入力の場合
    !isset($_POST['option01']) || $_POST['option01'] == '' || // 空入力の場合
    !isset($_POST['option02']) || $_POST['option02'] == '' || // 空入力の場合
    !isset($_POST['option03']) || $_POST['option03'] == '' || // 空入力の場合
    !isset($_POST['option04']) || $_POST['option04'] == '' || // 空入力の場合
    !isset($_POST['nearby01']) || $_POST['nearby01'] == '' || // 空入力の場合
    !isset($_POST['nearby02']) || $_POST['nearby02'] == '' || // 空入力の場合
    !isset($_POST['nearby03']) || $_POST['nearby03'] == '' || // 空入力の場合
    !isset($_POST['nearby04']) || $_POST['nearby04'] == '' || // 空入力の場合
    !isset($_POST['cancel01']) || $_POST['cancel01'] == '' || // 空入力の場合
    !isset($_POST['cancel02']) || $_POST['cancel02'] == '' // 空入力の場合
) {
    exit('ParamError');
}

//POSTデータ取得
$title = $_POST['title'];
$comment = $_POST['comment'];
$price01 = $_POST['price01'];
$price07 = $_POST['price07'];
$price30 = $_POST['price30'];
$zipcode = $_POST['zipcode'];
$prefecture = $_POST['prefecture'];
$city = $_POST['city'];
$adress01 = $_POST['adress01'];
$adress02 = $_POST['adress02'];
$space01 = $_POST['space01'];
$space02 = $_POST['space02'];
$space03 = $_POST['space03'];
$space04 = $_POST['space04'];
$space05 = $_POST['space05'];
$space06 = $_POST['space06'];
$option01 = $_POST['option01'];
$option02 = $_POST['option02'];
$option03 = $_POST['option03'];
$option04 = $_POST['option04'];
$nearby01 = $_POST['nearby01'];
$nearby02 = $_POST['nearby02'];
$nearby03 = $_POST['nearby03'];
$nearby04 = $_POST['nearby04'];
$cancel01 = $_POST['cancel01'];
$cancel02 = $_POST['cancel02'];

//DB接続
$pdo = db_conn();

//データ登録SQL作成
$sql = 'INSERT INTO parksite_table(id, title, comment, price01, price07, price30, zipcode, prefecture, city, adress01, adress02, space01, space02, space03, space04, space05, space06, option01, option02, option03, option04, nearby01, nearby02, nearby03, nearby04, cancel01, cancel02, indate)
VALUES(NULL, :a1, :a2, :a3, :a4, :a5, :a6, :a7, :a8, :a9, :a10, :a11, :a12, :a13, :a14, :a15, :a16, :a17, :a18, :a19, :a20, :a21, :a22, :a23, :a24, :a25, :a26, sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $title, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $comment, PDO::PARAM_STR);
$stmt->bindValue(':a3', $price01, PDO::PARAM_INT);
$stmt->bindValue(':a4', $price07, PDO::PARAM_INT);
$stmt->bindValue(':a5', $price30, PDO::PARAM_INT);
$stmt->bindValue(':a6', $zipcode, PDO::PARAM_STR);
$stmt->bindValue(':a7', $prefecture, PDO::PARAM_STR);
$stmt->bindValue(':a8', $city, PDO::PARAM_STR);
$stmt->bindValue(':a9', $adress01, PDO::PARAM_STR);
$stmt->bindValue(':a10', $adress02, PDO::PARAM_STR);
$stmt->bindValue(':a11', $space01, PDO::PARAM_INT);
$stmt->bindValue(':a12', $space02, PDO::PARAM_INT);
$stmt->bindValue(':a13', $space03, PDO::PARAM_INT);
$stmt->bindValue(':a14', $space04, PDO::PARAM_INT);
$stmt->bindValue(':a15', $space05, PDO::PARAM_INT);
$stmt->bindValue(':a16', $space06, PDO::PARAM_INT);
$stmt->bindValue(':a17', $option01, PDO::PARAM_INT);
$stmt->bindValue(':a18', $option02, PDO::PARAM_INT);
$stmt->bindValue(':a19', $option03, PDO::PARAM_INT);
$stmt->bindValue(':a20', $option04, PDO::PARAM_INT);
$stmt->bindValue(':a21', $nearby01, PDO::PARAM_INT);
$stmt->bindValue(':a22', $nearby02, PDO::PARAM_INT);
$stmt->bindValue(':a23', $nearby03, PDO::PARAM_INT);
$stmt->bindValue(':a24', $nearby04, PDO::PARAM_INT);
$stmt->bindValue(':a25', $cancel01, PDO::PARAM_INT);
$stmt->bindValue(':a26', $cancel02, PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    //５．index.phpへリダイレクト
    header('Location: select.php');
}
