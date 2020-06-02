<?php

$id=$_POST['id'];
$mesa=$_POST['mesa'];

$elegida= array();

$canciones=simplexml_load_file("canciones.xml");
foreach ($canciones as $cancion) {
	if ($cancion['id']==$id) {
		$elegida['id']=$cancion['id'];
		$elegida['nombre']=$cancion->nombre;
		$elegida['url']=$cancion->url;
	}
}

if (isset($elegida)){

	$pedidos = simplexml_load_file("pedidos.xml");
	$pedido = $pedidos->addChild('pedido');
	$pedido->addAttribute('id',$id."-".$mesa);
	$pedido->addChild('idMesa',$mesa);
	$pedido->addChild('cancion',$elegida['nombre']);
	$pedido->addChild('url',$elegida['url']);
	
	$pedidos->asXML("pedidos.xml");
}


?>