<?php
 function w_log_rsm_menu_page(){
    add_menu_page( 
        "Salvar Logs", 
        "Salvar Logs", 
        'manage_options', 
        'write-log-rsm', 
        'w_write_page_view', // abaixo criada 
         null, //plugin_dir_url( __FILE__ ).'img/icons8-add-list-41.png', 
        15 
    ); 
    //criar submenus
    //log de envio
   /* 
    add_submenu_page( 
        'pgl-exportador-leroy', 
        'Log de Envio', 
        'Log de Envio', 
        'manage_options', 
        'log-export-loroy-sub', 
        'pgl_log_submenu_view', null );
        */
    
}
add_action( 'admin_menu', 'w_log_rsm_menu_page', true );

function w_write_page_view(){
    ?>
    <!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Importar TXT</title>
	</head>
	<body>
		<h1>Importar dados do arquivo TXT</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="<?php echo plugin_dir_path(__FILE__);?>/includes/processa.php" enctype="multipart/form-data">
			<label>Arquivo</label>
			<input type="file" name="arquivo"><br><br>
			
			<input type="submit" value="Importar">
		</form>
	</body>
</html>
<?php 
}