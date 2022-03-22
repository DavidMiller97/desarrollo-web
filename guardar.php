<?php
include 'conection.php';
if(isset($_POST)){

        $nombre = $_POST['nombre'];
        $apaterno = $_POST['apaterno'];
        $amaterno = $_POST['amaterno'];
        $correo = $_POST['correo'];
	$id = $_POST['id'];

 if($nombre == '' || $apaterno == '' || $amaterno == '' || $correo == ''){

                header('Location: index.php?error=true');
}else{


                $sql = "UPDATE usuarios SET nombre = '$nombre', apaterno = '$apaterno', amaterno = '$amaterno', correo = '$correo' WHERE id = $id;";

		$result = pg_query($con, $sql);

                if($result){
                        header('Location: index.php?success=true');
                }else{
                        header('Location: index.php?error=true');
                }
        }
}
?>
