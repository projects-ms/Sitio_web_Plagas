<?php 

    include("../../connect.php");

    $idCultivo = $_POST['idCultivo'];
    $idUsuCultivo = $_POST['idUsuCultivo'];
    $fechaActual = date('d-m-Y');

    $update = "UPDATE cultivo SET stado_c='En espera' WHERE idCultivo='$idCultivo' AND idUsuCultivo='$idUsuCultivo'";
    $update = mysqli_query($connect,$update) or die ('<div class="alert mt-3 alert-danger text-center" role="alert">Ha ocurrido un error.</div>');

    /* Permite saber la cantidad de filas que tuvieron cambios en la BD (INSERT,UPDATE,DELETE) */
    $check = $connect->affected_rows;

    if ($check==1) {

        $insert = "INSERT INTO solicitud_proyecto value(null,'$idCultivo','$fechaActual',null,'En espera',null,null)";
        $result = mysqli_query($connect,$insert) or die ('<div class="alert alert-danger text-center mt-3" role="alert">Ha ocurrido un error</div>');
    
        if($result){
            echo '<div class="alert alert-success text-center mt-3" role="alert">
            Solicitud de aval con exito - Se actualizara dentro un momento el listado de cultivos. 
            </div>';
        }
    }else{
        echo '<div class="alert alert-danger text-center mt-3" role="alert">
            invalid_user
            </div>';
    }

    
    include("../../disconnect.php");

?>
