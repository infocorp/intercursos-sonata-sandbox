<?php
function getHome(){
	$url = $_GET['url'];
	$url = explode('/', $url);
	$url[0] = ($url[0] == NULL ? 'index' : $url[0]);
	
		if(file_exists('tpl/'.$url[0].'.php')){
			 require_once('tpl/'.$url[0].'.php');
		}elseif(file_exists('tpl/'.$url[0].'/'.$url[1].'.php')){
			 require_once('tpl/'.$url[0].'/'.$url[1].'.php');
		}else{
			 require_once('tpl/404.php');
		}
}


function setHeader(){
	require_once('tpl/header.php');	
}

function setMenu(){
	require('tpl/menu.php');	
}


function setHome(){
	echo BASE;
}

?>