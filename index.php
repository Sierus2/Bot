<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.08.2017
 * Time: 9:54
 */
$output = file_get_contents("http://ok.ru");
file_put_contents('logs.txt', $output);

?>