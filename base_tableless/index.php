<?php
require_once('dts/ini.php');
require_once('dts/get.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php setHome();?>/tpl/style.css" rel="stylesheet" type="text/css" />
<link href="<?php setHome();?>/tpl/print.css" rel="stylesheet" type="text/css" media="print" />
<link rel="stylesheet" type="text/css" href="<?php setHome();?>/js/shadowbox/shadowbox.css">
<script type="text/javascript" src="<?php setHome();?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php setHome();?>/js/shadowbox/shadowbox.js"></script>
<script type="text/javascript" src="<?php setHome();?>/js/mascara.js"></script>
<script type="text/javascript" src="<?php setHome();?>/js/cycle.js"></script>
<script type="text/javascript">
Shadowbox.init();

jQuery(function($){
   $("#fone").mask("(99) 9999-9999");
});

$(function(){
	$('.bloco_um > ul').cycle({
		fx: 'fade',
		speed: 1000,
		timeout: 5000,
	    next:   '#next2', 
	    prev:   '#prev2',
		pagerAnchorBuilder: function(idx, slide){
			return '.bloco_dois li:eq('+ (idx) +') a';
		}
	});
});
</script>



	<?php getHome();?>

</div><!--/content-->

<div id="clear"></div><!--clear-->
</div><!--/site-->

<div id="footer">
<div class="footer_content">

        <ul class="footer_elementos">
            <li>
            <img src="<?php setHome();?>/tpl/images/infocorp_logo.png" border="0" alt="Logo" title="Infocorp - Empresa Júnior do IC"/>
            </li>
            <li>
                <div class="tel">Ligue:</div><!--/tel-->
                <p>(99) 9999-9999</p>
                <p>(99) 9999-9999</p>
            </li>
            <li class="right">
                <div class="mail">Escreva:</div>
                <p class="min">contato@contato.com.br</p>
                <p class="min">falecom@contato.com.br</p>                    
            </li>
        </ul>

</div><!--/content-->
</div><!--/footer-->

</body>
</html>
