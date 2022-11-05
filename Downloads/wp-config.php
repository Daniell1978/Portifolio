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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'portifolio' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'EB%1Z{TP*7h+@L8N3=Di_AN$DTRSk=$tceF.GGmV)LHC>nWe0Zz 03V@9q5mWNTe' );
define( 'SECURE_AUTH_KEY',  '9GA2.x&>uFG_:[xN~x+K!N&wp t!RcS.JobK5fB8Xfb9V2;=!BCW?f2BcFDCf[P ' );
define( 'LOGGED_IN_KEY',    'FUospt^kvrbP(:Mlv@#@.F35jRhv%Fo>@9{2dK{9+G},b,o6cZ01=}j4DZH5?`fk' );
define( 'NONCE_KEY',        'FU,;C!&7&@x[#=`v@DA]IB4;WG`TrPw-N:~DtM38Q/Z^#0bE2IF%Z&yk(5peBMkW' );
define( 'AUTH_SALT',        'i&2T1:Z5XcK/FiBR(j0%k9]/%qGD z?y;pw}h1j;r}t57odR%OvL]?CnLV!hHTzB' );
define( 'SECURE_AUTH_SALT', 'a2z,rKx^{}{355RybX9OZ02DXou-*~*{2-LK.UW_x~xYD,#Z.YaJ(i;Q[D5x=Zf$' );
define( 'LOGGED_IN_SALT',   'd=7.A$p^yiX!~Tos-zL%k:!Z_/@@?!M5)3WlC,5QZ?Aey~;0V[S${Wf%<HRvm5Pd' );
define( 'NONCE_SALT',       'Q&RR  *7cz227]55dH,k419diNdN:J,(IeXx9N+-t52%Bk5HWRA(0p7u+XU2nBME' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
