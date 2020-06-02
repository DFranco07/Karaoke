<?php

$id=rand(1,100);
$nom=$_POST['nom'];
$art=$_POST['art'];
$gen=$_POST['gen'];
$url=$_POST['url'];

if ($_POST){

	$canciones = simplexml_load_file("canciones.xml");
	//$canciones->addAttribute('tipo','Piedra, Papel o Tijera');
	$cancion = $canciones->addChild('cancion');
	$cancion->addAttribute('id',$id);
	$nombre = $cancion->addChild('nombre',$nom);
	$artista = $cancion->addChild('artista',$art);
	$genero = $cancion->addChild('genero',$gen);
	$url = $cancion->addChild('url',$url);
	
	$canciones->asXML("canciones.xml");
	echo "Guardado exitosamente";
}


?>