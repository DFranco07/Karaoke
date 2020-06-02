<!DOCTYPE html>
<html>
<head>
    <title>Karaoke</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel=stylesheet>

    <style>
        form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
    </style>
   
</head>
<body>
    <form action="validar.php" method="post">
  <div class="imgcontainer">
    <img src="img/logo.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Seleccione su Mesa</b></label>
    
    <select name="mesa">
        <option value="" disabled selected>Seleccione...</option>
    <?php 

            if ($_GET) {
              if ($_GET['alert'] == 1) {
              echo "<script>alert('Mesa ocupada');</script>";
              }
            }

            $libre = "libre";
            $mesas = simplexml_load_file("mesas.xml");
                foreach ($mesas as $mesa) {
                    echo "<option value='".$mesa['id']."'>".$mesa."</option>";
               
            }

    ?>
     
    </select>    

    <button type="submit" value="Enviar datos!">Login</button>
    
  </div>

  
</form>
</body>
</html>
