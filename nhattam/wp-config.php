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
define('DB_NAME', 'betongnhattam');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'lG`g1t;P||yubrxz_u]WtInK{eA2zQ8a:Z6QumuQ-{-t^Tderm{j//02Mk3JWdq,');
define('SECURE_AUTH_KEY',  ',h*H>{JKu6{xv9H.#aJZmLq*VQq;8bZxjy;_%8~Be #);,..h)<Z+/9A^e)2[stF');
define('LOGGED_IN_KEY',    'IartzmY%#Dzwqv5dIJ1M4tnI%J}wh<jIsm(s4>.7H}zg?C)[EmBjri&1)uZejB#`');
define('NONCE_KEY',        'fWN6K5PY|%(Yh3^0-.y#;$,7]}i*x;`k4EtrG|nM N!@pJn_[mA; aDhM$wEHwiu');
define('AUTH_SALT',        'T8~>,+}l-Mz<]I[+6C ]-lFCIfd}dt4:J$>~_tM}|CkfZ**%%KE0q~v(({1/bti0');
define('SECURE_AUTH_SALT', 'bG2GbjFi6:h^OB /fZXn*6RZ.n7[|E}Yw(>=@RrM)7Df_x$;B*@u?u@_p~51L6%,');
define('LOGGED_IN_SALT',   '!x<r0LT|o.pUTLKCZhq{2E;C84kp+iz:ohgYs4$cg^Rh8|c8sbC&0|kd6%~Cv[+}');
define('NONCE_SALT',       'gF<wxToHB{0in-TTX9KepFA?{3|b*o4&h1pVa{c cv/quu8n&}g$Ubw?y`o3JRWI');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
