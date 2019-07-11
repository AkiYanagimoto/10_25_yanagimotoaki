<?php
// DB接続関数
function db_conn()
{
    $dbn = 'mysql:dbname=gsf_d03_25_productdb;charset=utf8;port=3306;host=localhost';
    $user = 'root';
    $pwd = 'root';

    try {
        return new PDO($dbn, $user, $pwd);
    } catch (PDOException $e) {
        exit('dbError:' . $e->getMessage());
    }
}
