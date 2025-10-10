<?php

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$module_version = [
    'name' => 'Posts', // Tieu de module
    'modfuncs' => 'main,detail', // Cac function co block
    'change_alias' => '',
    'submenu' => '',
    'is_sysmod' => 0, // 1:0 => Co phai la module he thong hay khong
    'virtual' => 0, // 1:0 => Co cho phep ao hao module hay khong
    'version' => '5.0.00', // Phien ban cua modle
    'date' => 'Friday, October 17, 2025 4:00:00 PM GMT+07:00', // Ngay phat hanh phien ban
    'author' => 'Nguyễn Văn A <abc@abc.vn>', // Tac gia
    'uploads_dir' => [
        $module_upload,
    ],
    'icon' => 'fa-solid fa-newspaper'
];
