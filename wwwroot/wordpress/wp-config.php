<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wpdb');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '-x~-|>]oHL[ wR:|0WI}B[ct%Wc@YC0P--MmHzt5U6:Q{jxyex5m<}+Zdm`!ObO3');
define('SECURE_AUTH_KEY', 'fD2|,lyb%f8?e1=XJu.-j&7K-l<yM>RqX#2Z>zO},soWFSU~kQm;+g~yoFX-C Ke');
define('LOGGED_IN_KEY', '1ZwT@0e|Fl=n++z[,]+g2k`K#FpXzc~s>!|h Dpkj]3XgnKbMC|b1fgxx*{!1l8F');
define('NONCE_KEY', '[0`=(a~=H7.gabJd4+q#:R4m~<QCy7|)JK:/|*bnOK!#!M.>tygfnL^E>W+tU~0~');
define('AUTH_SALT', 'R*!kOB-|q7> a|ty@B/hT SP02 m5JPzqFjOw_qJs%;?-l~p}gI![ m_$rHww~R5');
define('SECURE_AUTH_SALT', '+v&;t-0;}nm^2m65-=xDcqL$O>wd2rJc1{Y*=o+>WUb<++<7/T0+8QJfPYN@wwhB');
define('LOGGED_IN_SALT', '~T?}2V1HfV55%VvC/v%O*%:mRv+--7Rx;`Tc ,Ej51>%(*Q&jpXn_9<J z4!:e@*');
define('NONCE_SALT', 'u.Rq$|E7q/h{$<ki4YbhS6t.bL+H|__~ >eN^+,Rl(A(^zb(%i|K?iY;)kO2L1o`');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');