<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.08.2017
 * Time: 9:54
 */
$output = file_get_contents('php://input');
file_put_contents('logs.txt', $output);

?>