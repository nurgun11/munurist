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
define( 'DB_NAME', 'sfsolmv9_test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'sfsolmv9_test' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'II%erS36' );

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
define( 'AUTH_KEY',         'X.6jgbpO:>Z&+7yu/{4Am@C/FKqc8:dVtu~Ze6}rNgcq^[Y?gk*NBH<s|u0e5k|3' );
define( 'SECURE_AUTH_KEY',  't:^[;#V$qH`[?z_F>u?j>85Dm p&)OUkarCwn:=Em ;SrB!+hL4EGl,?tVw+Vw*I' );
define( 'LOGGED_IN_KEY',    'I%iGsaE3IF/B{me(FZfO*PB}Ty>nXk:5a:RE])cq4J^CinmM|2[iZCPJ-i~1?/s:' );
define( 'NONCE_KEY',        ',^~,8KJtW],QRh%kl~>@y9P{ChmMVWp61GJzw@#5l.6i3QN,Qnqk%i)_z,=lPSRV' );
define( 'AUTH_SALT',        'MR51%|N]tA7T}m`~RTcgtefc#%02+kR&c_r_B.LV|%n1Yr/B(>vCIO?d`6M$bt,k' );
define( 'SECURE_AUTH_SALT', 'X(<l$Q2|)YC* w?SVq}0|//&WZ@h]M]aE1]M{5j=b!8jlE/Gp]wu1{@D&[-9<Ud&' );
define( 'LOGGED_IN_SALT',   '^:ZYiqS@~{BfHOOR0#sq~-O^>1&5?rt IR~KVHV&_eW)[Yn)Gjo[}t2:7n3!4#?1' );
define( 'NONCE_SALT',       '6Yn|>H~?X?d5e8eMmsB1}!Sv%%yg!Nr{^VI,0I++zd&S~bzAax!^c$uA7a;lUyP;' );

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
