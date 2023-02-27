<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'hotletol_inner' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'hotletol_inner' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'J8X2e*ma_2' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'hotletol.mysql.tools' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4:@xFO=No#QQu{@A[qXg0Z,8y3G{]c-_KboVxt5]MPM@[2@4U/91aO<uAw<5O8Or' );
define( 'SECURE_AUTH_KEY',  'vl3g-4^6q_kV4o<e$( E:c|wvy kuy>3a+k>R6-X9ZxD3r<(Hinu1 |jPC{e7Kd6' );
define( 'LOGGED_IN_KEY',    '_Xn(E3qkkGWLi@%.t9D&Z*+WHVr>f^~+r=F[eZg+n12oC2j(,L|GHRsG/{*?S^RH' );
define( 'NONCE_KEY',        'W&6AuaJ;76Ht%<W<S]Tk|2yd4E+OyQLu@V/UNYz[pe:Ik4/?m) rL%Mca80^O&A(' );
define( 'AUTH_SALT',        '`Vd%0Ui+.u`ry6D,cPNtE(jJ;g3M}d6t)}Kam.YH)D<%w;MQ/q<Z(!^8le*4/`C~' );
define( 'SECURE_AUTH_SALT', 'xWM,n`9o-VY43P=odu*)DVM$FZq1:W`XKIn,WqF4>-RWl<Rs3W3&fYS9H5V3ZEb-' );
define( 'LOGGED_IN_SALT',   'RapjFW?6 B(*t2Zu}YP(nVtl+ %o2 bSU7Fm,6I)DUGC+PpSZXmH+R*=8ei1Am0$' );
define( 'NONCE_SALT',       'pk)1;IzLqCxW54thAo8f5uT]|t$tCi_5x4)6+C4sMfjZV254V`pxLB:`tFWDmrKs' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
//define( 'WP_DEBUG', true );
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */


//define('WP_MEMORY_LIMIT', '2M');
//define('ALLOW_UNFILTERED_UPLOADS', true);



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';