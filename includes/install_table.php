<?php

function w_log_rsm_install(){
    global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS ".$wpdb->prefix."log_plugins (
    `ID` int(11) NOT NULL,
    `datas` datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
    `messagem` TEXT NOT NULL
    ) ".$charset_collate.";";
    //$teste = $wpdb->query($sql);
 
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    return dbDelta( $sql );
}
