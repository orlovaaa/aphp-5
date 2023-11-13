<?php declare(strict_types=1);
//require_once './autoload.php';
require_once(__DIR__ . '\autoload.php');

use Entities\UserTableWrapper;

$userTable = new UserTableWrapper();
$userTable->insert(['id' => 1, 'login' => 'ajoq', 'email' => 'ajoq@ya.ru']);
$userTable->insert(['id' => 2, 'login' => 'loopen', 'email' => 'loopen@ya.ru']);
$userTableRows = $userTable->get();
print_r($userTableRows);
$updArr = $userTable->update(1, ['login' => 'ajoqoff']);
print_r($updArr);
echo PHP_EOL;
echo $updArr['login'];
echo PHP_EOL;
echo 'Удаление элемента массива' . PHP_EOL;
$userTable->delete(2);
$userTableRows = $userTable->get();
print_r($userTableRows);