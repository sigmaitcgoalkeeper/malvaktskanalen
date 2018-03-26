<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\malvaktskanalen\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'malvaktskanalen');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-`<xP[o8v<pErt(]v8JAmh7I[n+nmfW$s>z~6| jOkuvf>|m4?zG/)x2fIZm8DZ^');
define('SECURE_AUTH_KEY',  'q~_j 5}zY9(s|SRKJ*w8badMFa$3o7=9r4 qP(k|BuSk70et#bA)cev4=Uo[i+?m');
define('LOGGED_IN_KEY',    '<[`&?.pl#Pbk-,GZk~(`waHsp5KtRNcP:=RPnwF>ak%#mnENFBdn1cxVJ)MJcGrI');
define('NONCE_KEY',        '}wc=?-5YV*W1d*Nm[-~+,WQL-6mVH94^k+P?XJ9.v#mid?&g*vK}t,9fYJe{xvB(');
define('AUTH_SALT',        'BYeJYvJTa7ccO9KO/[FDP,Qa|S r(P+c%-UL:/47snrbA$.ak5=`jXckon3#alFM');
define('SECURE_AUTH_SALT', '_VGyb{4T>k^FpkO].c&I>Y:hqV@`$MN#MKiY^)?nm`.)CT:.?q,zG^CxB{4oBVfz');
define('LOGGED_IN_SALT',   'C5F:3ok-`-!HY*<qH}%9.A=)xYFja,mivi;M{L<Sk(le;}q1$E~ou=uwecbMV({M');
define('NONCE_SALT',       'tH~LA_Nn|ZCL?SaV&.HFA.}Hm?Aae/bg8j XM-9!m&:]S3FrRoRgbOQ*v5k@^A~f');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');