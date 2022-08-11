<?php 

include("layout/menuNavegacion.php"); 

?>

<div class="container">
    <div class="card-header">
                    <div style="text-align: right;">
                        <ol>          
                            <a class="btn btn-outline-secondary codpro" href="index.php?url=app/vistas/alquileres/cobrador"  role="button">Atras</a>
                        </ol>
                    </div>


                    <div style="text-align: left;">
                        <span id="lblcobrador"><strong>COBRADOR : </strong></span>
                         <br/><br/>
                    </div>

            <h4 class="card-title">Asignación de inmuebles al contador</h4>
                
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-inq_natural" role="tabpanel" aria-labelledby="nav-inq_natural-tab">
                        <div class="col-12 grid-margin">
                            <!--inq_natural-->
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-sample" id="inq_natural" name="inq_natural" method="POST" action="" autocomplete="off" enctype="multipart/form-data">

                                        <!--Datos Personales-->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="col text-center">
                                                    <h5 class="card-title">Información</h5>
                                                </div>
                                                </br>
                                                
                                                 <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="col-sm-12 col-form-label">Buscar Código inmueble o propietario:</label>
                                                        </div>
                                                    
                                                        <div class="col-md-4">
                                                                <input type="text" class="form-control" id="nom_prop" name="nom_prop">
                                                        </div>
                                                        <br>
                                                        <div class="col-md-2">
                                                                <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                                                        </div>
                                                            
                                                    </div>
     
                                            </div>
                                        </div><br>
            
                                    </form>
                                    <div class="row">

                                        <div class="card">
                                        <div class="card-body">

                                                <div class="table-responsive">
                                                    <table class="table table-striped" id="datosAsignarInmueble">
                                                            <thead>
                                                                    <tr>
                                                                    <th>Inmueble</th>
                                                                    <th>Propietario</th>
                                                                    <th>Inquilino</th>
                                                                    <th>Acciones</th>
                                                                    </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                    </table>
                                                </div>
                                                </div>
                                        </div>
                                        </div>
                                </div>
                               
                            </div>
                           
                        </div>
                      
                    </div>
                
                </div>
            </div>
        </div>
        <?php 

include_once "app/vistas/comunes/modalmensajes.php";
include_once "app/vistas/comunes/modaleliminar.php";

?>
<script src="js/comunes/funciones.js"></script>
<script src="js/alquileres/asignar_inquilino.js"></script>