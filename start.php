<?php
/**
 * Created by PhpStorm.
 * User: suhangyang
 * Date: 2018/3/14
 * Time: 下午3:13
 */

use Workerman\Worker;

require_once __DIR__.'/Autoloader.php';

$wxWorker = new  Worker('websocket://0.0.0.0:8383');

$wxWorker->count =1;

$wxWorker->onMessage =function ($connection,$data)
{

    $connection->send($data);

};

Worker::runAll();
