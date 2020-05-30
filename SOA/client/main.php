<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2020/5/23
 * Time: 10:56 下午
 */
class Client{
    private $url;
    private $service;

    private $rpcConfig = [
      "UserService" => "http://127.0.0.1:81"
    ];

    public function __construct($service)
    {
        if (array_key_exists($service, $this->rpcConfig)) {
            $this->url = $this->rpcConfig["UserService"];
            $this->service = $service;
        }
    }

    public function __call($action, $arguments)
    {
        $content = json_encode($arguments);
        $options['http'] = [
            'timeout' => 5,
            'method' => "POST",
            'header' => "Content-type:application/x-www-form-urlencoded",
            'content' => $content,
        ];
        $context = stream_context_create($options);
        $get = [
            'service' => $this->service,
            'action' => $action,
        ];

        $url = $this->url."?".http_build_query($get);
        echo $url.PHP_EOL;

        $res = file_get_contents($url, false, $context);
        return json_decode($res, true);
    }
}

/**
 * @var Client $userService
 */
$userService = new Client("UserService");
$userService->getUserInfo(111);