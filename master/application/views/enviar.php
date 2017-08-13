<?php
if(isset($_Post['asunto']) && !empty($_Post[asunto]) &&
	isset($_Post['mensaje']) && !empty($_Post['mensaje']))
{
	$destino="jbalderas109@gmail.com"
	$desde="From:"."Pagina web Carmen libre"
	$asunto= $_Post['asunto'];
	$mensaje= $_Post['mensaje'];
mail($destino, $asunto, $mensaje, $desde);
echo "correo enviado";
	
}else{
	echo "correo no enviado";
}
?>
  
	