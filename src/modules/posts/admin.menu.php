<?php

if (!defined('NV_ADMIN')) {
    exit('Stop!!!');
}

$allow_func = [
    'main',
    'add',
    'edit',
    'delete',
];

// NV_IS_ADMIN => 1*
// NV_IS_SPADMIN => 2*
// NV_IS_GODADMIN => 3*
$NV_IS_ADMIN_MODULE = true;
$NV_IS_ADMIN_FULL_MODULE = true;

// $submenu['cat'] = $nv_Lang->getModule('categories');
$submenu = [
    'add' => 'Thêm bài viêt'
];
