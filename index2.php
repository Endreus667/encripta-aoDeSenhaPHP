<?php 
$has = '$2y$10$UYs9geFtRrQwvEvP6WiN8.gQ7UrkHOcGjxCT0oAqWi6ThNQgzIMFG';
$senha = '1234';

if(password_verify($senha, $has)) {
    echo 'Senha correta';
} else {
    echo 'senha errada!';
}