<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'azNj&/OkU_-y$@rMe@CD@4PbmbU#$@5o}u8ee%yYmn]9yuT?qe=1iz!H#9mP6}Y4');
define('SECURE_AUTH_KEY',  'BVg^sz]5g9%S}X^7#Ck3UIs-2NG_UE)IueT:~_a[8X:~V%e,;,JmgZ*tXBXc^ 9x');
define('LOGGED_IN_KEY',    'g#[iVyC^}LLIJ!=OIWZ1UZD?-&V{gA_-%L.X(.6qL|xFuAwAW,MDvQb41i0ptnvw');
define('NONCE_KEY',        'SD7I7/`qiye9O,YS,bK@u(K+sEYR<NC)@hN9^&Aq5xx]X|G)H5];Ru`VR?1k0HD,');
define('AUTH_SALT',        'f_E*t,_#ehEO9jn]bKo>@uaAgAlb2DdKwS,|Rbm7-^&sUej`ag(`S-6{6J1-:0&:');
define('SECURE_AUTH_SALT', 'zP`)`Yl_OZT% 0%ipMwS8t_/PIu;rbL;V&4dH${@/8aH^o4bv<cl[i#wO./pnF>z');
define('LOGGED_IN_SALT',   'h?OpHPRH:j`pbb[KcOu?Iln@bhdC4b%.&=Z1OCt#R}AN!:BL*e2v=pYOju~ X[qE');
define('NONCE_SALT',       '%hU*Z4,$!b=_N{8h!NcySj|GzlBv0djA^!.OZTW1M:Qp!4~T$%+IyIA6xn0UBSK#');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'w';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
