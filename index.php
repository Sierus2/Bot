<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.08.2017
 * Time: 9:54
 */
$output = json_decode(file_get_contents('php://input'),true);
file_put_contents('logs.txt', $output);

?>
