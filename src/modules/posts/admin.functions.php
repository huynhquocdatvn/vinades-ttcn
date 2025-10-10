<?php

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE') or !defined('NV_IS_MODADMIN')) {
    exit('Stop!!!');
}

if ($NV_IS_ADMIN_MODULE) {
    define('NV_IS_ADMIN_MODULE', true);
}

if ($NV_IS_ADMIN_FULL_MODULE) {
    define('NV_IS_ADMIN_FULL_MODULE', true);
}

define('NV_MIN_MEDIUM_SYSTEM_ROWS', 100000);


define('NV_IS_FILE_ADMIN', true);
