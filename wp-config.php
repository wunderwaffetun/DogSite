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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mainsitebase' ); # На сервере другой feedan_mainsite

/** Имя пользователя MySQL */ 
define( 'DB_USER', 'Fees_Admin' ); # feedan_mainsite, mainsite 

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'cool_dogs_paws' ); # cool_dogs_paws1 на сервере

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BHzDUtTSJ|cOe{_:xj)Fr9$tJ7P. u9Ay:N^tp@Oi%U8@p@cT^<0-x@?{+,[?kF!' );
define( 'SECURE_AUTH_KEY',  '[?9)&<Ogr=Qxb_5c8#yycrsKyYhb)[WWqOj+>~dWTfKq87[#4Jr},YZEQhLF Xfh' );
define( 'LOGGED_IN_KEY',    '*gg*k`?6Jc.}<Sqdx){0,t4 <T;6j/vLD~3,?#YLB)@cUJOIER!/k6=.b -McyM9' );
define( 'NONCE_KEY',        'q4NYjel{,k9@Go2_ic)wHP]$9TUz|G `lS|+zwwI=Z3Q.~C[fji_bWtSTZK<B2)X' );
define( 'AUTH_SALT',        ';7kh1W;2oO}k&$]]tK.gLQr:4hX ,HWS]I$6-&uW<{%)JxfMq]+js:.=DH&]RBT{' );
define( 'SECURE_AUTH_SALT', '!*T(!4{{_c)5egSbso;8QgT>}(,K}4.aun.Gq$TrbWvC+qoCqKanLnbKq~7R~fz#' );
define( 'LOGGED_IN_SALT',   '2QzfAAa;)claJlp1bf7B~+I]2#9m#agUKw|}WGGd)lovP4HzwY433jI6rpzz,v;$' );
define( 'NONCE_SALT',       'i>X,m$Fy``fb!&(LX9%*|5+&A~c[sIr}NNq6csz8k.8};o&zATL$>A$6}x-s|-Vh' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
