<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/datatables.min.css">
</head>
<body>
	<div class="container">
		<center>
			<h1> .: Lista de reproduccion :. </h1>
			<a href="crear.php" class="btn btn-primary float-right"> Nueva Cancion</a>
			<a href="djPedido.php" class="btn btn-primary float-center"> Pedidos</a>
			<a href="IndexDj.php" class="btn btn-primary float-left"> Inicio</a>
			<br><hr><br>

			<?php 

				if ($_GET) {
					if ($_GET['alert'] == 1) {
					echo '<div class="alert alert-success animated rubberBand" role="alert">
							  Registro insertado exitosamente!
							</div>';
					}
				}

				echo"<div class='col-12' id='box' style='width: 200%; height: 800%; text-align: center;'>";    
                      
                    $canciones = simplexml_load_file("canciones.xml");
                    echo "<table class='table table-striped table-bordered table-hover'>
                            <thead>
                                <tr>
                                <th>Pistas</th>
                                <th>Nombre</th>
                                <th>Artista</th>
                                <th>Genero</th>
                                </tr>
                            </thead>
                            <tbody>";
                    foreach ($canciones as $cancion) {
                        echo "<tr>";
                        echo "<td>".$cancion['id']."</td>";
                        echo "<td>" .$cancion->nombre. "</td>";
                        echo "<td>".$cancion->artista."</td>";
                        echo "<td>" .$cancion->genero. "</td>";                 
                        echo "</tr>";

                    }
                    echo "</tbody></table>";
                ?>
                </div>            
			
		</center>
	</div>

	
</body>
</html>

<script src="js/jquery-3.4.1.js"></script>
<script src="js/datatables.min.js"></script>

	<script type="text/javascript">

		setTimeout(function(){$('.alert').hide('slow');}, 3000);

	</script>