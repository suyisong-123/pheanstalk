<?php
use Pheanstalk\Pheanstalk;
require_once(__DIR__.'/../vendor/autoload.php');

$data = [
    'name'=>'suyisong',
    'age'=>13
];
$p = Pheanstalk::create('39.108.237.2', 11300); //链接消息队列服务器
var_dump($p);