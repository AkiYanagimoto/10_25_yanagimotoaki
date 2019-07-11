<?php
include('functions.php');

$id = $_GET['id'];

$pdo = db_conn();

//2. データ表示SQL作成
$sql = 'SELECT*FROM parksite_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
if ($status == false) {
    showSqlErrorMsg($stmt);
} else {
    $result = $stmt->fetch();
}

// var_dump($result);
// exit();

$title .= '<h2>' . $result['title'] . '</h2>';
$comment .= '<h4>' . $result['comment'] . '</h4>';

$price01 .= '<p>' . "価格(1泊):" . "  " . $result['price01'] . '</p>';
$price07 .= '<p>' . "価格(7泊):" . "  " . $result['price07'] . '</p>';
$price30 .= '<p>' . "価格(30泊):" . "  " . $result['price30'] . '</p>';
$zipcode .= '<p>' . "郵便番号:" . "  " . $result['zipcode'] . '</p>';
$prefecture .= '<p>' . "都道府県:" . "  " . $result['prefecture'] . '</p>';
$city .= '<p>' . "市町村:" . "  " . $result['city'] . '</p>';
$adress01 .= '<p>' . "番地など:" . "  " . $result['adress01'] . '</p>';
$adress02 .= '<p>' . "補足説明:" . "  " . $result['adress02'] . '</p>';

if ($result['space01'] == 0) {
    $space01 .= '<p>' . '<span style="color:gray";>' . '駐車スペースに関する情報１' . '</span>' . '</p>';
} elseif ($result['space01'] == 1) {
    $space01 .= '<p>' . '<span style="color:black";>' . '駐車スペースに関する情報１' . '</span>' . '</p>';
}
if ($result['space02'] == 0) {
    $space02 .= '<p>' . '<span style="color:gray";>' . '駐車スペースに関する情報２' . '</span>' . '</p>';
} elseif ($result['space02'] == 1) {
    $space02 .= '<p>' . '<span style="color:black";>' . '駐車スペースに関する情報２' . '</span>' . '</p>';
}
if ($result['space03'] == 0) {
    $space03 .= '<p>' . '<span style="color:gray";>' . '駐車スペースに関する情報３' . '</span>' . '</p>';
} elseif ($result['space03'] == 1) {
    $space03 .= '<p>' . '<span style="color:black";>' . '駐車スペースに関する情報３' . '</span>' . '</p>';
}
if ($result['space04'] == 0) {
    $space04 .= '<p>' . '<span style="color:gray";>' . '駐車スペースに関する情報４' . '</span>' . '</p>';
} elseif ($result['space04'] == 1) {
    $space04 .= '<p>' . '<span style="color:black";>' . '駐車スペースに関する情報４' . '</span>' . '</p>';
}
if ($result['space05'] == 0) {
    $space05 .= '<p>' . '<span style="color:gray";>' . '駐車スペースに関する情報５' . '</span>' . '</p>';
} elseif ($result['space05'] == 1) {
    $space05 .= '<p>' . '<span style="color:black";>' . '駐車スペースに関する情報５' . '</span>' . '</p>';
}
if ($result['space06'] == 0) {
    $space06 .= '<p>' . '<span style="color:gray";>' . '駐車スペースに関する情報６' . '</span>' . '</p>';
} elseif ($result['space06'] == 1) {
    $space06 .= '<p>' . '<span style="color:black";>' . '駐車スペースに関する情報６' . '</span>' . '</p>';
};

if ($result['option01'] == 0) {
    $option01 .= '<p>' . '<span style="color:gray";>' . 'オプションサービス１' . '</span>' . '</p>';
} elseif ($result['option01'] == 1) {
    $option01 .= '<p>' . '<span style="color:black";>' . 'オプションサービス１' . '</span>' . '</p>';
}
if ($result['option02'] == 0) {
    $option02 .= '<p>' . '<span style="color:gray";>' . 'オプションサービス２' . '</span>' . '</p>';
} elseif ($result['option02'] == 1) {
    $option02 .= '<p>' . '<span style="color:black";>' . 'オプションサービス２' . '</span>' . '</p>';
}
if ($result['option03'] == 0) {
    $option03 .= '<p>' . '<span style="color:gray";>' . 'オプションサービス３' . '</span>' . '</p>';
} elseif ($result['option03'] == 1) {
    $option03 .= '<p>' . '<span style="color:black";>' . 'オプションサービス３' . '</span>' . '</p>';
}
if ($result['option04'] == 0) {
    $option04 .= '<p>' . '<span style="color:gray";>' . 'オプションサービス４' . '</span>' . '</p>';
} elseif ($result['option04'] == 1) {
    $option04 .= '<p>' . '<span style="color:black";>' . 'オプションサービス４' . '</span>' . '</p>';
}

if ($result['nearby01'] == 0) {
    $nearby01 .= '<p>' . '<span style="color:gray";>' . '近隣施設１' . '</span>' . '</p>';
} elseif ($result['nearby01'] == 1) {
    $nearby01 .= '<p>' . '<span style="color:black";>' . '近隣施設１' . '</span>' . '</p>';
}
if ($result['nearby02'] == 0) {
    $nearby02 .= '<p>' . '<span style="color:gray";>' . '近隣施設２' . '</span>' . '</p>';
} elseif ($result['nearby02'] == 1) {
    $nearby02 .= '<p>' . '<span style="color:black";>' . '近隣施設２' . '</span>' . '</p>';
}
if ($result['nearby03'] == 0) {
    $nearby03 .= '<p>' . '<span style="color:gray";>' . '近隣施設３' . '</span>' . '</p>';
} elseif ($result['nearby03'] == 1) {
    $nearby03 .= '<p>' . '<span style="color:black";>' . '近隣施設３' . '</span>' . '</p>';
}
if ($result['nearby04'] == 0) {
    $nearby04 .= '<p>' . '<span style="color:gray";>' . '近隣施設４' . '</span>' . '</p>';
} elseif ($result['nearby04'] == 1) {
    $nearby04 .= '<p>' . '<span style="color:black";>' . '近隣施設４' . '</span>' . '</p>';
}

if ($result['cancel01'] == 0) {
    $cancel01 .= '<p>' . "キャンセルポリシー(平日の場合):" . " " . "３日前迄のキャンセルは無料" . '</p>';
} elseif ($result['cancel01'] == 1) {
    $cancel01 .= '<p>' . "キャンセルポリシー(平日の場合):" . " " .  "５日前迄のキャンセルは無料"  . '</p>';
} elseif ($result['cancel01'] == 2) {
    $cancel01 .= '<p>' . "キャンセルポリシー(平日の場合):" . " " .  "７日前迄のキャンセルは無料"  . '</p>';
}

if ($result['cancel02'] == 0) {
    $cancel02 .= '<p>' . "キャンセルポリシー(週末・祝日が含まれる場合):" . " " . "７日前迄のキャンセルは無料" . '</p>';
} elseif ($result['cancel02'] == 1) {
    $cancel02 .= '<p>' . "キャンセルポリシー(週末・祝日が含まれる場合):" . " " .  "９日前迄のキャンセルは無料"  . '</p>';
} elseif ($result['cancel02'] == 2) {
    $cancel02 .= '<p>' . "キャンセルポリシー(週末・祝日が含まれる場合):" . " " .  "１１日前迄のキャンセルは無料"  . '</p>';
}


?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>todoリスト表示</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
    <meta name="Content-Style-Type" content="text/css">
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html">施設登録</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="select.php">施設一覧</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="conteiner">

        <?= $title ?>
        <?= $comment ?>

        <div class="row">
            <div class="col-sm-2">
                <p>料金</p>
            </div>
            <div class="col-sm-10">
                <?= $price01 ?>
                <?= $price07 ?>
                <?= $price30 ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p>住所</p>
            </div>
            <div class="col-sm-10">
                <?= $zipcode ?>
                <?= $prefecture ?>
                <?= $city ?>
                <?= $adress01 ?>
                <?= $adress02 ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p>設備</p>
            </div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-5">
                        <?= $space01 ?>
                        <?= $space02 ?>
                        <?= $space03 ?>
                    </div>
                    <div class="col-sm-5">
                        <?= $space04 ?>
                        <?= $space05 ?>
                        <?= $space06 ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p>オプション</p>
            </div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-5">
                        <?= $option01 ?>
                        <?= $option02 ?>
                    </div>
                    <div class="col-sm-5">
                        <?= $option03 ?>
                        <?= $option04 ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p>近隣施設</p>
            </div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-5">
                        <?= $nearby01 ?>
                        <?= $nearby02 ?>
                    </div>
                    <div class="col-sm-5">
                        <?= $nearby03 ?>
                        <?= $nearby04 ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p>キャンセルポリシー</p>
            </div>
            <div class="col-sm-10">
                <?= $cancel01 ?>
                <?= $cancel02 ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small blue ">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href=""> Gs Academy Fukuoka DEV3 No.25</a>
        </div>
    </footer>
</body>

</html>