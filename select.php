<?php

include('functions.php');

$pdo = db_conn();

//2. データ表示SQL作成
$sql = 'SELECT*FROM parksite_table';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//データ表示
if ($status == false) {
    showSqlErrorMsg($stmt);
} else {
    $view = '';
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<li class="list-group-item">';
        $view .= '<h3>' . "名称:" . "  " . $result['title'] . '</h3>';
        $view .= '<h4>' . "場所に関する説明:" . "  " . $result['comment'] . '</h4>';
        $view .= '<div class ="row"> <div class="col-sm-4">' . '<p>' . "価格(1泊):" . "  " . $result['price01'] . "円" . '</p>' . '</div>';
        $view .= '<div class="col-sm-4">' . '<p>' . "都道府県:" . "  " . $result['prefecture'] . " " . $result['city'] . '</p>' . '</div>';
        $view .= '<div class="col-sm-4">' . '<a href="detail.php?id=' . $result[id] . '" class="badge badge-primary">詳細</a>' . '</div>';
        $view .= '</li>';
    }
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
        <?= $view ?>
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