<?php
session_start();
require_once('funcs.php');
loginCheck();

if($_SESSION['kanri_flg'] !== 1){
    header('Location: select.php');
    exit();
}

$id = $_GET['id'];
$pdo = db_conn();

$stmt = $pdo->prepare('DELETE FROM gs_an_table WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}
