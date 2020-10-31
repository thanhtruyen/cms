<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'cms' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v9;uArFB^p*/p3[GoRsqP2TvO{m[j *#qZQ}=1TL0h`buQ*vRF5F9McBt.`#Y7l%' );
define( 'SECURE_AUTH_KEY',  'S*6U_|iRCaJeC7@l&n5?# y{gKjWYzZ*PB7#h;BW?3C@WG .t-Gi4s?eZ~hr0N7x' );
define( 'LOGGED_IN_KEY',    'D^oUUM2ubGe^~~Asve.5&4iz]5=GGDLue[U}spNkVEhzv:YS$Ai`Gz@v:W?kABXb' );
define( 'NONCE_KEY',        'wGNyj;kYpC[X*ydqLO!`Z>53|+5^jopG2v{0pVLN8U%S< oFCNC?KP{~g$*HeVsh' );
define( 'AUTH_SALT',        'jL_8,sTn,K2;zS;G=02|}dtH64!<tK&mF)7_`5U!0GxRr`hHSFo5v.BokTSqquWi' );
define( 'SECURE_AUTH_SALT', '9FY,d3:4^~(P)jK`$|O=aok!~/VM9HJD,REFkYB|wSz|61G-/0a)rkn:KQ$zsPi.' );
define( 'LOGGED_IN_SALT',   '9leTWe(6Z^s)wf/c+^V_f4E-s/}V(?qx+hM{5Hhe]`/Lgwp2_)*wgYf;0;_I/8wl' );
define( 'NONCE_SALT',       'Bj=YNHO3Hsk+2JfFP`m$%OZ_WK.{/LuP=H.`W`*+P2lQ9Y)4JfArpLkzKKFtH>yi' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
