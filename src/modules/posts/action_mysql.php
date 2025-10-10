<?php

// Xóa bảng
$sql_drop_module = [];
$sql_drop_module[] = 'DROP TABLE IF EXISTS `' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '`';

// Tạo bảng
$sql_create_module = $sql_drop_module;
$sql_create_module[] = 'CREATE TABLE `' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "` (
    `id` INT (11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `title` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Tiêu đề',
    `description` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Mô tả ngắn',
    `image` VARCHAR(255) NOT NULL DEFAULT '' COMMENT 'Hình ảnh minh họa',
    `content` MEDIUMTEXT NOT NULL DEFAULT '' COMMENT 'Nội dung chi tiết bài viết',
    `status` TINYINT (1) NOT NULL DEFAULT '1' COMMENT 'Trạng thái. 0: ẩn, 1: hiện',
    `created_at` INT (11) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Tạo lúc',
    `updated_at` INT (11) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Cập nhật gần nhất',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT = 'Lưu danh sách bài viết'";
