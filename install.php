<?php
//如果已经安装，则跳转至首页
if (file_exists(str_replace("\\", '/', dirname(__FILE__)) . '/config/install.link')) {
    header("location:index.php");
    exit();
}

define('LOCK_TO_INSTALL', true);//锁定安装状态

$mod = 'site';
$do = "install";
$_GET['name'] = "public";

ob_start();
$CLASS_LOADER = "driver";
require 'includes/init.php';
ob_end_flush();

exit();

