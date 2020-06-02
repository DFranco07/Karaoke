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
			<h1> .: Lista de Pedidos :. </h1>
			<a href="djLista.php" class="btn btn-primary float-right"> Lista</a>
			<a href="IndexDj.php" class="btn btn-primary float-left"> Inicio</a>
			<br><hr><br>

			<?php 

				echo"<div class='col-12' id='box' style='width: 200%; height: 800%; text-align: center;'>";    
                      
                    $pedidos = simplexml_load_file("pedidos.xml");
                    echo "<table class='table table-striped table-bordered table-hover'>
                            <thead>
                                <tr>
                                <th>Pedido</th>
                                <th>Mesa</th>
                                <th>Nombre Cancion</th>
                                <th>Reproducir</th>
                                </tr>
                            </thead>
                            <tbody>";
                    foreach ($pedidos as $pedido) {
                        echo "<tr>";
                        echo "<td>".$pedido['id']."</td>";
                        echo "<td>" .$pedido->idMesa. "</td>";
                        echo "<td>".$pedido->cancion."</td>";
                        echo "<td><a href='".$pedido->url."' class='btn btn-success'>Reproducir</a></td>";                 
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