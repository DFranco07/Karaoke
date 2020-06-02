<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/datatables.min.css">
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<center>
			<h1> .: Crear Nueva Cancion:. </h1>
			<a href="djLista.php" class="btn btn-info float-right"> Volver</a>
			<br><hr><br>
			
			<form style="width: 400px; text-align: left">
				

				<div class="form-group">
					<label>Nombre</label>
					<input class="form-control" id="nom">
				</div>

				<div class="form-group">
					<label>Artista</label>
					<input class="form-control" id="art">
				</div>

				<div class="form-group">
					<label>Genero</label>
					<input class="form-control" id="gen">
				</div>

				<div class="form-group">
					<label>URL</label>
					<input class="form-control" id="url">
				</div>

				<br>

				<button id="A" class="btn btn-success" >Crear</button>
				<input type="reset" class="btn btn-secondary">
				<a href="djLista.php" class="btn btn-danger">Cancelar</a>
			</form>

	
			
		</center>
	</div>



</body>
</html>

	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/localization/messages_es.js"></script>
	<script src="js/datatables.min.js"></script>

	<script>
		
		$('form').validate({
		  rules: {
		  	
		    nom: {
		      required: true
		    },
		    art: {
		      required: true
		    },
		    gen: {
		      required: true,
		    },
		    url: {
		      required: true
		    },
		  }
		});
	</script>	

<script type="text/javascript">
$(function() {


    $('#A').click(function(){


        var nom = $('#nom').val();
        var art = $('#art').val();
        var gen = $('#gen').val();
        var url = $('#url').val();

       /* $canciones = simplexml_load_file("canciones.xml");
                foreach ($canciones as $cancion) {
                    if ($cancion['id']==id) {
                    		alert('entro if');
                            header("location: crear.php?alert=1");
                        }else{*/
                            $.ajax({
					            type: "POST",
					            dataType: 'html',
					            url: "guardar.php",
					            data: "&nom="+nom+"&art="+art+"&gen="+gen+"&url="+url,
					            success: function(resp){
					                 alert('Guardado') 
					            }
					        });
                        //}
                //}

        

    });
});


	</script>
