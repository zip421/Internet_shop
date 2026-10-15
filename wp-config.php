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
define( 'DB_NAME', 'mysite1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'jWn0_KpmA9Gpd6(Na7sHk9d^%0iT]VJqVP63u/R,y?w~$RCvDrEFBUF }wGzu7TK' );
define( 'SECURE_AUTH_KEY',  'rG;:T|o^atH=_h7!W+B|G*EP&tR(fPya~qyfI`mmN5c.(C 9v0INr!$swNL96Sjt' );
define( 'LOGGED_IN_KEY',    '_Zi>J4#_F[@x EG8y|j12O&xKpSp!-@cff{dNGoPbUM^L0d@Sl5S%#LkOAVI%N:X' );
define( 'NONCE_KEY',        'FWs:@1hc.vv(31jWxj*~x4)T{Rc-Er;r7/17OX0%eL_$H|!z_?x?!rwU-Y)ci.i>' );
define( 'AUTH_SALT',        '67#FOdXxV$/(yihmk;0.7ewh)h!(k*).bmY<9+rlPJmZxlAfl09lt3LtSTC`H;tn' );
define( 'SECURE_AUTH_SALT', '>r6157OopG3-h)o)+Ej>1-)9Rv0Ar1]|z&hy,w4%$7hG}&Cd1uf#X9FsgC!er0xg' );
define( 'LOGGED_IN_SALT',   'IVQ~+kta[Wm`#h_8H#`h`dP5R< xU7$9Ts&mE)v[RUmwSqY1/g[REz?baq+M19,C' );
define( 'NONCE_SALT',       '2Q%s^crh&HJ*0>/T|%L)t)MLUb>n1 nAcsgW@,Jf&uln{XZD6jF:V{ u&.+yTJ?j' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
