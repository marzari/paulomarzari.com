<?php
/** 
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser. 
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'paulomarzari');

/** O nome do utilizador de MySQL */
define('DB_USER', 'paulomarzari');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', 'wordpress');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x]3@r_c,,{nW1c?*o]f*C4HQ(.dA81?Is#ab3keC~lKGVY6EeQZVSVxfzFGA<]$a');
define('SECURE_AUTH_KEY',  'D,?5^qkO7C$)gq@=>(%MVa0J.0%/.<*2P7/oZ|}]MJ~K_pm8${=g/o:j>[KL1=fE');
define('LOGGED_IN_KEY',    ':vCVVlhmP1qWRcO[Ab9BYHX{a[~t-kt4)u.]<:,B9CQp$GC^BWp`r<.@Y?O{FpFf');
define('NONCE_KEY',        'mnUk_5F{R1(X)/fk[T`Yas-c(/V7Gz!w(%jr6hsVx C{brRzeLBcSJ-1K;{W]AHQ');
define('AUTH_SALT',        '!$4(7/RJCS[5>up0!ffD]wkH3;Awh9%bX>zgb3@LyiXm6MX.t11Ib8Ftfp!bp/j<');
define('SECURE_AUTH_SALT', 'ciJ)a(wwT%7p))dM`L6qy/g#a3,cH|5Bvp6+i]*jy#I2KIS@Ra=#9K_fF+uySFjS');
define('LOGGED_IN_SALT',   'mKKo|D8xN}@Ou4s&>Q(j+h=b_kBY+CEhVW;:El@N#J;LmxZih6*D=B;Rj&a>QDwe');
define('NONCE_SALT',       '862^lSg28Ua-}k>AKJjy=J.DGhp4l0Im |{wb<u8o5hmqs9[y<}lWoGY-Ueqm`6:');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'PM_';

/**
 * Idioma de Localização do WordPress, Inglês por omissão.
 *
 * Mude isto para localizar o WordPress. Um ficheiro MO correspondendo ao idioma
 * escolhido deverá existir na directoria wp-content/languages. Instale por exemplo
 * pt_PT.mo em wp-content/languages e defina WPLANG como 'pt_PT' para activar o
 * suporte para a língua portuguesa.
 */
define('WPLANG', 'pt_PT');

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
