<?php 

    session_start();
    $id=$_POST['mesa'];

            $mesas = simplexml_load_file("mesas.xml");
                foreach ($mesas as $mesa) {
                    if ($mesa['id']==$id) {
                        if ($mesa['estado']=="libre") {
                            $mesa['estado']="ocupado";
                            /*$_SESSION["auth"]='si';
                            $_SESSION["mesa"]=$id;*/
                            $mesas->asXML("mesas.xml");
                            header("location: paginap.php?id=".$id."");
                        }else{
                            header('location: index.php?alert=1');
                        }
                    }
            }

    ?>