<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2020/5/23
 * Time: 11:07 下午
 */
class UserService
{
    public static function getUserInfo($uid)
    {
        return [
            'id' => $uid,
            'username' => "zhaoge",
        ];
    }
}
$service = $_GET['service'];
$action = $_GET['action'];
$argv = file_get_contents("php://input");

if ($argv) {
    $argv = json_encode($argv, true);
}

$res = call_user_func_array([$service, $action], $argv);

echo json_encode($res);