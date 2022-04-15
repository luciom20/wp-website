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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'tailpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=w<8>]7[rsNAf56IIy#G,iGF?_2lULKH;sGlh}Hu@phbBa=>%}2]_?QqN,o0h~y4' );
define( 'SECURE_AUTH_KEY',  'zYgL8TAD!]@^zxrzsN#bpk%/mH6S)wRfL8veAHLF`V)c52Gw( .>,ZHy:jkhFl >' );
define( 'LOGGED_IN_KEY',    '|nzN:Mu%4g});sz~_bMd_>j@F97Uw$.Qs6+Z!fXhz;1+=$!w+}`u&RZ,wq~V4w~M' );
define( 'NONCE_KEY',        '^n $@hCeFAt^s,F$fpkAcW(+EFP8CHgc0oCU@nf#W~s=WO&(lkI$a/U@Ib6B2~dv' );
define( 'AUTH_SALT',        'Pzsap7Eh4hP,*-,SBlOW3G8E$`kfjy;~oN)O[mwqIz6gC|,2)1yAVqCV4@D`pGVo' );
define( 'SECURE_AUTH_SALT', 'Cqt`PEce`:LhIrsDVT46[<RlmV4Bn9L3vaTg&YwY}p:e@WO&+E]tD,Sfo/1^Z5Hn' );
define( 'LOGGED_IN_SALT',   'sb@V]V}6F!At!/XesrH@y_[s>{e/5L.K1?UJ=+eYzF[q-<ztJU6$c|Bg{ZdSJzb{' );
define( 'NONCE_SALT',       'a  pdFOU&(Bs}8,[@_;$(bor -.l6H?e>dnx<?Ps3v>l3V?~_d&eI(d/&5`3Mz2x' );

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
