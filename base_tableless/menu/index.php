<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Com Listas</title>
<style type="text/css">
*{margin:0; padding:0;}
ul li a:hover{background:#0CF;}
.menu_um{list-style:none; float:left; display:inline; margin:30px; width:150px; background:#069; padding:5px;}
.menu_um li{float:left; margin-bottom:3px; position:relative;}
.menu_um li a{float:left; width:140px; padding:5px; background:#FFF; text-decoration:none; font:bold 14px Arial, Helvetica, sans-serif; color:#069;;}
.menu_um li .sub_um{list-style:none; float:left; width:150px; background:#069; padding:5px; position:absolute; left:155px; display:none;}
.menu_um li:hover .sub_um{display:block;}
.menu_um li .sub_um li .sub_sub_um{list-style:none; float:left; width:150px; background:#069; padding:5px; position:absolute; left:155px; display:none;}
.menu_um li .sub_um li:hover .sub_sub_um{display:block;}
</style>
</head>

<body>

	<ul class="menu_um">
    	<li><a href="#">Item 1</a></li>
        <li><a href="#">Item 2</a>
        	<ul class="sub_um">
            	 <li><a href="#">sub 1</a></li>
                  <li><a href="#">sub 2</a>
                  	<ul class="sub_sub_um">
                    	<li><a href="#">sub sub 1</a></li>
                        <li><a href="#">sub sub 2</a></li>
                    </ul>
                  </li>
            </ul>
        </li>
        <li><a href="#">Item 3</a></li>
    </ul>

</body>
</html>


<!--
<style type="text/css">
*{margin:0; padding:0;}
.menu_um{list-style:none; float:left; display:inline; margin:30px;}
.menu_um li{float:left; margin:5px; position:relative;}
.menu_um li a{float:left; padding:5px; background:#999; font:14px Arial, Helvetica, sans-serif; color:#FFF; text-decoration:none;}
.menu_um li a:hover{background:#333;}
.menu_um li .sub_um{position:absolute; left:0px; top:27px; list-style:none; float:left; background:#069; width:150px; padding:5px; display:none;}
.menu_um li .sub_um li{margin:0 0 5px; position:relative;}
.menu_um li:hover .sub_um{display:block;}
.menu_um li .sub_um li a{float:left; width:140px; background:#FFF; color:#666}
.menu_um li .sub_um li a:hover{background:#999;}
.menu_um li .sub_um li .sub_sub_um{list-style:none; float:left; width:150px; background:#900; padding:5px; position:absolute;
							left:155px; display:none;}
.menu_um li .sub_um li:hover .sub_sub_um{display:block;}

</style>-->
