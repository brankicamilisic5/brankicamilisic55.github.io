<?php
/**
 * Основне поставке Вордпреса.
 *
 * Ова датотека се користи од стране скрипте за прављење wp-config.php током
 * инсталирања. Не морате да користите веб место, само умножите ову датотеку
 * у "wp-config.php" и попуните вредности.
 *
 * Ова датотека садржи следеће поставке:
 * * MySQL подешавања
 * * тајне кључеве
 * * префикс табеле
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL подешавања - Можете добити ове податке од свог домаћина ** //
/** Име базе података за Вордпрес */
define( 'DB_NAME', 'wordpress' );

/** Корисничко име MySQL базе */
define( 'DB_USER', 'root' );

/** Лозинка MySQL базе */
define( 'DB_PASSWORD', '' );

/** MySQL домаћин */
define( 'DB_HOST', 'localhost' );

/** Скуп знакова за коришћење у прављењу табела базе. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Не мењајте ово ако сте у сумњи. */
define( 'DB_COLLATE', '' );

/**#@+
 * Јединствени кључеви за аутентификацију.
 *
 * Промените ово у различите јединствене изразе!
 * Можете направити ово користећи {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org услугу тајних кључева}
 * Ово можете променити у сваком тренутку да бисте поништили све постојеће колачиће.
 * Ово ће натерати кориснике да се поново пријаве.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q:#99hwm*I*TijJ}Chp|D!~RD9w85SQ)qKwQh.UsDCEHBB(16UkDyXGWBDeWFd6x' );
define( 'SECURE_AUTH_KEY',  'r@rZRnQvwZqAUj|+B`*5d_4RP]s7tA=$#*CK};Oc0spV79S*{,,i&k]PlFW$o1IE' );
define( 'LOGGED_IN_KEY',    'g2ws&i|BZ[>&esZc{&EaM+r^}yU@EW GxN@u[fcK. 5=_Z/x:,%J7;ovx@X&MuGT' );
define( 'NONCE_KEY',        's6IX0Fo=X*R:z6Hv?Dy/*X$n$1v)[;2Mgt{}3DQpS_b&wSBl*id.H~jW{luutV1F' );
define( 'AUTH_SALT',        'ii-ckcq&&WzHpFq:v!&=E;I0J9g_zP4_&`QcFeK}</F/`4AQdNRqOld6h7-CWYAt' );
define( 'SECURE_AUTH_SALT', '[d^.DpkIQ02YpIgYG$<wDOsxUZ:n!+UN~#|HcoM<Szt764A!r&1e., h%r}xg[9L' );
define( 'LOGGED_IN_SALT',   'IAGIU9Qg%>344L-PPp(V375l>I,uB#NB|dKz?E6=vc;0Ar3N45J|Did7z][-!b9J' );
define( 'NONCE_SALT',       'oY9wWC&-O7~LmM]{C1o[1y;MDBW{`L7q]t7py)OK2|A|WfL(`$Ux8dQ N``,H$A ' );

/**#@-*/

/**
 * Префикс табеле Вордпресове базе података.
 *
 * Можете имати више инсталација Вордпреса у једној бази уколико
 * свакој дате јединствени префикс. Само бројеви, слова и доње цртице!
 */
$table_prefix = 'wp_';

/**
 * За градитеље: исправљање грешака у Вордпресу ("WordPress debugging mode").
 *
 * Промените ово у true да бисте омогућили приказ напомена током градње.
 * Веома се препоручује да градитељи тема и додатака користе WP_DEBUG
 * у својим градитељским окружењима.
 *
 * За више података о осталим константама које могу да се
 * користе током отклањања грешака, посетите Документацију.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* То је све, престаните са уређивањем! Срећно објављивање. */

/** Апсолутна путања ка Вордпресовом директоријуму. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Поставља Вордпресове променљиве и укључене датотеке. */
require_once( ABSPATH . 'wp-settings.php' );
