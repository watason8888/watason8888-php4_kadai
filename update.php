<?php
$name   = $_POST['name'];
$email  = $_POST['email'];
$naiyou = $_POST['naiyou'];
$age    = $_POST['age'];
$id     = $_POST['id'];

require_once('funcs.php');
$pdo = db_conn();

$stmt = $pdo->prepare('UPDATE gs_an_table SET name=:name,email=:email,age=:age,naiyou=:naiyou WHERE id=:id;');
$stmt->bindValue(':name',   $name,   PDO::PARAM_STR);
$stmt->bindValue(':email',  $email,  PDO::PARAM_STR);
$stmt->bindValue(':age',    $age,    PDO::PARAM_INT);
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);
$stmt->bindValue(':id',     $id,     PDO::PARAM_INT);
$status = $stmt->execute();

if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}
