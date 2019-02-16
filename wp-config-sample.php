<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'promercado');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', '127.0.0.1');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$=8 h7tO;5aCM aHakuuj:gi=+Xp}2nDg[<V/Wwum>TI|XFmNmwyt+a+p8>[b:Cb');
define('SECURE_AUTH_KEY',  'Q!1c1_HP4#+6}VpM(bd`am-G6SvO0|$K oK^48.3V+a4@^=la$>2GJ6%^|OnnUAs');
define('LOGGED_IN_KEY',    ':iY]PVEU}]>5k0p_mO5LrKF2ugpnT>i/juoJKX>h=LNF:WSW.tC&FpArM<EU<M:2');
define('NONCE_KEY',        '91K}d]+yJNl%pJT;Ec{~2T&s-{+0v.nx+-=# }b@hZ9zq@zMnQn,E=oWKsBD-XX,');
define('AUTH_SALT',        'j,${UY]]u:_^x&s}#u-76B0PnabU{jqO]2mAv0HJEflx-^a(C0-9ErtdSU24Ehqg');
define('SECURE_AUTH_SALT', 'N1hUF)k=znDy.aB9+pj!9o+l8V4;p-DJpzF>l]yoCnX|NvoRBLdl5|b:&//A=D(L');
define('LOGGED_IN_SALT',   '%26na.)X7p/BXk]-nB5lVH7`!c+Y;KObH._J!BG^#M `n+C`x4=c9b5ehx2m#gef');
define('NONCE_SALT',       'g)le$v6J>R16w>qq5vf(l;EBHWr^%BsBiDFiYOh[20JXPKMx=i!v9N[:m9W^Ml$b');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
