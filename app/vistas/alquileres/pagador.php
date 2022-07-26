<?php include("layout/menuNavegacion.php"); ?>

<div class="container">
    <div class="card-header">

        <div style="text-align: right;">
             <ol>
                <a class="btn btn-outline-primary" href="index.php?url=app/vistas/alquileres/ingresar_pagador" role="button">Nuevo</a>                
                <a class="btn btn-outline-secondary" href="index.php?url=app/vistas/alquileres/inquilinos"  role="button">Atras</a>
            </ol>
        </div>
        
        <!--tabla-->
        <div class="card mb-4">
            <div class="card-header">
            <i class="fa-solid fa-city"></i>&nbsp;
                PAGADOR
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>

                            <th>Codigo</th>
                            <th>Nombre pagador</th>
                            <th>Inquilino</th>
                            <th>Telefono</th>
                            <th>correo</th>
                            <th>Doc / Editar</th>
                     
 
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>

                            <th>Id</th>
                            <th>Doc. Identidad:</th>
                            <th>Nombre o Razón social:</th>
                            <th>Inquilino</th>
                            <th>Celular:</th>
                            <th>correo</th>
                            <th>Doc / Editar</th>                        
                        </tr>
                    </tfoot>
                    <tbody>

                                    
                             
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<?php 

include_once "app/vistas/comunes/modalmensajes.php";
include_once "app/vistas/comunes/modaleliminar.php";

?>

<script src="js/alquileres/ingresar_pagador.js"></script>