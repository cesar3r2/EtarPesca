<?php
function fecha($value) { // fecha de YYYY/MM/DD a DD/MM/YYYY
 if ( ! empty($value) ) return substr($value,8,2) ."/". substr($value,5,2) ."/". substr($value,0,4);
}

function paginacion($url, $pag, $totObj1) {
	$adjacents = 3;
	$limite = 15;
	
	if ($pag == 0) $pag = 1;
	$ant = $pag - 1;
	$prox = $pag + 1;
	$ultima = ceil($totObj1/$limite);
	$lpm1 = $ultima - 1;
	
	$paginacion = "";
	if($ultima > 1)
	{
		$paginacion .= "<div class=\"pagination\">";
		//previous button
		if ($pag > 1)
			$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=$ant', 'main')\">« anterior</a>";
		else
			$paginacion.= "<span class=\"disabled\">« anterior</span>";
		//pages
		if ($ultima < 7 + ($adjacents * 2)) //not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $ultima; $counter++)
			{
				if ($counter == $pag)
					$paginacion.= "<span class=\"current\">$counter</span>";
				else
					$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=$counter', 'main')\">$counter</a>";
			}
		}
		elseif($ultima > 5 + ($adjacents * 2)) //enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($pag < 1 + ($adjacents * 2))
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $pag)
						$paginacion.= "<span class=\"current\">$counter</span>";
					else
						$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=$counter', 'main')\">$counter</a>";
				}
				$paginacion.= "...";
				$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=$lpm1', 'main')\">$lpm1</a>";
				$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=$ultima', 'main')\">$ultima</a>";
			}
			//in middle; hide some front and some back
			elseif($ultima - ($adjacents * 2) > $pag && $pag > ($adjacents * 2))
			{
				$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=1', 'main')\">1</a>";
				$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=2', 'main')\">2</a>";
				$paginacion.= "...";
				for ($counter = $pag - $adjacents; $counter <= $pag + $adjacents; $counter++)
				{
					if ($counter == $pag)
						$paginacion.= "<span class=\"current\">$counter</span>";
					else
						$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=$counter', 'main')\">$counter</a>";
				}
				$paginacion.= "...";
				$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=$lpm1', 'main')\">$lpm1</a>";
				$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=$ultima', 'main')\">$ultima</a>";
			}
			//close to end; only hide early pages
			else
			{
				$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=1', 'main')\">1</a>";
				$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=2', 'main')\">2</a>";
				$paginacion.= "...";
				for ($counter = $ultima - (2 + ($adjacents * 2)); $counter <= $ultima; $counter++)
				{
					if ($counter == $pag)
						$paginacion.= "<span class=\"current\">$counter</span>";
					else
						$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=$counter', 'main')\">$counter</a>";
				}
			}
		}
		//next button
		if ($pag < $counter - 1) 
			$paginacion.= "<a style='cursor: pointer' onclick=\"javascript: cambiar_contenido('$url?pag=$prox', 'main')\">siguiente »</a>";
		else
			$paginacion.= "<span class=\"disabled\">siguiente »</span>";
		$paginacion.= "</div>\n";
	}
	return $paginacion;
} ?>