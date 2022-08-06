<?php

/*
|----------------------------------------
| INCLUYO LA CLASE CORRESPONDIENTE
|----------------------------------------
*/
include_once '../../../app/controladores/alquileres/ctrregistropropietarioj.php';
include_once '../../../app/controladores/comunes/ctrcapturararchivos.php';


/*
|-------------------------------------------------
| AQUI VALIDO QUE LA CLASE SE CARGO CORRECTAMENTE
|-------------------------------------------------
*/

if (class_exists('ctrregistropropietarioj')) 
{
   //$o_miClase = new ctrregistrousuarios();
}
else
{

   $dataRes = array(
      'error' => '1',
      'mensaje' =>  "La clase Registros, no se ha cargado correctamente "
    );

    return json_encode($dataRes);
}


/*
|-------------------------------------------------
| AQUI VALIDO QUE LA CLASE SE CARGO CORRECTAMENTE
|-------------------------------------------------
*/

if (class_exists('ctrcapturararchivos')) 
{
   //$o_miClase = new ctrregistrousuarios();
}
else
{

   $dataRes = array(
      'error' => '1',
      'mensaje' =>  "La clase para el manejo de archivos, no se ha cargado correctamente "
    );

    return json_encode($dataRes);
}


/*
|-------------------------------------------------
| AQUI VALIDO SI LOS PARAMETROS FUERON RECIBIDOS
|-------------------------------------------------
*/
$continuar = false;
$operacion = "";

if(isset($_POST["opcion"])) {
     $continuar = true;
     $operacion = $_POST["opcion"];
} else {
   $continuar = false;
   
   $dataRes = array(
      'error' => '1',
      'mensaje' =>  "Faltan parametros para continuar la operación."
    );

    return json_encode($dataRes);
}
   

/* 
 |-------------------------------------------
 | AQUI SE EJECUTA LA OPERACION DE INSERTAR
 |-------------------------------------------
*/

if($operacion == "I"){

   /*
    |-------------------------------------------
    | AQUI CREO UNA INSTANCIA DE LA CLASE
    |-------------------------------------------
    */
    
    $registroPagadorj =  new ctrregistropagadorj();

   /*
   |---------------------------------------------
   | AQUI CARGO LOS DATOS PARA ALMACENAR
   |---------------------------------------------
   */
    $datos = array(  
                    "id_propj"  => $_POST["hiid_propj"],
                    "cod_prop"  => $_POST["registroCodigoj"],
                    "nom_proj"  => $_POST["registroNombrej"],
                    "rif_proj"  => $_POST["registroRifj"],
                    "act_proj"  => $_POST["registroactividad"],
                    "dir_proj"  => $_POST["registroDirecionj"],
                    "tel_proj"  => $_POST["registroCelularj"],
                    "cor_proj"  => $_POST["registroEmailj"],
                    "tipo_personaj" => $_POST["tipo_personaj"], 
                    /*
                    |------------------------------------------
                    | AQUI VAN LOS DATOS DE LOS BANCOS NACIONALES
                    |------------------------------------------
                    */
                   "cuenta_id_nacionalj" => $_POST["hidcuenta_id_nacionalj"],
                   "cuenta_id_bancoj" => $_POST["cboBancoNj"],
                   "num_cuenta_nacionalj" => $_POST["num_cuenj"],
 
                   "pagomovil_cedulaj" => $_POST["ced_pmovj"],
                   "pagomovil_id_bancoj" => $_POST["cboBancoNPj"],
                   "pagomovil_telefonoj" => $_POST["cel_pmovj"],
                 
                   /*
                    |------------------------------------------
                    | AQUI VAN LOS DATOS DE LOS BANCOS INTERNACIONALES
                    |------------------------------------------
                    */
                   "cuenta_id_internacionalj" => $_POST["hidcuenta_id_internacionalj"],
                   "ban_extrj" => $_POST["ban_extrj"],
                   "age_extrj" => $_POST["age_extrj"],
                   
                   "dc_extrj" => $_POST["dc_extrj"],
                   "cue_extrj" => $_POST["cue_extrj"],
                   "iba_extrj" => $_POST["iba_extrj"],
                   "bic_extrj" => $_POST["bic_extrj"],
                  
                   /*
                    |------------------------------------------
                    | AQUI VAN LOS DATOS DE LOS BANCOS PAYPAL
                    |------------------------------------------
                    */
                    "cuenta_id_paypalj" => $_POST["hidcuenta_id_paypalj"],
                    "cor_paypj" => $_POST["cor_paypj"],
                    "nom_paypj" => $_POST["nom_paypj"] ,


                    /*
                    |------------------------------------------
                    | AQUI VAN LOS DATOS DE LOS BANCOS ZELL
                    |------------------------------------------
                    */
                    "cuenta_id_zellej" => $_POST["hidcuenta_id_zellej"],
                    "tel_zellj" => $_POST["tel_zellj"],
                    "cor_zellj" => $_POST["cor_zellj"] ,
                    "nom_zellj" => $_POST["cor_zellj"] );
				

                   

      //echo json_encode($datos);
      //die;

    /*
   |-------------------------------------------------------------------------------------------------------------
   | AQUI PASO LA RUTA DE LOS DOCUMENTOS
   |-------------------------------------------------------------------------------------------------------------
   |
   | CUANDO SE PASAN DOCUMENTOS O ARCHIVOS, SIEMPRE SE DEBEN CAPTURAR DOS DATOS, POR CADA CAMPO ARCHIVO
   |
   | EJEMPLO: SI EL CAMPO SE LLAMA [cedu_docu] entonces se deben capturar los dos datos
   |  $_FILES['cedu_docu']['name']; -> Este es el nombre real del archivo
   |  $_FILES['cedu_docu']['tmp_name']; -> Este es un nombre temporal que se crea cuando se carga el archivo
   |-------------------------------------------------------------------------------------------------------------
   */
                 
         $capturarArchivos =  new ctrcapturararchivos();

         $AchivosCargados = $capturarArchivos->GetPostedFiles();

      // echo $resultado;



   /* 
   |---------------------------------------------
   | AQUI OBTENGO EL RESULTADO DE LA EJECUCION
   |---------------------------------------------
   */
     $result = $registroPagadorj->registrar($datos,$AchivosCargados);
    
    /*
    |-------------------------------------------
    | AQUI REGRESO EL RESULTADO AL AJAX
    |-------------------------------------------
    */
    header('Content-Type: application/json');
     return $result;
     
}

