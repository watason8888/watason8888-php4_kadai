<?php

$password = 'test';

$hashed_pw = password_hash($password, PASSWORD_DEFAULT);

echo $hashed_pw;

echo '<pre>';
var_dump(password_verify('test', $hashed_pw));
echo '</pre>';
