<?php
	include "conexionConf.php";
	include "clases/class.noticia.php";
	
	$objeto = new noticia();
	$fObj = $objeto->lista();
?>
<marquee width="220" height="120" direction='up' behavior='scroll' truespeed="" scrolldelay="65" scrollamount="1" loop="infinite">
	<ul style="list-style: square; margin-left:0; color:#555;">
<?php
    	for($i=0; $i<count($fObj); $i++) { ?>
	    <li><?php echo utf8_encode($fObj[$i]['titulo']); ?></li>
<?php   } ?>
	</ul>
</marquee>