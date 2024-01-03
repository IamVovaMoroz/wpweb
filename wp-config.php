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
define( 'DB_NAME', 'childhood_bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'k%mf/tN%V^/P_u&DS*Gyu1U?K3J)@.VT853>y_,AtS5ICDz)lR$KHj&]^[^i  -(' );
define( 'SECURE_AUTH_KEY',  '0-!V.GV/1FpJ:n`boFS^Y.;`8*$<{.:1f~Z--],wI0u<g;X:ixl:S4`zS%}cF`V1' );
define( 'LOGGED_IN_KEY',    '5i[s& @TpfX%t36;>IcbsJP`]b?WLS0w htR6X.vSDh4p3EES-@C2mDURpvRE$TG' );
define( 'NONCE_KEY',        '2=g=wTq<,`^f)D0 6Vt<z48_n(6UpF~n}Cmfod>d*d2PO[OKIj-.=K pp|gUioeq' );
define( 'AUTH_SALT',        'ZnuYao .$X`<t~1M*xoS`k0DlB)}dwmQgwe{f3C7mia(hDlj+gT2(.LYR2-x@`<Y' );
define( 'SECURE_AUTH_SALT', 'H#2!b7+#%[O guC8{`<4j*[$I&JV7t9$26`]6I{!$BL]]f/@WJ^65XO$4D4x$oJY' );
define( 'LOGGED_IN_SALT',   ')/k?RB])Q3jWlC)6r6bCYJ` a^vv2=a~8G#4_@*_t1LS$3~u87G&Pj(Y_/X)RXVQ' );
define( 'NONCE_SALT',       '=:`Nu#UyYPvN81mLl9PQ>zf$j{)3D66VFTl.{_BT|X64q+a.F5bLE`OjjBUe&|/5' );

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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
