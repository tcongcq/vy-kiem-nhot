/*
 Navicat Premium Data Transfer

 Source Server         : MySQL local
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : vykiem_nhot

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 27/03/2023 12:39:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account_groups
-- ----------------------------
DROP TABLE IF EXISTS `account_groups`;
CREATE TABLE `account_groups` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `group_code` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `group_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `note` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of account_groups
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for accounts
-- ----------------------------
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `account_info` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `account_info_id` int unsigned NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `active` tinyint NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `login_backend` tinyint NOT NULL,
  `login_frontend` tinyint NOT NULL,
  `protected` tinyint NOT NULL,
  `anonymous` tinyint NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `accounts_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of accounts
-- ----------------------------
BEGIN;
INSERT INTO `accounts` (`id`, `account_info`, `account_info_id`, `username`, `password`, `remember_token`, `active`, `last_login`, `login_backend`, `login_frontend`, `protected`, `anonymous`, `created_at`, `updated_at`) VALUES (1, 'users', 1, 'admin', '$2y$10$V3c0v6d2tWlEyc9Zad5FjukQyuExsRZsAnaFCQ6ksmQY7jOEiOHhK', 'JLcwD4KRIwpl2PtQ3B7zPxAYra3dSOiXl7L6W96G2aFkLPk3yWpXCwtcIm2L', 1, '2023-02-16 04:38:09', 1, 1, 1, 1, '2016-08-04 10:56:31', '2023-02-16 04:38:09');
COMMIT;

-- ----------------------------
-- Table structure for configs
-- ----------------------------
DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `attrib` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `language` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of configs
-- ----------------------------
BEGIN;
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (1, 'homepage_title_1', 'CONFIG', 'GET FIRST CLASS LUBRICANTS NEAR YOU', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (2, 'homepage_button_1', 'CONFIG', 'CONTACT US', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (3, 'homepage_link_1', 'CONFIG', '/contact-us', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (4, 'homepage_about_us', 'CONFIG', 'Interocean Lubricants (Pvt) Ltd. incorporated in 2008 serves as the Sole Distributor for Sinopec in Sri Lanka, making Sinopec Lubricants available locally through more than 1,500 dealer networks across the country. Finished and Packed Sinopec Lubricants are imported from China and Singapore. Product portfolio consists of engine oils, gear oils, hydraulic oils, greases, synthetic technology oils, automatic transmission oils and marine oils which are widely applied in many industries.', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (5, 'homepage_about_us_vision', 'CONFIG', '“To make SINOPEC the most preferred lubricant brand whilst being customer centric and reliable.”', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (6, 'homepage_about_us_mission', 'CONFIG', '“To provide quality lubricants to the entire industry whilst creating a sustainable market.”', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (7, 'homepage_about_us_link', 'CONFIG', '/about-us', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (8, 'homepage_product_quantity', 'CONFIG', '9', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (9, 'show_contact', 'CONFIG', '1', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (10, 'show_contact_pos', 'CONFIG', '1', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (11, 'show_contact_email', 'CONFIG', '1', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (12, 'show_contact_phone', 'CONFIG', '1', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (13, 'show_contact_form', 'CONFIG', '1', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (14, 'contact_form_title', 'CONFIG', 'GET IN TOUCH', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (15, 'contact_form_description', 'CONFIG', 'Interocean Lubricants (Pvt) Ltd. incorporated in 2008 serves as the Sole Distributor for Sinopec in Sri Lanka', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (16, 'about_us_vision', 'CONFIG', '“TO MAKE SINOPEC THE MOST PREFERRED LUBRICANT BRAND WHILST BEING CUSTOMER CENTRIC AND RELIABLE.”', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (17, 'about_us_mission', 'CONFIG', '“TO PROVIDE QUALITY LUBRICANTS TO THE ENTIRE INDUSTRY WHILST CREATING A SUSTAINABLE MARKET.”', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (18, 'about_us_content', 'CONFIG', '<p><strong>Interocean Lubricants (Pvt) Ltd. incorporated in 2008 serves as the Sole Distributor for Sinopec in Sri Lanka, making Sinopec Lubricants available locally through more than 1,500 dealer networks across the country. Finished and Packed Sinopec Lubricants are imported from China and Singapore. Product portfolio consists of engine oils, gear oils, hydraulic oils, greases, synthetic technology oils, automatic transmission oils and marine oils which are widely applied in many industries.</strong></p>\n\n<p>Sinopec is an internationally renowned name in the field of world class lubricants, blended using high quality base oils and employing state of the art technologies. It is noteworthy to mention that Sinopec has produced superior quality lubricants for more than 15 years meeting world class standards. China Petroleum & Chemical Corporation (“Sinopec Corp”) is one of the largest integrated Energy and Chemical Companies in China. The scope of its business mainly covers oil and gas exploration, extraction and production, pipeline transmission, oil refining, marketing, storage and transportation of petrochemicals, chemical fibers, chemical fertilizers and other products. It also exports/imports crude oil, natural gases, refined oil products, petrochemicals, chemicals and other commodities and is focused on research, development and advanced technologies. Sinopec Corp was placed at No. 3 in 2017, on the world ranking in Global Fortune 500 Companies.</p>\n\n<p>Sinopec Lubricants are meeting ISO 9001, ISO/TSI6949, ISO 14001, OSHAS 18000 and AS 9100 standards and blended to API/ACEA/OEM /DIN/HSE/JASO/ACEA standards and maintains Kaizen and Total Quality Management System.</p>', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (19, 'show_product_share', 'CONFIG', '', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (20, 'product_content', 'CONFIG', '<p>Sinopec is an internationally renowned name in the field of world class lubricants, blended using high quality base oils and employing state of the art technologies. It is noteworthy to mention that Sinopec has produced superior quality lubricants for more than 15 years meeting world class standards,</p>\n<p>Here are some products we have to offer.</p>', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (21, 'show_header_phone', 'CONFIG', '1', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (22, 'header_phone_title', 'CONFIG', 'Customer Support', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (23, 'header_phone', 'CONFIG', '+84 932 898 498', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (24, 'show_header_email', 'CONFIG', '', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (25, 'header_email_title', 'CONFIG', '', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (26, 'header_email', 'CONFIG', 'info@interocean.lk', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (27, 'show_footer_address', 'CONFIG', '1', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (28, 'footer_address_title', 'CONFIG', 'Showroom', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (29, 'footer_phone', 'CONFIG', '+84 932 898 498', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (30, 'show_footer_phone', 'CONFIG', '1', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (31, 'footer_phone_title', 'CONFIG', 'Hotline', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (32, 'show_footer_email', 'CONFIG', '', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:51');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (33, 'footer_email_title', 'CONFIG', 'Contact US', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:52');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (34, 'footer_email', 'CONFIG', 'info@interocean.lk', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:52');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (35, 'footer_introduce', 'CONFIG', 'Interocean Lubricants (Pvt) Ltd. incorporated in 2008 serves as the Sole Distributor for Sinopec in Sri Lanka, making Sinopec Lubricants available locally through more than 1,500 dealer networks across the country. Finished and Packed Sinopec Lubricants are imported from China and Singapore.', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:52');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (36, 'footer_maps', 'CONFIG', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1821428876633!2d79.88829031431825!3d6.987800594952018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f7d947dc8c25%3A0xf9b22c8a71fc3680!2sInterocean+Lubricants+(Pvt)+Ltd!5e0!3m2!1sen!2slk!4v1535973459356', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:52');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (37, 'banner_homepage_1', 'CONFIG', '', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:52');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (38, 'banner_homepage_2', 'CONFIG', '', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:52');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (39, 'banner_homepage_3', 'CONFIG', '', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:52');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (40, 'banner_contact_us', 'CONFIG', '', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:52');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (41, 'banner_about_us', 'CONFIG', '', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:52');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (42, 'banner_product', 'CONFIG', '', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:52');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (43, 'header_logo', 'CONFIG', '', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:52');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (44, 'footer_logo', 'CONFIG', '', 'en', '2023-02-18 17:46:57', '2023-03-13 12:30:52');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (45, 'homepage_title_1', 'CONFIG', 'GET FIRST CLASS LUBRICANTS NEAR YOU', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (46, 'homepage_button_1', 'CONFIG', 'CONTACT US', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (47, 'homepage_link_1', 'CONFIG', '/contact-us', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (48, 'homepage_about_us', 'CONFIG', 'Interocean Lubricants (Pvt) Ltd. incorporated in 2008 serves as the Sole Distributor for Sinopec in Sri Lanka, making Sinopec Lubricants available locally through more than 1,500 dealer networks across the country. Finished and Packed Sinopec Lubricants are imported from China and Singapore. Product portfolio consists of engine oils, gear oils, hydraulic oils, greases, synthetic technology oils, automatic transmission oils and marine oils which are widely applied in many industries.', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (49, 'homepage_about_us_vision', 'CONFIG', '“To make SINOPEC the most preferred lubricant brand whilst being customer centric and reliable.”', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (50, 'homepage_about_us_mission', 'CONFIG', '“To provide quality lubricants to the entire industry whilst creating a sustainable market.”', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (51, 'homepage_about_us_link', 'CONFIG', '/about-us', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (52, 'homepage_product_quantity', 'CONFIG', '9', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (53, 'show_contact', 'CONFIG', '1', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (54, 'show_contact_pos', 'CONFIG', '1', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (55, 'show_contact_email', 'CONFIG', '1', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (56, 'show_contact_phone', 'CONFIG', '1', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (57, 'show_contact_form', 'CONFIG', '1', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (58, 'contact_form_title', 'CONFIG', 'Thông tin liên hệ', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (59, 'contact_form_description', 'CONFIG', 'Interocean Lubricants (Pvt) Ltd. được thành lập vào năm 2008 đóng vai trò là Nhà phân phối độc quyền cho Sinopec tại Việt Nam.', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (60, 'about_us_vision', 'CONFIG', '“TO MAKE SINOPEC THE MOST PREFERRED LUBRICANT BRAND WHILST BEING CUSTOMER CENTRIC AND RELIABLE.”', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (61, 'about_us_mission', 'CONFIG', '“TO PROVIDE QUALITY LUBRICANTS TO THE ENTIRE INDUSTRY WHILST CREATING A SUSTAINABLE MARKET.”', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (62, 'about_us_content', 'CONFIG', '<p><strong>Interocean Lubricants (Pvt) Ltd. incorporated in 2008 serves as the Sole Distributor for Sinopec in Sri Lanka, making Sinopec Lubricants available locally through more than 1,500 dealer networks across the country. Finished and Packed Sinopec Lubricants are imported from China and Singapore. Product portfolio consists of engine oils, gear oils, hydraulic oils, greases, synthetic technology oils, automatic transmission oils and marine oils which are widely applied in many industries.</strong></p>\n\n<p>Sinopec is an internationally renowned name in the field of world class lubricants, blended using high quality base oils and employing state of the art technologies. It is noteworthy to mention that Sinopec has produced superior quality lubricants for more than 15 years meeting world class standards. China Petroleum & Chemical Corporation (“Sinopec Corp”) is one of the largest integrated Energy and Chemical Companies in China. The scope of its business mainly covers oil and gas exploration, extraction and production, pipeline transmission, oil refining, marketing, storage and transportation of petrochemicals, chemical fibers, chemical fertilizers and other products. It also exports/imports crude oil, natural gases, refined oil products, petrochemicals, chemicals and other commodities and is focused on research, development and advanced technologies. Sinopec Corp was placed at No. 3 in 2017, on the world ranking in Global Fortune 500 Companies.</p>\n\n<p>Sinopec Lubricants are meeting ISO 9001, ISO/TSI6949, ISO 14001, OSHAS 18000 and AS 9100 standards and blended to API/ACEA/OEM /DIN/HSE/JASO/ACEA standards and maintains Kaizen and Total Quality Management System.</p>', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (63, 'show_product_share', 'CONFIG', '', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (64, 'product_content', 'CONFIG', '<p>Sinopec is an internationally renowned name in the field of world class lubricants, blended using high quality base oils and employing state of the art technologies. It is noteworthy to mention that Sinopec has produced superior quality lubricants for more than 15 years meeting world class standards,</p>\n<p>Here are some products we have to offer.</p>', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (65, 'show_header_phone', 'CONFIG', '1', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (66, 'header_phone_title', 'CONFIG', 'Hỗ trợ khách hàng', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (67, 'header_phone', 'CONFIG', '+84 932 898 498', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (68, 'show_header_email', 'CONFIG', '1', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (69, 'header_email_title', 'CONFIG', '', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (70, 'header_email', 'CONFIG', 'info@interocean.lk', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (71, 'show_footer_address', 'CONFIG', '1', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (72, 'footer_address_title', 'CONFIG', 'Showroom', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (73, 'footer_phone', 'CONFIG', '+84 932 898 498', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (74, 'show_footer_phone', 'CONFIG', '1', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (75, 'footer_phone_title', 'CONFIG', 'Hotline', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (76, 'show_footer_email', 'CONFIG', '', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (77, 'footer_email_title', 'CONFIG', 'Liên hệ', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (78, 'footer_email', 'CONFIG', 'info@interocean.lk', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (79, 'footer_introduce', 'CONFIG', 'Interocean Lubricants (Pvt) Ltd. incorporated in 2008 serves as the Sole Distributor for Sinopec in Sri Lanka, making Sinopec Lubricants available locally through more than 1,500 dealer networks across the country. Finished and Packed Sinopec Lubricants are imported from China and Singapore.', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (80, 'footer_maps', 'CONFIG', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1821428876633!2d79.88829031431825!3d6.987800594952018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f7d947dc8c25%3A0xf9b22c8a71fc3680!2sInterocean+Lubricants+(Pvt)+Ltd!5e0!3m2!1sen!2slk!4v1535973459356', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (81, 'banner_homepage_1', 'CONFIG', '', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (82, 'banner_homepage_2', 'CONFIG', '', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (83, 'banner_homepage_3', 'CONFIG', '', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (84, 'banner_contact_us', 'CONFIG', '', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (85, 'banner_about_us', 'CONFIG', '', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (86, 'banner_product', 'CONFIG', '', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (87, 'header_logo', 'CONFIG', '', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (88, 'footer_logo', 'CONFIG', '', 'vi', '2023-02-18 17:47:01', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (89, 'footer_address', 'CONFIG', 'Quốc lộ 1A, khu vực 2<br/> phường Ba Láng, quận Cái Răng, TP. Cần Thơ', 'vi', '2023-03-12 18:19:20', '2023-03-13 12:31:01');
INSERT INTO `configs` (`id`, `code`, `attrib`, `value`, `language`, `created_at`, `updated_at`) VALUES (90, 'footer_address', 'CONFIG', 'National Highway 1A, area 2<br/> Ba Lang ward, Cai Rang district, Can Tho City', 'en', '2023-03-12 18:19:35', '2023-03-13 12:30:51');
COMMIT;

-- ----------------------------
-- Table structure for contact_infos
-- ----------------------------
DROP TABLE IF EXISTS `contact_infos`;
CREATE TABLE `contact_infos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `contact_email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `order` tinyint NOT NULL DEFAULT '0',
  `position` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `language` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `is_show` tinyint DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of contact_infos
-- ----------------------------
BEGIN;
INSERT INTO `contact_infos` (`id`, `contact_name`, `contact_email`, `contact_phone`, `title`, `order`, `position`, `language`, `is_show`, `created_at`, `updated_at`) VALUES (1, 'SANJALEE THARUKA', 'sanjalee@interocean.lk', '+94 77 0038 757', 'HEAD OFFICE', 1, 'Sales Coordinator', 'en', 1, '2023-02-06 14:54:16', '2023-03-13 00:16:18');
INSERT INTO `contact_infos` (`id`, `contact_name`, `contact_email`, `contact_phone`, `title`, `order`, `position`, `language`, `is_show`, `created_at`, `updated_at`) VALUES (2, 'ROMESH GOONAWARDENA', 'romesh@interocean.lk', '+94 77 0038 774', 'INDUSTRIAL', 2, 'Senior Sales Manager', 'en', 1, '2023-02-06 14:54:16', '2023-03-13 00:16:19');
INSERT INTO `contact_infos` (`id`, `contact_name`, `contact_email`, `contact_phone`, `title`, `order`, `position`, `language`, `is_show`, `created_at`, `updated_at`) VALUES (3, 'DUMINDU DE SILVA', 'dumindu@interocean.lk', '+94 77 0038 747', 'AUTOMOTIVE', 3, 'Sales Manager', 'en', 1, '2023-02-06 14:54:16', '2023-03-13 00:16:19');
INSERT INTO `contact_infos` (`id`, `contact_name`, `contact_email`, `contact_phone`, `title`, `order`, `position`, `language`, `is_show`, `created_at`, `updated_at`) VALUES (4, 'LUBE B M DAYARATNE', 'dayaratne@interocean.lk', '+94 77 255 5550', 'CONSULTANT', 4, 'Consultant – Lube', 'en', 1, '2023-02-06 14:54:16', '2023-03-12 17:26:52');
INSERT INTO `contact_infos` (`id`, `contact_name`, `contact_email`, `contact_phone`, `title`, `order`, `position`, `language`, `is_show`, `created_at`, `updated_at`) VALUES (5, 'SANJALEE THARUKA', 'sanjalee@interocean.lk', '+84 77 0038 757', 'HEAD OFFICE', 1, 'Sales Coordinator', 'vi', 1, '2023-03-13 00:28:50', '2023-03-12 18:42:21');
INSERT INTO `contact_infos` (`id`, `contact_name`, `contact_email`, `contact_phone`, `title`, `order`, `position`, `language`, `is_show`, `created_at`, `updated_at`) VALUES (6, 'ROMESH GOONAWARDENA', 'romesh@interocean.lk', '+84 77 0038 774', 'INDUSTRIAL', 2, 'Senior Sales Manager', 'vi', 1, '2023-03-13 00:28:50', '2023-03-12 18:42:28');
INSERT INTO `contact_infos` (`id`, `contact_name`, `contact_email`, `contact_phone`, `title`, `order`, `position`, `language`, `is_show`, `created_at`, `updated_at`) VALUES (7, 'DUMINDU DE SILVA', 'dumindu@interocean.lk', '+84 77 0038 747', 'AUTOMOTIVE', 3, 'Sales Manager', 'vi', 1, '2023-03-13 00:28:50', '2023-03-12 18:42:33');
INSERT INTO `contact_infos` (`id`, `contact_name`, `contact_email`, `contact_phone`, `title`, `order`, `position`, `language`, `is_show`, `created_at`, `updated_at`) VALUES (8, 'LUBE B M DAYARATNE', 'dayaratne@interocean.lk', '+84 77 255 5550', 'CONSULTANT', 4, 'Consultant – Lube', 'vi', 1, '2023-03-13 00:28:50', '2023-03-12 18:42:38');
COMMIT;

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `contact_email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `status` varchar(30) COLLATE utf8mb3_unicode_ci DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of contacts
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for languages
-- ----------------------------
DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `default` tinyint DEFAULT '0',
  `attribs` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of languages
-- ----------------------------
BEGIN;
INSERT INTO `languages` (`id`, `code`, `name`, `default`, `attribs`, `created_at`, `updated_at`) VALUES (1, 'vi', 'Tiếng Việt', 0, NULL, '2023-02-06 14:39:42', '2023-02-06 14:39:45');
INSERT INTO `languages` (`id`, `code`, `name`, `default`, `attribs`, `created_at`, `updated_at`) VALUES (2, 'en', 'English', 1, NULL, '2023-02-06 14:40:02', '2023-02-06 14:40:00');
COMMIT;

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `account_group_id` int unsigned NOT NULL,
  `permission_code` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_account_group_id_foreign` (`account_group_id`),
  CONSTRAINT `permissions_account_group_id_foreign` FOREIGN KEY (`account_group_id`) REFERENCES `account_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for post_categories
-- ----------------------------
DROP TABLE IF EXISTS `post_categories`;
CREATE TABLE `post_categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `is_show` tinyint NOT NULL DEFAULT '1',
  `order_num` int NOT NULL DEFAULT '999',
  `language` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of post_categories
-- ----------------------------
BEGIN;
INSERT INTO `post_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (1, 'demo', NULL, 'Demo', NULL, 0, 999, 'en', NULL, '2023-02-06 22:43:00', '2023-02-06 22:43:03');
INSERT INTO `post_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (2, 'csr', 'upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg', 'CSR', '<p><strong>a sd as</strong></p>', 1, 999, 'en', NULL, '2023-02-06 22:43:15', '2023-02-15 13:54:31');
INSERT INTO `post_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (3, 'events', 'upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg', 'Events', '<p><strong>a sd as</strong></p>', 1, 999, 'en', NULL, '2023-02-06 22:43:31', '2023-02-15 20:54:53');
INSERT INTO `post_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (4, 'sports', 'upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg', 'Sports', '<p><strong>a sd as</strong></p>', 1, 999, 'en', NULL, '2023-02-06 22:43:45', '2023-02-15 20:54:54');
INSERT INTO `post_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (5, 'csr-vi', 'upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg', 'CSR', '<p><strong>a sd as</strong></p>', 1, 999, 'vi', NULL, '2023-02-15 20:57:35', '2023-02-15 20:59:32');
INSERT INTO `post_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (6, 'su-kien', 'upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg', 'Sự kiện', '<p><strong>a sd as</strong></p>', 1, 999, 'vi', NULL, '2023-02-15 20:57:35', '2023-02-15 20:58:37');
INSERT INTO `post_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (7, 'the-thao', 'upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg', 'Thể thao', '<p><strong>a sd as</strong></p>', 1, 999, 'vi', NULL, '2023-02-15 20:57:35', '2023-02-15 20:58:42');
COMMIT;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `introduce` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `content` text COLLATE utf8mb3_unicode_ci,
  `post_category_id` int unsigned DEFAULT '1',
  `is_show` tinyint DEFAULT '0',
  `order_num` int DEFAULT '999',
  `views` int DEFAULT '0',
  `attachments` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `tags` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `language` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------
BEGIN;
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (1, 'donation-of-school-accessories-including-school-bags', '/wp-content/uploads/2022/01/WhatsApp-Image-2022-01-11-at-17.52.56-768x1024.jpeg', 'DONATION OF SCHOOL ACCESSORIES INCLUDING SCHOOL BAGS', 'Interocean Lubricants (Pvt) Ltd (IOL) recently initiated their CSR project in donating shoes, school bags & exercise books for the school calendar year. The project was initiated & granted to underprivileged children of Gal-Oya Junction Vidyalaya on 20th of March 2018.The students of this school are from underprivileged families whose social or economic circumstances hinder', '<p>Interocean Lubricants (Pvt) Ltd (IOL) recently initiated their CSR project in donating shoes, school bags &amp; exercise books for the school calendar year.</p>\n\n<p>The project was initiated &amp; granted to underprivileged children of Gal-Oya Junction Vidyalaya on 20th of March 2018.The students of this school are from underprivileged families whose social or economic circumstances hinder their ability to learn at school.</p>\n\n<p>Gal-Oya Junction Vidyalaya is in a rural environment approximately 20 km North East of Habarana, Sri Lanka. The school consists of 64 students from Grade 1 &ndash; Grade 10 with a staff of 8 including the Principal.</p>\n\n<p>The School staff members, students &amp; their parents welcomed the IOL team with much affection and enthusiasm, which was an inspiration for the team to carry out much more projects of this magnitude to uplift the education standard of children.</p>\n\n<p>The students, teachers and parents expressed their heartfelt gratitude and shared their appreciation to the IOL team for their concern &amp; generosity extended to support the education of the students.</p>', 2, 1, 999, 0, '[\"upload/admin//1.jpg\",\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\",\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\",\"upload/admin//f67cd87e2d69f737ae78.jpg\",\"upload/admin//8c6614956583bfdde692.jpg\",\"upload/admin//img-0068.jpg\"]', NULL, 'en', '2023-02-08 11:30:30', '2023-02-17 23:18:19');
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (2, 'customers-seminar-was-held-in-bandarawela', '/wp-content/uploads/2022/01/newYear-1024x1024.jpg', 'CUSTOMERS SEMINAR WAS HELD IN BANDARAWELA', 'Customers seminar was held in Bandarawela on October 2020 to promote Sinopec brands of lubricants. In this seminar, product knowledge, applications and introduction of new products were presented by Sales Representative. Most of the customers highly appreciated the knowledge transfer and the meeting of Sinopec staff.', '<p>Customers seminar was held in Bandarawela on October 2020 to promote Sinopec brands of lubricants. In this seminar, product knowledge, applications and introduction of new products were presented by Sales Representative. Most of the customers highly appreciated the knowledge transfer and the meeting of Sinopec staff.</p>', 3, 1, 999, 0, '[\"upload/admin//1.jpg\",\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\",\"upload/admin//8c6614956583bfdde692.jpg\",\"upload/admin//f67cd87e2d69f737ae78.jpg\",\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\",\"upload/admin//img-0068.jpg\"]', NULL, 'en', '2023-02-08 11:32:24', '2023-02-17 23:18:19');
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (3, 'sinopec-sticker-promotion-in-puttalam', '/wp-content/uploads/2021/06/WhatsApp-Image-2021-06-16-at-8.15.04-PM-1014x1024.jpeg', 'SINOPEC STICKER PROMOTION IN PUTTALAM', 'A sticker campaign was held in Puttalam by the two Sales Representatives with a view to promote Sinopec brands in the city and suburbs. The event was successful and gathered a very good publicity over the Sinopec brands of lubricants.', '<p>A sticker campaign was held in Puttalam by the two Sales Representatives with a view to promote Sinopec brands in the city and suburbs. The event was successful and gathered a very good publicity over the Sinopec brands of lubricants.</p>', 3, 1, 999, 0, '[\"upload/admin//f67cd87e2d69f737ae78.jpg\",\"upload/admin//1.jpg\",\"upload/admin//8c6614956583bfdde692.jpg\",\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\",\"upload/admin//img-0068.jpg\",\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\"]', NULL, 'en', '2023-02-08 11:32:54', '2023-02-17 23:18:19');
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (4, 'secret-santa', '/wp-content/uploads/2021/06/WhatsApp-Image-2021-06-04-at-4.28.02-PM-768x1024.jpeg', 'SECRET SANTA', 'IOL staff posing a photograph after receiving their gifts from ‘Secret Santa’, an arrangement by which a group of friends or colleagues exchange Christmas presents anonymously, each member of the group being assigned another member for whom to provide a small gift, typically costing no more than a set amount. With this goodwill gesture it', '<p>IOL staff posing a photograph after receiving their gifts from &lsquo;Secret Santa&rsquo;, an arrangement by which a group of friends or colleagues exchange Christmas presents anonymously, each member of the group being assigned another member for whom to provide a small gift, typically costing no more than a set amount. With this goodwill gesture it</p>\n\n<p>IOL staff posing a photograph after receiving their gifts from &lsquo;Secret Santa&rsquo;, an arrangement by which a group of friends or colleagues exchange Christmas presents anonymously, each member of the group being assigned another member for whom to provide a small gift, typically costing no more than a set amount. With this goodwill gesture it has shown a high team spirit which in turn helped company&rsquo;s progressive forward march.</p>', 3, 1, 999, 0, '[\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\",\"upload/admin//f67cd87e2d69f737ae78.jpg\",\"upload/admin//8c6614956583bfdde692.jpg\",\"upload/admin//img-0068.jpg\",\"upload/admin//1.jpg\",\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\"]', NULL, 'en', '2023-02-08 11:33:29', '2023-02-17 23:18:19');
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (5, 'staff-health--fitness', '/wp-content/uploads/2021/06/WhatsApp-Image-2021-06-04-at-4.35.02-PM-1-1024x768.jpeg', 'STAFF HEALTH & FITNESS', 'We as TEAM SINOPEC believe, health is a state of complete harmony of the body, mind and spirit and the first requisite of happiness.', '<p>We as TEAM SINOPEC believe, health is a state of complete harmony of the body, mind and spirit and the first requisite of happiness.</p>\n\n<p>We as TEAM SINOPEC believe, health is a state of complete harmony of the body, mind and spirit and the first requisite of happiness.</p>', 3, 1, 999, 0, '[\"upload/admin//8c6614956583bfdde692.jpg\",\"upload/admin//f67cd87e2d69f737ae78.jpg\",\"upload/admin//img-0068.jpg\",\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\",\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\",\"upload/admin//1.jpg\"]', NULL, 'en', '2023-02-08 11:34:09', '2023-02-17 23:18:19');
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (6, 'dealer-meeting-at-northern-construction-association', '/wp-content/uploads/2021/06/WhatsApp-Image-2021-06-04-at-3.05.04-PM-768x1024.jpeg', 'DEALER MEETING AT NORTHERN CONSTRUCTION ASSOCIATION', 'Dealer meeting in association with the Northern Construction Association held in Mannar on 12th February 2017. This was mainly focused on the introduction of Sinopec Lubricants brands to the Northern peninsular. The participants highly appreciated for organizing such a productive meeting and for delivering presentations on product knowledge.', '<p>Dealer meeting in association with the Northern Construction Association held in Mannar on 12th February 2017. This was mainly focused on the introduction of Sinopec Lubricants brands to the Northern peninsular. The participants highly appreciated for organizing such a productive meeting and for delivering presentations on product knowledge.</p>\n\n<p>Dealer meeting in association with the Northern Construction Association held in Mannar on 12<sup>th</sup>&nbsp;February 2017. This was mainly focused on the introduction of Sinopec Lubricants brands to the Northern peninsular. The participants highly appreciated for organizing such a productive meeting and for delivering presentations on product knowledge.</p>', 3, 1, 999, 0, '[\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\",\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\",\"upload/admin//1.jpg\",\"upload/admin//img-0068.jpg\",\"upload/admin//f67cd87e2d69f737ae78.jpg\",\"upload/admin//8c6614956583bfdde692.jpg\"]', NULL, 'en', '2023-02-08 11:34:40', '2023-02-17 23:18:19');
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (7, 'sinopec-sticker-promotion-kurunegala', '/wp-content/uploads/2018/09/NY-1024x1024.jpg', 'SINOPEC STICKER PROMOTION KURUNEGALA', 'A sticker campaign was held in Kurunegala on 05th July 2018 by the National Sales Manager with the participation of Sales Team with a view to promote Sinopec brands in the city and suburbs. The event was successful and gathered a very good publicity over the Sinopec brands of lubricants.', '<p>A sticker campaign was held in Kurunegala on 05th July 2018 by the National Sales Manager with the participation of Sales Team with a view to promote Sinopec brands in the city and suburbs. The event was successful and gathered a very good publicity over the Sinopec brands of lubricants.</p>\n\n<p>A sticker campaign was held in Kurunegala on 05<sup>th</sup>&nbsp;July 2018 by the National Sales Manager with the participation of Sales Team with a view to promote Sinopec brands in the city and suburbs. The event was successful and gathered a very good publicity over the Sinopec brands of lubricants.</p>', 3, 1, 999, 0, '[\"upload/admin//8c6614956583bfdde692.jpg\",\"upload/admin//1.jpg\",\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\",\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\",\"upload/admin//img-0068.jpg\",\"upload/admin//f67cd87e2d69f737ae78.jpg\"]', NULL, 'en', '2023-02-08 11:36:26', '2023-02-17 23:18:19');
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (8, 'customers-seminar-was-held-in-bandarawela', '/wp-content/uploads/2021/06/WhatsApp-Image-2021-06-04-at-2.23.04-PM.jpeg', 'CUSTOMERS SEMINAR WAS HELD IN BANDARAWELA', 'Customers seminar was held in Bandarawela on October 2020 to promote Sinopec brands of lubricants. In this seminar, product knowledge, applications and introduction of new products were presented by Sales Representative. Most of the customers highly appreciated the knowledge transfer and the meeting of Sinopec staff.', '<p>Customers seminar was held in Bandarawela on October 2020 to promote Sinopec brands of lubricants. In this seminar, product knowledge, applications and introduction of new products were presented by Sales Representative. Most of the customers highly appreciated the knowledge transfer and the meeting of Sinopec staff.</p>', 6, 1, 999, 0, '[\"upload/admin//f67cd87e2d69f737ae78.jpg\",\"upload/admin//img-0068.jpg\",\"upload/admin//8c6614956583bfdde692.jpg\",\"upload/admin//1.jpg\",\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\",\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\"]', NULL, 'vi', '2023-02-15 22:10:45', '2023-02-17 23:18:19');
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (9, 'sinopec-sticker-promotion-in-puttalam', '/wp-content/uploads/2019/02/badulla-regional-technical-meeting-of-sinopec-11-1024x576.jpg', 'SINOPEC STICKER PROMOTION IN PUTTALAM', 'A sticker campaign was held in Puttalam by the two Sales Representatives with a view to promote Sinopec brands in the city and suburbs. The event was successful and gathered a very good publicity over the Sinopec brands of lubricants.', '<p>A sticker campaign was held in Puttalam by the two Sales Representatives with a view to promote Sinopec brands in the city and suburbs. The event was successful and gathered a very good publicity over the Sinopec brands of lubricants.</p>', 6, 1, 999, 0, '[\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\",\"upload/admin//f67cd87e2d69f737ae78.jpg\",\"upload/admin//img-0068.jpg\",\"upload/admin//8c6614956583bfdde692.jpg\",\"upload/admin//1.jpg\",\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\"]', NULL, 'vi', '2023-02-15 22:10:45', '2023-02-17 23:18:19');
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (10, 'secret-santa', '/wp-content/uploads/2018/09/northern-construction-association-8.jpg', 'SECRET SANTA', 'IOL staff posing a photograph after receiving their gifts from ‘Secret Santa’, an arrangement by which a group of friends or colleagues exchange Christmas presents anonymously, each member of the group being assigned another member for whom to provide a small gift, typically costing no more than a set amount. With this goodwill gesture it', '<p>IOL staff posing a photograph after receiving their gifts from &lsquo;Secret Santa&rsquo;, an arrangement by which a group of friends or colleagues exchange Christmas presents anonymously, each member of the group being assigned another member for whom to provide a small gift, typically costing no more than a set amount. With this goodwill gesture it</p>\n\n<p>IOL staff posing a photograph after receiving their gifts from &lsquo;Secret Santa&rsquo;, an arrangement by which a group of friends or colleagues exchange Christmas presents anonymously, each member of the group being assigned another member for whom to provide a small gift, typically costing no more than a set amount. With this goodwill gesture it has shown a high team spirit which in turn helped company&rsquo;s progressive forward march.</p>', 6, 1, 999, 0, '[\"upload/admin//1.jpg\",\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\",\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\",\"upload/admin//f67cd87e2d69f737ae78.jpg\",\"upload/admin//8c6614956583bfdde692.jpg\",\"upload/admin//img-0068.jpg\"]', NULL, 'vi', '2023-02-15 22:10:45', '2023-02-17 23:18:19');
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (11, 'staff-health--fitness', '/wp-content/uploads/2018/09/kurunegala-sticker-promo-featured.jpg', 'STAFF HEALTH & FITNESS', 'We as TEAM SINOPEC believe, health is a state of complete harmony of the body, mind and spirit and the first requisite of happiness.', '<p>We as TEAM SINOPEC believe, health is a state of complete harmony of the body, mind and spirit and the first requisite of happiness.</p>\n\n<p>We as TEAM SINOPEC believe, health is a state of complete harmony of the body, mind and spirit and the first requisite of happiness.</p>', 6, 1, 999, 0, '[\"upload/admin//1.jpg\",\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\",\"upload/admin//8c6614956583bfdde692.jpg\",\"upload/admin//f67cd87e2d69f737ae78.jpg\",\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\",\"upload/admin//img-0068.jpg\"]', NULL, 'vi', '2023-02-15 22:10:45', '2023-02-17 23:18:19');
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (12, 'dealer-meeting-at-northern-construction-association', '/wp-content/uploads/2018/09/school-accessories-donation-14.jpg', 'DEALER MEETING AT NORTHERN CONSTRUCTION ASSOCIATION', 'Dealer meeting in association with the Northern Construction Association held in Mannar on 12th February 2017. This was mainly focused on the introduction of Sinopec Lubricants brands to the Northern peninsular. The participants highly appreciated for organizing such a productive meeting and for delivering presentations on product knowledge.', '<p>Dealer meeting in association with the Northern Construction Association held in Mannar on 12th February 2017. This was mainly focused on the introduction of Sinopec Lubricants brands to the Northern peninsular. The participants highly appreciated for organizing such a productive meeting and for delivering presentations on product knowledge.</p>\n\n<p>Dealer meeting in association with the Northern Construction Association held in Mannar on 12<sup>th</sup>&nbsp;February 2017. This was mainly focused on the introduction of Sinopec Lubricants brands to the Northern peninsular. The participants highly appreciated for organizing such a productive meeting and for delivering presentations on product knowledge.</p>', 6, 1, 999, 0, '[\"upload/admin//f67cd87e2d69f737ae78.jpg\",\"upload/admin//1.jpg\",\"upload/admin//8c6614956583bfdde692.jpg\",\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\",\"upload/admin//img-0068.jpg\",\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\"]', NULL, 'vi', '2023-02-15 22:10:45', '2023-02-17 23:18:19');
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (13, 'sinopec-sticker-promotion-kurunegala', '/wp-content/uploads/2018/09/rugby.jpg', 'SINOPEC STICKER PROMOTION KURUNEGALA', 'A sticker campaign was held in Kurunegala on 05th July 2018 by the National Sales Manager with the participation of Sales Team with a view to promote Sinopec brands in the city and suburbs. The event was successful and gathered a very good publicity over the Sinopec brands of lubricants.', '<p>A sticker campaign was held in Kurunegala on 05th July 2018 by the National Sales Manager with the participation of Sales Team with a view to promote Sinopec brands in the city and suburbs. The event was successful and gathered a very good publicity over the Sinopec brands of lubricants.</p>\n\n<p>A sticker campaign was held in Kurunegala on 05<sup>th</sup>&nbsp;July 2018 by the National Sales Manager with the participation of Sales Team with a view to promote Sinopec brands in the city and suburbs. The event was successful and gathered a very good publicity over the Sinopec brands of lubricants.</p>', 6, 1, 999, 0, '[\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\",\"upload/admin//f67cd87e2d69f737ae78.jpg\",\"upload/admin//8c6614956583bfdde692.jpg\",\"upload/admin//img-0068.jpg\",\"upload/admin//1.jpg\",\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\"]', NULL, 'vi', '2023-02-15 22:10:45', '2023-02-17 23:18:19');
INSERT INTO `posts` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `post_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (15, 'donation-of-school-accessories-including-school-bags', '/wp-content/uploads/2018/09/kurunegala-sticker-promo-featured.jpg', 'DONATION OF SCHOOL ACCESSORIES INCLUDING SCHOOL BAGS', 'Interocean Lubricants (Pvt) Ltd (IOL) recently initiated their CSR project in donating shoes, school bags & exercise books for the school calendar year. The project was initiated & granted to underprivileged children of Gal-Oya Junction Vidyalaya on 20th of March 2018.The students of this school are from underprivileged families whose social or economic circumstances hinder', '<p>Interocean Lubricants (Pvt) Ltd (IOL) recently initiated their CSR project in donating shoes, school bags &amp; exercise books for the school calendar year.</p>\n\n<p>The project was initiated &amp; granted to underprivileged children of Gal-Oya Junction Vidyalaya on 20th of March 2018.The students of this school are from underprivileged families whose social or economic circumstances hinder their ability to learn at school.</p>\n\n<p>Gal-Oya Junction Vidyalaya is in a rural environment approximately 20 km North East of Habarana, Sri Lanka. The school consists of 64 students from Grade 1 &ndash; Grade 10 with a staff of 8 including the Principal.</p>\n\n<p>The School staff members, students &amp; their parents welcomed the IOL team with much affection and enthusiasm, which was an inspiration for the team to carry out much more projects of this magnitude to uplift the education standard of children.</p>\n\n<p>The students, teachers and parents expressed their heartfelt gratitude and shared their appreciation to the IOL team for their concern &amp; generosity extended to support the education of the students.</p>', 5, 1, 999, 0, '[\"upload/admin//8c6614956583bfdde692.jpg\",\"upload/admin//f67cd87e2d69f737ae78.jpg\",\"upload/admin//img-0068.jpg\",\"upload/admin//screenshot-2023-02-08-at-32449-pm.png\",\"upload/admin//152361832-3512732615520133-3345205913639276059-n.jpeg\",\"upload/admin//1.jpg\"]', NULL, 'vi', '2023-02-08 11:30:30', '2023-02-17 23:18:22');
COMMIT;

-- ----------------------------
-- Table structure for product_categories
-- ----------------------------
DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE `product_categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `is_show` tinyint NOT NULL DEFAULT '1',
  `order_num` int NOT NULL DEFAULT '999',
  `language` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of product_categories
-- ----------------------------
BEGIN;
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (1, 'demo', NULL, 'Demo', NULL, 0, 999, 'en', NULL, '2023-02-06 22:31:48', '2023-02-06 22:31:48');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (12, 'automatic-transmission-fluid', 'wp-content/uploads/2018/08/automatic-transmission.jpg', 'Automatic Transmission Fluid', 'Automatic Transmission Fluid', 1, 999, 'en', NULL, '2023-02-06 22:41:17', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (13, 'diesel-engine-oil', 'wp-content/uploads/2018/08/diesel.jpg', 'Diesel Engine Oil', 'Diesel Engine Oil', 1, 999, 'en', NULL, '2023-02-06 22:41:17', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (14, 'four-stroke-motor-cycle-engine-oil', 'wp-content/uploads/2018/08/4-stroke-motocycle.jpg', 'Four Stroke Motor Cycle Engine Oil', 'Four Stroke Motor Cycle Engine Oil', 1, 999, 'en', NULL, '2023-02-06 22:41:17', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (15, 'general-purpose-automotive-gear-oils', 'wp-content/uploads/2018/08/general-purpose-automotive-gear-oil.jpg', 'General Purpose Automotive Gear Oils', 'General Purpose Automotive Gear Oils', 1, 999, 'en', NULL, '2023-02-06 22:41:17', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (16, 'greases', 'wp-content/uploads/2018/08/grease.jpg', 'Greases', 'Greases', 1, 999, 'en', NULL, '2023-02-06 22:41:17', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (17, 'industrial-lubricants', 'wp-content/uploads/2018/08/industrial.jpg', 'Industrial Lubricants', 'Industrial Lubricants', 1, 999, 'en', NULL, '2023-02-06 22:41:17', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (18, 'marine-engine-oils', 'wp-content/uploads/2018/08/marine.jpg', 'Marine Engine Oils', 'Marine Engine Oils', 1, 999, 'en', NULL, '2023-02-06 22:41:17', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (19, 'passenger-car-motor-oils', 'wp-content/uploads/2018/08/passenger-vehicle.jpg', 'Passenger Car Motor Oils', 'Passenger Car Motor Oils', 1, 999, 'en', NULL, '2023-02-06 22:41:17', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (20, 'insulated-transformer-oil', 'wp-content/uploads/2018/08/transformer.jpg', 'Sinopec Insulated Transformer Oil', 'Sinopec Insulated Transformer Oil', 1, 999, 'en', NULL, '2023-02-06 22:41:17', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (21, 'tractor-oils', 'wp-content/uploads/2022/10/R-6-copy.jpg', 'Tractor Oils', 'Tractor Oils', 1, 999, 'en', NULL, '2023-02-06 22:41:17', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (22, 'nhot-hop-so-tu-dong', 'wp-content/uploads/2018/08/automatic-transmission.jpg', 'Nhớt hộp số tự động', 'Nhớt hộp số tự động', 1, 999, 'vi', NULL, '2023-02-15 21:01:11', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (23, 'dau-dong-co-diesel', 'wp-content/uploads/2018/08/diesel.jpg', 'Dầu động cơ Diesel', 'Dầu động cơ Diesel', 1, 999, 'vi', NULL, '2023-02-15 21:01:11', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (24, 'dau-dong-co-4-thi', 'wp-content/uploads/2018/08/4-stroke-motocycle.jpg', 'Dầu động cơ 4 thì', 'Dầu động cơ 4 thì', 1, 999, 'vi', NULL, '2023-02-15 21:01:11', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (25, 'dau-boi-tron-banh-rang-dong-co', 'wp-content/uploads/2018/08/general-purpose-automotive-gear-oil.jpg', 'Dầu bôi trơn bánh răng động cơ', 'Dầu bôi trơn bánh răng động cơ', 1, 999, 'vi', NULL, '2023-02-15 21:01:11', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (26, 'mo-bo', 'wp-content/uploads/2018/08/grease.jpg', 'Mỡ bò', 'Mỡ bò', 1, 999, 'vi', NULL, '2023-02-15 21:01:11', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (27, 'dau-nhot-cong-nghiep', 'wp-content/uploads/2018/08/industrial.jpg', 'Dầu nhớt công nghiệp', 'Dầu nhớt công nghiệp', 1, 999, 'vi', NULL, '2023-02-15 21:01:11', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (28, 'dau-dong-co-hang-hai', 'wp-content/uploads/2018/08/marine.jpg', 'Dầu động cơ hàng hải', 'Dầu động cơ hàng hải', 1, 999, 'vi', NULL, '2023-02-15 21:01:11', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (29, 'dau-dong-co-o-to', 'wp-content/uploads/2018/08/passenger-vehicle.jpg', 'Dầu động cơ ô tô', 'Dầu động cơ ô tô', 1, 999, 'vi', NULL, '2023-02-15 21:01:11', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (30, 'dau-cach-dien-may-bien-the-sinopec', 'wp-content/uploads/2018/08/transformer.jpg', 'Dầu cách điện máy biến thế Sinopec', 'Dầu cách điện máy biến thế Sinopec', 1, 999, 'vi', NULL, '2023-02-15 21:01:11', '2023-02-17 23:59:21');
INSERT INTO `product_categories` (`id`, `alias`, `image`, `name`, `description`, `is_show`, `order_num`, `language`, `note`, `created_at`, `updated_at`) VALUES (31, 'dau-may-keo', 'wp-content/uploads/2022/10/R-6-copy.jpg', 'Dầu máy kéo', 'Dầu máy kéo', 1, 999, 'vi', NULL, '2023-02-15 21:01:11', '2023-02-17 23:59:21');
COMMIT;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `introduce` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `content` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `product_category_id` int unsigned DEFAULT '1',
  `is_show` tinyint DEFAULT '0',
  `order_num` int DEFAULT '999',
  `views` int DEFAULT '0',
  `attachments` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `tags` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `language` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
BEGIN;
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (1, 'sinopec-tulux-t-400-ch-4--sl-sae-15w-40-heavy-duty-diesel-engine-oil', 'wp-content/uploads/2022/10/Tulux-T-400-CH-4-SL-SAE-15W-40-200L.jpeg', 'SINOPEC TULUX T 400 CH-4 / SL SAE 15W-40 HEAVY DUTY DIESEL ENGINE OIL', 'Sinopec Diesel Engine Oil TULUX T 400, API CH-4 / SL SAE 15W-40 Heavy Duty Diesel Engine Oil is formulated with high viscosity index, base oil and multifunctional additive technology to meet the requirements of a wide range of engine manufacturers.', '<p>Sinopec Diesel Engine Oil TULUX T 400, API CH-4 / SL SAE 15W-40 Heavy Duty Diesel Engine Oil is formulated with high viscosity index, base oil and multifunctional additive technology to meet the requirements of a wide range of engine manufacturers.</p>\n\n<p>Recommended for most severe performance requirements of the new generation diesel engines for on and off road operations, assure outstanding protection against high temperature engine deposits, oil degradation, oil thickening and corrosion.</p>\n\n<p>Sinopec&nbsp; Tulux T 400 CH-4 / SL SAE 15W-40 Diesel Engine Oil is available in 200 Ltr Drums.</p>', 13, 1, 999, 0, NULL, NULL, 'en', '2023-02-18 00:12:34', '2023-02-18 00:12:34');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (2, 'sinopec-automatic-transmission-fluid-iii-h', 'wp-content/uploads/2018/08/Sinopec-HP-R-Grease-NLGI-2-3-1.jpg', 'SINOPEC AUTOMATIC TRANSMISSION FLUID III-H', 'Sinopec Automatic Transmission Fluid III-H is a multifunctional fluid formulated with high viscosity index synthetic base oil and selected additives', '<p>Sinopec Automatic Transmission Fluid III-H is a multifunctional fluid formulated with high viscosity index synthetic base oil and selected additives. It is suitable for use in the automatic transmission systems of many vehicles, and in some power steering and hydraulic systems.</p>\n\n<p>Sinopec Automatic Transmission Fluid III-H is available in 18 Ltr Pail and in 200 Ltr Drums.</p>', 12, 1, 999, 0, NULL, NULL, 'en', '2023-02-18 02:57:48', '2023-02-18 02:57:48');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (3, 'sinopec-tulux-t-500-15w-40--20w-50-classic-diesel-engine-oil', 'wp-content/uploads/2018/08/sinopec-tulux-t-600-cj-4-15w-40-diesel-engine-oil-is-available-in-5-ltr-cans-in-200-ltr-drums.jpg', 'SINOPEC TULUX T 500 15W-40 & 20W-50 CLASSIC DIESEL ENGINE OIL', 'Sinopec TULUX T500 Classic Diesel Engine Oil (CI-4/SL) is formulated with hydrocracked high viscosity index base oils and advanced multifunctional additive technology to meet the requirements of a wide range of engine manufacturers.', '<p>Sinopec TULUX T500 Classic Diesel Engine Oil (CI-4/SL) is formulated with hydrocracked high viscosity index base oils and advanced multifunctional additive technology to meet the requirements of a wide range of engine manufacturers. Suitable for pre EPA 2007 diesel engines, where excellent soot control is required. Also suitable for use in engines with or without EGR systems. Available as 15W-40 and 20W-50 multigrades to suit specific application<br />\nrequirements.</p>\n\n<p>Sinopec TULUX T500 15W-40 Classic Diesel Engine Oil is available in 1 Ltr, 4 Ltr &amp; 200 Ltr Drums</p>\n\n<p>Sinopec TULUX T500 20W-50 Classic Diesel Engine Oil is available in 200 Ltr Drums</p>', 13, 1, 999, 0, NULL, NULL, 'en', '2023-02-18 02:58:17', '2023-02-18 02:58:17');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (4, 'sinopec-tulux-t-600-15w-40-diesel-engine-oil', 'wp-content/uploads/2018/08/Sinopec-HP-R-Grease-NLGI-2-3-1.jpg', 'SINOPEC TULUX T 600 15W-40 DIESEL ENGINE OIL', 'Sinopec TULUX T600 15W-40 Diesel Engine Oil is formulated with advanced lowSAPS (sulfated ash, phosphorus and sulfur) multifunctional additive and synthetic technology formulation to meet the latest requirements of a wide range of engine manufacturers.', '<p>Sinopec TULUX T600 15W-40 Diesel Engine Oil is formulated with advanced lowSAPS (sulfated ash, phosphorus and sulfur) multifunctional additive and synthetic technology formulation to meet the latest requirements of a wide range of engine manufacturers.<br />\nIt is suitable for use in heavy duty diesel engines, including modern low-emission diesel engines and those using exhaust after-treatment systems. It&rsquo;s also suitable for use in petrol/gasoline engines requiring the API SM quality oil.</p>\n\n<p>Sinopec Tulux T 600 15W-40 Diesel Engine Oil available in 1 Ltr , 5 Ltr &amp; 200 Ltr Drums</p>', 13, 1, 999, 0, NULL, NULL, 'en', '2023-02-18 02:58:23', '2023-02-18 02:58:23');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (5, 'sinopec-extreme-pressure-lithium-base-grease-nlgi-0-1--2', 'wp-content/uploads/2018/08/Sinopec-HP-R-Grease-NLGI-2-3-1.jpg', 'SINOPEC EXTREME PRESSURE LITHIUM BASE GREASE NLGI 0, 1 & 2', 'Sinopec Extreme Pressure Lithium Base Grease is an extreme pressure grease, formulated with a lithium soap thickener and high-quality mineral base oil.', '<p>Sinopec Extreme Pressure Lithium Base Grease is an extreme pressure grease, formulated with a lithium soap thickener and high-quality mineral base oil. It contains rust and oxidation inhibitors, and extreme pressure and antiwear additives to ensure excellent performance and long life, even in severe service conditions where high temperatures, shock loading and water contamination are possible.</p>\n\n<p>Sinopec Extreme Pressure Lithium Base Grease NLGI 0,1 are available in 17 Kg Pails and NLGI 2 is available in 17 Kg Pails &amp; in 180 Kg Drums.</p>', 16, 1, 999, 0, NULL, NULL, 'en', '2023-02-18 02:58:24', '2023-02-18 02:58:24');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (6, 'sinopec-general-purpose-automotive-lithium-base-grease-nlgi-2--3', 'wp-content/uploads/2018/08/sinopec-tulux-t-600-cj-4-15w-40-diesel-engine-oil-is-available-in-5-ltr-cans-in-200-ltr-drums.jpg', 'SINOPEC GENERAL PURPOSE AUTOMOTIVE LITHIUM BASE GREASE NLGI 2 & 3', 'Sinopec General Purpose Automotive Lithium Base Grease is a multipurpose long service life grease, available in two NLGI grades: 2 and 3.', '<p>Sinopec General Purpose Automotive Lithium Base Grease is a multipurpose long service life grease, available in two NLGI grades: 2 and 3. It is formulated with refined mineral base oils and rust and oxidation inhibitors, and is thickened with a mixed lithium/calcium 12-hydroxystearate soap thickener.</p>\n\n<p>Sinopec General Purpose Automotive Lithium Base Grease NLGI 2 &amp; 3 are available In 180 Kg Drums.</p>', 16, 1, 999, 0, NULL, NULL, 'en', '2023-02-18 02:58:26', '2023-02-18 02:58:26');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (7, '-sinopec-golden-grease-nlgi-3', 'wp-content/uploads/2022/10/Tulux-T-400-CH-4-SL-SAE-15W-40-200L.jpeg', 'SINOPEC GOLDEN GREASE NLGI 3', 'Sinopec offers a selected range of automotive and industrial greases to meet the existing market requirements for a wide range of applications.', '<p>Sinopec offers a selected range of automotive and industrial greases to meet the existing market requirements for a wide range of applications.</p>\n\n<p>For detailed information on Sinopec automotive and industrial greases view Product Data Sheets (PDS).</p>\n\n<p>Sinopec Golden Grease NLGI 3 is available in 15 Kg Pails and in 180 Kg Drums.</p>', 16, 1, 999, 0, NULL, NULL, 'en', '2023-02-18 02:58:32', '2023-02-18 02:58:32');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (8, '-sinopec-hp-r-grease-nlgi-2-3', 'wp-content/uploads/2018/08/sinopec-tulux-t-600-cj-4-15w-40-diesel-engine-oil-is-available-in-5-ltr-cans-in-200-ltr-drums.jpg', 'SINOPEC HP-R GREASE NLGI 2-3', 'Sinopec HP-R Grease is an extreme pressure, heavy-duty wheel bearing and chassis grease, formulated with a lithium complex soap thickener and highquality mineral base oil. It contains rust and oxidation inhibitors, EP and antiwear additives to ensure excellent performance and long life, even in severe service conditions such as high temperatures, shock loading and where water contamination is possible.', '<p>Sinopec HP-R Grease is an extreme pressure, heavy-duty wheel bearing and chassis grease, formulated with a lithium complex soap thickener and highquality mineral base oil. It contains rust and oxidation inhibitors, EP and antiwear additives to ensure excellent performance and long life, even in severe service conditions such as high temperatures, shock loading and where water contamination is possible.</p>\n\n<p>Sinopec HP-R Grease NLGI 2-3 is available in 17 Kg Pails</p>', 16, 1, 999, 0, NULL, NULL, 'en', '2023-02-18 02:58:27', '2023-02-18 02:58:27');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (9, '-sinopec-hydraulic-transmission-multifunctional-fluid-10w-30--universal-tractor-transmission-oil-utto', 'wp-content/uploads/2018/08/sinopec-tulux-t-600-cj-4-15w-40-diesel-engine-oil-is-available-in-5-ltr-cans-in-200-ltr-drums.jpg', 'SINOPEC HYDRAULIC TRANSMISSION MULTIFUNCTIONAL FLUID 10W-30 / UNIVERSAL TRACTOR TRANSMISSION OIL (UTTO)', 'Sinopec Hydraulic Transmission Multifunctional Fluid 10W-30 / Universal Tractor Transmission Oil (UTTO) is formulated with high quality hydro-treated base oils and a multifunctional additive system. It is designed to meet or exceed hydraulic and transmission fluid requirements and to reduced wet brake and power take off (PTO) chatter.', '<p>Sinopec Hydraulic Transmission Multifunctional Fluid 10W-30 / Universal Tractor Transmission Oil (UTTO) is formulated with high quality hydro-treated base oils and a multifunctional additive system. It is designed to meet or exceed hydraulic and transmission fluid requirements and to reduced wet brake and power take off (PTO) chatter. It ensures excellent performances in agricultural tractors and commercial tractors operating in a wide range of environments and conditions, and is particularly useful in equipment where a common lubrication system supplies oil for different applications.</p>\n\n<p>Meets the API GL -4 specification and Allison C 4 (Agricultural applications only) and the performance requirements of Caterpillar TO 2, John Deere JDM J 20 C, Kubota UDT, AGGO CMS 1145 etc, specifications.</p>\n\n<p>Sinopec Hydraulic Transmission Multifunctional Fluid 10W-30 / Universal Tractor Transmission Oil (UTTO) &nbsp;is available in 200 Ltr Drums.</p>', 21, 1, 999, 0, NULL, NULL, 'en', '2023-02-18 02:58:29', '2023-02-18 02:58:29');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (10, 'sinopec-stou-tractor-oil-10w-30', 'wp-content/uploads/2022/10/Tulux-T-400-CH-4-SL-SAE-15W-40-200L.jpeg', 'SINOPEC STOU TRACTOR OIL 10W-30', 'Sinopec STOU Tractor Oil 10W-30 is a Super Tractor Oil Universal (STOU) formulated with high quality mineral base oil and a multifunctional additive system to meet the requirements of a wide range of agricultural manufacturers. This multifunctional oil can be used in many different agricultural applications and is particularly useful in equipment where there is a common lubrication system supplies oil for different applications.', '<p>Sinopec STOU Tractor Oil 10W-30 is a Super Tractor Oil Universal (STOU) formulated with high quality mineral base oil and a multifunctional additive system to meet the requirements of a wide range of agricultural manufacturers. This multifunctional oil can be used in many different agricultural applications and is particularly useful in equipment where there is a common lubrication system supplies oil for different applications.</p>\n\n<p>Meets API GL&ndash;4 specification and Allison C 4 (Agricultural applications only) and the performance requirements of Caterpillar TO 2, John Deere JDM J 27, Massey Ferguson CMS 1145, 1144 &amp; 1139 etc, specifications.</p>\n\n<p>Sinopec STOU Tractor Oil 10W-30 / Super Tractor Oil Universal (STOU)&nbsp; is available in 18 Ltr Pails.</p>', 21, 1, 999, 0, NULL, NULL, 'en', '2023-02-18 02:58:33', '2023-02-18 02:58:33');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (11, 'sinopec-tulux-t-400-ch-4--sl-sae-15w-40-heavy-duty-diesel-engine-oil', 'wp-content/uploads/2022/10/Tulux-T-400-CH-4-SL-SAE-15W-40-200L.jpeg', 'SINOPEC TULUX T 400 CH-4 / SL SAE 15W-40 HEAVY DUTY DIESEL ENGINE OIL', 'Sinopec Diesel Engine Oil TULUX T 400, API CH-4 / SL SAE 15W-40 Heavy Duty Diesel Engine Oil is formulated with high viscosity index, base oil and multifunctional additive technology to meet the requirements of a wide range of engine manufacturers.', '<p>Sinopec Diesel Engine Oil TULUX T 400, API CH-4 / SL SAE 15W-40 Heavy Duty Diesel Engine Oil is formulated with high viscosity index, base oil and multifunctional additive technology to meet the requirements of a wide range of engine manufacturers.</p>\n\n<p>Recommended for most severe performance requirements of the new generation diesel engines for on and off road operations, assure outstanding protection against high temperature engine deposits, oil degradation, oil thickening and corrosion.</p>\n\n<p>Sinopec&nbsp; Tulux T 400 CH-4 / SL SAE 15W-40 Diesel Engine Oil is available in 200 Ltr Drums.</p>', 23, 1, 999, 0, NULL, NULL, 'vi', '2023-02-18 03:00:41', '2023-02-18 03:00:41');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (12, 'sinopec-automatic-transmission-fluid-iii-h', 'wp-content/uploads/2018/08/Sinopec-HP-R-Grease-NLGI-2-3-1.jpg', 'SINOPEC AUTOMATIC TRANSMISSION FLUID III-H', 'Sinopec Automatic Transmission Fluid III-H is a multifunctional fluid formulated with high viscosity index synthetic base oil and selected additives', '<p>Sinopec Automatic Transmission Fluid III-H is a multifunctional fluid formulated with high viscosity index synthetic base oil and selected additives. It is suitable for use in the automatic transmission systems of many vehicles, and in some power steering and hydraulic systems.</p>\n\n<p>Sinopec Automatic Transmission Fluid III-H is available in 18 Ltr Pail and in 200 Ltr Drums.</p>', 22, 1, 999, 0, NULL, NULL, 'vi', '2023-02-18 03:00:22', '2023-02-18 03:00:22');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (13, 'sinopec-tulux-t-500-15w-40--20w-50-classic-diesel-engine-oil', 'wp-content/uploads/2018/08/sinopec-tulux-t-600-cj-4-15w-40-diesel-engine-oil-is-available-in-5-ltr-cans-in-200-ltr-drums.jpg', 'SINOPEC TULUX T 500 15W-40 & 20W-50 CLASSIC DIESEL ENGINE OIL', 'Sinopec TULUX T500 Classic Diesel Engine Oil (CI-4/SL) is formulated with hydrocracked high viscosity index base oils and advanced multifunctional additive technology to meet the requirements of a wide range of engine manufacturers.', '<p>Sinopec TULUX T500 Classic Diesel Engine Oil (CI-4/SL) is formulated with hydrocracked high viscosity index base oils and advanced multifunctional additive technology to meet the requirements of a wide range of engine manufacturers. Suitable for pre EPA 2007 diesel engines, where excellent soot control is required. Also suitable for use in engines with or without EGR systems. Available as 15W-40 and 20W-50 multigrades to suit specific application<br />\nrequirements.</p>\n\n<p>Sinopec TULUX T500 15W-40 Classic Diesel Engine Oil is available in 1 Ltr, 4 Ltr &amp; 200 Ltr Drums</p>\n\n<p>Sinopec TULUX T500 20W-50 Classic Diesel Engine Oil is available in 200 Ltr Drums</p>', 23, 1, 999, 0, NULL, NULL, 'vi', '2023-02-18 03:00:45', '2023-02-18 03:00:45');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (14, 'sinopec-tulux-t-600-15w-40-diesel-engine-oil', 'wp-content/uploads/2018/08/Sinopec-HP-R-Grease-NLGI-2-3-1.jpg', 'SINOPEC TULUX T 600 15W-40 DIESEL ENGINE OIL', 'Sinopec TULUX T600 15W-40 Diesel Engine Oil is formulated with advanced lowSAPS (sulfated ash, phosphorus and sulfur) multifunctional additive and synthetic technology formulation to meet the latest requirements of a wide range of engine manufacturers.', '<p>Sinopec TULUX T600 15W-40 Diesel Engine Oil is formulated with advanced lowSAPS (sulfated ash, phosphorus and sulfur) multifunctional additive and synthetic technology formulation to meet the latest requirements of a wide range of engine manufacturers.<br />\nIt is suitable for use in heavy duty diesel engines, including modern low-emission diesel engines and those using exhaust after-treatment systems. It&rsquo;s also suitable for use in petrol/gasoline engines requiring the API SM quality oil.</p>\n\n<p>Sinopec Tulux T 600 15W-40 Diesel Engine Oil available in 1 Ltr , 5 Ltr &amp; 200 Ltr Drums</p>', 23, 1, 999, 0, NULL, NULL, 'vi', '2023-02-18 03:00:46', '2023-02-18 03:00:46');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (15, 'sinopec-extreme-pressure-lithium-base-grease-nlgi-0-1--2', 'wp-content/uploads/2018/08/Sinopec-HP-R-Grease-NLGI-2-3-1.jpg', 'SINOPEC EXTREME PRESSURE LITHIUM BASE GREASE NLGI 0, 1 & 2', 'Sinopec Extreme Pressure Lithium Base Grease is an extreme pressure grease, formulated with a lithium soap thickener and high-quality mineral base oil.', '<p>Sinopec Extreme Pressure Lithium Base Grease is an extreme pressure grease, formulated with a lithium soap thickener and high-quality mineral base oil. It contains rust and oxidation inhibitors, and extreme pressure and antiwear additives to ensure excellent performance and long life, even in severe service conditions where high temperatures, shock loading and water contamination are possible.</p>\n\n<p>Sinopec Extreme Pressure Lithium Base Grease NLGI 0,1 are available in 17 Kg Pails and NLGI 2 is available in 17 Kg Pails &amp; in 180 Kg Drums.</p>', 26, 1, 999, 0, NULL, NULL, 'vi', '2023-02-18 03:01:14', '2023-02-18 03:01:14');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (16, 'sinopec-general-purpose-automotive-lithium-base-grease-nlgi-2--3', 'wp-content/uploads/2018/08/sinopec-tulux-t-600-cj-4-15w-40-diesel-engine-oil-is-available-in-5-ltr-cans-in-200-ltr-drums.jpg', 'SINOPEC GENERAL PURPOSE AUTOMOTIVE LITHIUM BASE GREASE NLGI 2 & 3', 'Sinopec General Purpose Automotive Lithium Base Grease is a multipurpose long service life grease, available in two NLGI grades: 2 and 3.', '<p>Sinopec General Purpose Automotive Lithium Base Grease is a multipurpose long service life grease, available in two NLGI grades: 2 and 3. It is formulated with refined mineral base oils and rust and oxidation inhibitors, and is thickened with a mixed lithium/calcium 12-hydroxystearate soap thickener.</p>\n\n<p>Sinopec General Purpose Automotive Lithium Base Grease NLGI 2 &amp; 3 are available In 180 Kg Drums.</p>', 26, 1, 999, 0, NULL, NULL, 'vi', '2023-02-18 03:01:16', '2023-02-18 03:01:16');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (17, '-sinopec-golden-grease-nlgi-3', 'wp-content/uploads/2022/10/Tulux-T-400-CH-4-SL-SAE-15W-40-200L.jpeg', 'SINOPEC GOLDEN GREASE NLGI 3', 'Sinopec offers a selected range of automotive and industrial greases to meet the existing market requirements for a wide range of applications.', '<p>Sinopec offers a selected range of automotive and industrial greases to meet the existing market requirements for a wide range of applications.</p>\n\n<p>For detailed information on Sinopec automotive and industrial greases view Product Data Sheets (PDS).</p>\n\n<p>Sinopec Golden Grease NLGI 3 is available in 15 Kg Pails and in 180 Kg Drums.</p>', 26, 1, 999, 0, NULL, NULL, 'vi', '2023-02-18 03:01:17', '2023-02-18 03:01:17');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (18, '-sinopec-hp-r-grease-nlgi-2-3', 'wp-content/uploads/2018/08/sinopec-tulux-t-600-cj-4-15w-40-diesel-engine-oil-is-available-in-5-ltr-cans-in-200-ltr-drums.jpg', 'SINOPEC HP-R GREASE NLGI 2-3', 'Sinopec HP-R Grease is an extreme pressure, heavy-duty wheel bearing and chassis grease, formulated with a lithium complex soap thickener and highquality mineral base oil. It contains rust and oxidation inhibitors, EP and antiwear additives to ensure excellent performance and long life, even in severe service conditions such as high temperatures, shock loading and where water contamination is possible.', '<p>Sinopec HP-R Grease is an extreme pressure, heavy-duty wheel bearing and chassis grease, formulated with a lithium complex soap thickener and highquality mineral base oil. It contains rust and oxidation inhibitors, EP and antiwear additives to ensure excellent performance and long life, even in severe service conditions such as high temperatures, shock loading and where water contamination is possible.</p>\n\n<p>Sinopec HP-R Grease NLGI 2-3 is available in 17 Kg Pails</p>', 26, 1, 999, 0, NULL, NULL, 'vi', '2023-02-18 03:01:19', '2023-02-18 03:01:19');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (19, '-sinopec-hydraulic-transmission-multifunctional-fluid-10w-30--universal-tractor-transmission-oil-utto', 'wp-content/uploads/2018/08/sinopec-tulux-t-600-cj-4-15w-40-diesel-engine-oil-is-available-in-5-ltr-cans-in-200-ltr-drums.jpg', 'SINOPEC HYDRAULIC TRANSMISSION MULTIFUNCTIONAL FLUID 10W-30 / UNIVERSAL TRACTOR TRANSMISSION OIL (UTTO)', 'Sinopec Hydraulic Transmission Multifunctional Fluid 10W-30 / Universal Tractor Transmission Oil (UTTO) is formulated with high quality hydro-treated base oils and a multifunctional additive system. It is designed to meet or exceed hydraulic and transmission fluid requirements and to reduced wet brake and power take off (PTO) chatter.', '<p>Sinopec Hydraulic Transmission Multifunctional Fluid 10W-30 / Universal Tractor Transmission Oil (UTTO) is formulated with high quality hydro-treated base oils and a multifunctional additive system. It is designed to meet or exceed hydraulic and transmission fluid requirements and to reduced wet brake and power take off (PTO) chatter. It ensures excellent performances in agricultural tractors and commercial tractors operating in a wide range of environments and conditions, and is particularly useful in equipment where a common lubrication system supplies oil for different applications.</p>\n\n<p>Meets the API GL -4 specification and Allison C 4 (Agricultural applications only) and the performance requirements of Caterpillar TO 2, John Deere JDM J 20 C, Kubota UDT, AGGO CMS 1145 etc, specifications.</p>\n\n<p>Sinopec Hydraulic Transmission Multifunctional Fluid 10W-30 / Universal Tractor Transmission Oil (UTTO) &nbsp;is available in 200 Ltr Drums.</p>', 31, 1, 999, 0, NULL, NULL, 'vi', '2023-02-18 03:01:28', '2023-02-18 03:01:28');
INSERT INTO `products` (`id`, `alias`, `avatar`, `title`, `introduce`, `content`, `product_category_id`, `is_show`, `order_num`, `views`, `attachments`, `tags`, `language`, `created_at`, `updated_at`) VALUES (20, 'sinopec-stou-tractor-oil-10w-30', 'wp-content/uploads/2022/10/Tulux-T-400-CH-4-SL-SAE-15W-40-200L.jpeg', 'SINOPEC STOU TRACTOR OIL 10W-30', 'Sinopec STOU Tractor Oil 10W-30 is a Super Tractor Oil Universal (STOU) formulated with high quality mineral base oil and a multifunctional additive system to meet the requirements of a wide range of agricultural manufacturers. This multifunctional oil can be used in many different agricultural applications and is particularly useful in equipment where there is a common lubrication system supplies oil for different applications.', '<p>Sinopec STOU Tractor Oil 10W-30 is a Super Tractor Oil Universal (STOU) formulated with high quality mineral base oil and a multifunctional additive system to meet the requirements of a wide range of agricultural manufacturers. This multifunctional oil can be used in many different agricultural applications and is particularly useful in equipment where there is a common lubrication system supplies oil for different applications.</p>\n\n<p>Meets API GL&ndash;4 specification and Allison C 4 (Agricultural applications only) and the performance requirements of Caterpillar TO 2, John Deere JDM J 27, Massey Ferguson CMS 1145, 1144 &amp; 1139 etc, specifications.</p>\n\n<p>Sinopec STOU Tractor Oil 10W-30 / Super Tractor Oil Universal (STOU)&nbsp; is available in 18 Ltr Pails.</p>', 31, 1, 999, 0, NULL, NULL, 'vi', '2023-02-18 03:01:30', '2023-02-18 03:01:30');
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int unsigned NOT NULL,
  `account_group_id` int unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roles_account_id_foreign` (`account_id`),
  KEY `roles_account_group_id_foreign` (`account_group_id`),
  CONSTRAINT `roles_account_group_id_foreign` FOREIGN KEY (`account_group_id`) REFERENCES `account_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `roles_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for systems
-- ----------------------------
DROP TABLE IF EXISTS `systems`;
CREATE TABLE `systems` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `attrib` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `systems_attrib_unique` (`attrib`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of systems
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `profile_pic` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `fullname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `note` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `profile_pic`, `fullname`, `gender`, `phone`, `email`, `address`, `note`, `created_at`, `updated_at`) VALUES (1, '', 'Admin', '', '', 'admin@gmail.com', '', '', '2016-08-04 10:56:31', '2016-08-04 10:56:31');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
