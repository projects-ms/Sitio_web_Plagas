<?php 

include("../../connect.php");

    session_start();
    ob_start();

    $user_email = $_SESSION['user']; 
    $user_rol = $_SESSION['rol'];

    if ($user_rol == 'Admi') {

        /* Consulta en Cultivos */

        $consult1="SELECT * FROM solicitud_proyecto s, cultivo c, usuarioapp u WHERE s.id_cultivofk = c.idCultivo AND c.idUsuCultivo= u.email AND s.evaluador_sp = '$user_email'";
        $result1 = mysqli_query($connect,$consult1) or die ('<div class="alert mt-3 alert-danger text-center" role="alert">Ha ocurrido un error</div>');

        while($view1 = mysqli_fetch_array($result1))
        {
            echo' 
            <p class="text bg-orange text-white pl-3 mb-2" style="height: 31px;"><strong> <img src="../../icons/calendario-blanco.svg" class="pr-1"  alt="icono_usuario" height="20px"> Fecha de Solicitud: '.$view1['fech_ini'].'</strong></p>
            <p class="text px-3 mb-0"><img src="../../icons/usuario.svg" class="pr-1"  alt="icono_usuario" height="20px"> '.$view1['nameUsu'].' '.$view1['apellidoUsu'].'
            <br><img src="../../icons/ecologico.svg" class="pr-1"  alt="icono_cultivo" height="20px"> '.$view1['nameRegional'].'</br></p>
            <hr>
            <p class="subtitle px-3 mb-2">Estado:</p> 
            <p class="text px-3"><img src="../../icons/aval.svg" class="pr-1"  alt="icono_usuario" height="20px">'.$view1['stado_sp'].'</p> 

            <a href="cultivos.php?cultivo='.$view1['idCultivo'].'" class="btn btn-light btn-block">Consultar<img src="../../icons/lupa-2.svg" height="25px" class="pl-2" alt="icono_consultar"></a> 
            ';
            
        }

        /* Consulta en plagas */

        $consult2="SELECT * FROM solicitud_plaga s, plagas p, cultivo c, usuarioapp u WHERE s.id_plagaSolict = p.id_plagas AND p.id_cultivo=c.idCultivo AND c.idUsuCultivo=u.email AND s.evaluador_plag = '$user_email'"; 
        $result2 = mysqli_query($connect,$consult2) or die ('<div class="alert mt-3 alert-danger text-center" role="alert">Ha ocurrido un error</div>');

        while($view2 = mysqli_fetch_array($result2))
        {
            echo' 
            <p class="text bg-orange text-white pl-3 mb-2" style="height: 31px;"><strong> <img src="../../icons/calendario-blanco.svg" class="pr-1"  alt="icono_usuario" height="20px"> Fecha de Solicitud: '.$view2['fech_iniPlag'].'</strong></p>
            <p class="text px-3 mb-0"><img src="../../icons/usuario.svg" class="pr-1"  alt="icono_usuario" height="20px"> '.$view2['nameUsu'].' '.$view2['apellidoUsu'].'
            <br><img src="../../icons/plaga-2.svg" class="pr-1"  alt="icono_cultivo" height="20px"> '.$view2['nombreT_plagas'].'</br></p>
            <hr>
            <p class="subtitle px-3 mb-2">Estado:</p> 
            <p class="text px-3"><img src="../../icons/aval.svg" class="pr-1"  alt="icono_usuario" height="20px">'.$view2['stado_plag'].'</p>  

            <a href="plagas.php?plaga='.$view2['id_plagas'].'" class="btn btn-light btn-block">Consultar<img src="../../icons/lupa-2.svg" height="25px" class="pl-2" alt="icono_consultar"></a> 
            ';
        }

    /* Consulta en tratamientos */

        $consult3="SELECT * FROM solicitud_tratamiento s, tratamiento t, plagas p, cultivo c, usuarioapp u WHERE s.id_tatamientos = t.idTratamiento AND t.id_plaga = p.id_plagas AND p.id_cultivo=c.idCultivo AND c.idUsuCultivo=u.email AND evaluador_T = '$user_email'";  
        $result3 = mysqli_query($connect,$consult3) or die ('<div class="alert mt-3 alert-danger text-center" role="alert">Ha ocurrido un error</div>');

        while($view3 = mysqli_fetch_array($result3))
        {
            echo' 
            <p class="text bg-orange text-white pl-3 mb-2" style="height: 31px;"><strong> <img src="../../icons/calendario-blanco.svg" class="pr-1"  alt="icono_usuario" height="20px"> Fecha de Solicitud: '.$view3['fech_iniT'].'</strong></p>
            <p class="text px-3 mb-0"><img src="../../icons/usuario.svg" class="pr-1"  alt="icono_usuario" height="20px"> '.$view3['nameUsu'].' '.$view3['apellidoUsu'].'
            <br><img src="../../icons/corazon.svg" class="pr-1"  alt="icono_cultivo" height="20px"> '.$view3['nameTrata'].'</br></p> 
            <hr>
            <p class="subtitle px-3 mb-2">Estado:</p> 
            <p class="text px-3"><img src="../../icons/aval.svg" class="pr-1"  alt="icono_usuario" height="20px">'.$view3['stado_T'].'</p>  

            <a href="tratamientos.php?tratamiento='.$view3['idTratamiento'].'" class="btn btn-light btn-block">Consultar<img src="../../icons/lupa-2.svg" height="25px" class="pl-2" alt="icono_consultar"></a>
            ';
        
        }

    }else{
        echo "invalid_user";
    }


include("../../disconnect.php");
?>
            