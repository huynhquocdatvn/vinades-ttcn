<?php

/**
 * NukeViet Content Management System
 * @version 5.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_MODULES')) {
    exit('Stop!!!');
}

$sql_drop_module = [];
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . ';';

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE `" . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "` (
    `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `title` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Tiêu đề',
    `description` TEXT NOT NULL DEFAULT '' COMMENT 'Mô tả ngắn',
    `image` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Hình ảnh minh họa',
    `content` MEDIUMTEXT NOT NULL DEFAULT '' COMMENT 'Nội dung chi tiết bài viết',
    `status` TINYINT(1) NOT NULL DEFAULT '1' COMMENT 'Trạng thái. 0: ẩn, 1: hiện',
    `created_at` INT(11) NOT NULL DEFAULT '0' COMMENT 'Tạo lúc',
    `updated_at` INT(11) NOT NULL DEFAULT '0' COMMENT 'Cập nhật gần nhất',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB COMMENT = 'Danh sách bải viết'";
