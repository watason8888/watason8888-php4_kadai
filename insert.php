<?php
$name   = $_POST['name'];
$email  = $_POST['email'];
$naiyou = $_POST['naiyou'];
$age    = $_POST['age'];

require_once('funcs.php');
$pdo = db_conn();

$stmt = $pdo->prepare('INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES(:name,:email,:age,:naiyou,sysdate());');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_INT);
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);
$status = $stmt->execute(); 

if ($status == false) {
    sql_error($stmt);
} else {
    redirect('index.php');
}
