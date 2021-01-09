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
define( 'AUTH_KEY',         '/B4ZD*k&L,0^H4-9%_/a5VyK`dlv?y#%mT&~d<0a(/{t^;Us}qZh^4>%_,-@=zk~' );
define( 'SECURE_AUTH_KEY',  'f>~M2M8}g]eBOn?$`6}Sh8}!4n3_hmBe*adm5h?A~&5G15rKAH$tKezL7AZSR%0[' );
define( 'LOGGED_IN_KEY',    '`$h3(>.B4GZkn28s57R@*CUO91?DT^O&|A,P+IPol*Ep.0<UYs:>]mgW)tfgiJJt' );
define( 'NONCE_KEY',        '::EBZ~9sHsM|P|doU`%@Met9N:P#xcjN!aR</,z|^G/sU(c%<1DIdvd?eNG9}!5K' );
define( 'AUTH_SALT',        '<*0}Mdmf,hbFnllS>eog,RB{GcYC}W*A.%DO83|LSck2S)Z1(9(CXw,nsoa8:?6.' );
define( 'SECURE_AUTH_SALT', 'Q[mOAskQ_8ruh<n:&XRVO%EZUJH?5xb#&_Och#GaH`o`]my$CI!BM8>!Y!}R<q!>' );
define( 'LOGGED_IN_SALT',   'SZ5<@|{E9hi8Kk [Q[FjK~[3NT7Jg(YW<9Z<QpuTPQ@3O@]_uTV+]Fa,xRd8Gh!.' );
define( 'NONCE_SALT',       '3NACG}Ak9C/[W$_S^@X>@y>Y~`Lf#2kUV|$<0t?{FWv.3Vm~DIJgqw68v#DZa,}[' );

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
