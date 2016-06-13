<?php
//如果是初次安装，则显示安装页面
if (! file_exists(str_replace("\\", '/', dirname(__FILE__)) . '/config/install.link')) {
    if ((empty($_REQUEST['name']) || ! empty($_REQUEST['name']) && $_REQUEST['name'] != 'public')) {
        header("location:install.php");
        exit();
    }
}
//定义SYSTEM_ACT及变量$mod与$do
if (defined('SYSTEM_ACT') && SYSTEM_ACT == 'mobile') {
    $mod = 'mobile';
} else {
    $mod = empty($_REQUEST['mod']) ? 'mobile' : $_REQUEST['mod'];
}
if ($mod == 'mobile') {
    defined('SYSTEM_ACT') or define('SYSTEM_ACT', 'mobile');
} else {
    defined('SYSTEM_ACT') or define('SYSTEM_ACT', 'index');
}
if (empty($_REQUEST['do'])) {
    $do = 'shopindex';
} else {    
    $do = $_REQUEST['do'];
}
//开启缓存,组织输出
if (! empty($do)) {
    ob_start();
    $CLASS_LOADER = "driver";
    require 'includes/init.php';
    ob_end_flush();
    exit();
}

