<?php
/*
Plugin Name: Save Logs BD
Plugin URI: 
Description: Salvar logs no BD 
Version: 4.0
Author: Gabriel Madeira
Author URI: https://github.com/Madeiira

*/
//Security
if(!defined('ABSPATH')){
    exit("Acesso Negado");
}

define('DIR_ABSOLUTO_SALVAR_LOGS', plugin_dir_path(__FILE__));

//test install table
require_once(DIR_ABSOLUTO_SALVAR_LOGS.'/includes/install_table.php');

require_once(DIR_ABSOLUTO_SALVAR_LOGS.'/menu_plugin.php');

require_once(DIR_ABSOLUTO_SALVAR_LOGS.'./includes/conexao.php');








add_action( 'init', 'w_log_rsm_install' );
 