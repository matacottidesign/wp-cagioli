<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'sito_cagioli' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'root' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*d?.~m5]K zI:aR&(^ntttR@VPWIYG -,<lm+^x&:pi]q^-j)dz|L7X,D R`B`%s' );
define( 'SECURE_AUTH_KEY',  'LHSK5|T<DO*nn%P9P7PWc4MO+G08=A/a+[SEqR GnCbZ)+`~S4 ?b]=zj6/3c<#8' );
define( 'LOGGED_IN_KEY',    '/B:qu^jNOpQ.XKq2l~-j2gs`V^oRMzeGZ#N:uBQ8bvxg&J9.Y,3{(Xl1@0-oWyM*' );
define( 'NONCE_KEY',        '5(i&1;IV{[Wa<8+(Gn2^_GOva&%YqK4ir4YtS;6u5wyx;U9a8W*5e7t80_7{/-1A' );
define( 'AUTH_SALT',        'Gd&LA-@-rv>upq/i!a~L2(YoBQOB?$ukh*[!>CV2^N^yu-ep1LG?epqt.B_i1{F ' );
define( 'SECURE_AUTH_SALT', 'Hnm^!>Qx4LlvO9j3dBg(n:*l$NW_^v[dXeVy6=m&HqO#h e8^?X,R$~5nE,fG* f' );
define( 'LOGGED_IN_SALT',   '3WSr$T?1$w42yF~-25OSR^,LSwd`Wy1XcN.g!c_81 x}`4Kd>4$Em!V:o-[~|~dd' );
define( 'NONCE_SALT',       'QgHzBg4:E*2Np_[WzDc:0z#e`EhC=5BO/2?<)%Hd}bk1j8t{.4]@xx;oPG)ew{,w' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'francescoxyz_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
