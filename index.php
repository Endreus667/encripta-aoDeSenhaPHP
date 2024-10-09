<?php
$senha = '1234';

$hash = password_hash($senha, PASSWORD_DEFAULT);

echo "SENHA ORIGINAL É: ".$senha."<br/>";
echo "HASH: ".$hash;