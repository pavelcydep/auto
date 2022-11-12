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
define( 'DB_NAME', 'wpbaza' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_`c =$LkmWjA^M)Usl:M#HpO&pFW@}sf QJ<epfAA.4.uzpjhW+5[gt;v?,nfhgr' );
define( 'SECURE_AUTH_KEY',  '|[qUbnX=vSReB}[]`kW:}V<_7<r%YJTU WTMU9Uv$1$ ;Mj7Ml1fwo@qTyz@ IZe' );
define( 'LOGGED_IN_KEY',    'vn1)q{J~Yf9n%q%`>j4(3~~1zgsXzd<Zc/P>3?#N?{#o-MU}bqhl)1K<:hoGMcHF' );
define( 'NONCE_KEY',        'Ds(jaQ($lU&#_8HFo7dCqAw~}@gB9tP.PwHbA/}-og4x@0.sB.=dE^wbVf0uc3tk' );
define( 'AUTH_SALT',        'aGY_RsXF(]n]7D!no|(Bd$wcr/}=+rd %%pj0cK#X@@g c|J,fEU=()4=[`rJ?H}' );
define( 'SECURE_AUTH_SALT', 'p:~R7yUt3lk&Wf=bt*$v1[yiNY!1EVO*{)j)RZ{L7vUm2/7_mY*qE} V;a*`>Ihf' );
define( 'LOGGED_IN_SALT',   'V&r1Y7QSgjP/)D#9emZxd$t{Eg,yn08r?USo!4ry5T<jNxo&E&Vk&~lF7P|Fzs?$' );
define( 'NONCE_SALT',       'Exs>J[?<Qi$ gO8jIWy,&w;jjv|hb#`oAwP*T26XhcTs-eP!T@#PUW$bT:wU}|gR' );

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
