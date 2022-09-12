<?php 


include("layout/menuNavegacion.php"); 


?>


<div class="container">

    
        
        <h4 class="card-title">BITACORA DEL BENEFICIARIO </h4>
      
        <div class="card-header">


            <div style="text-align: right;">
               
                         <ol>          
                            <a class="btn btn-outline-secondary " href="index.php?url=app/vistas/alquileres/beneficiarios"  role="button">Atras</a>
                            <a href="app/reportes/repfichabeneficiario.php" target="_blank" class="btn btn-outline-secondary codbene" href="reportes.php" role="button"><i class="fa fa-file-pdf-o" alt=“PDF” ></i> Imprimir</a>
                         </ol>
            </div>
            <div class="tab-content" id="nav-tabContent">

                    <div class="col-12 grid-margin">
                        <!--datos_generales-->
                        <div class="card">
                            <div class="card-body">
                                <form class="form-sample" id="registrarpropietario" name="registrarpropietario" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                                        
                                        <input type="hidden" id="id_usuario" name="id_usuario" value='1'>
                                         <input type="hidden" id="tipo_persona" name="tipo_persona" value='1'>
                                         <input type="hidden" id="hidpropietario" name="hidpropietario" value=''>
                                         <input type="hidden" id="hidcuenta_id_nacional" name="hidcuenta_id_nacional" value='0'>
                                         <input type="hidden" id="hidcuenta_id_internacional" name="hidcuenta_id_internacional" value='0'>
 
                                         <input type="hidden" id="hidcuenta_id_paypal" name="hidcuenta_id_paypal" value='0'>
                                         <input type="hidden" id="hidcuenta_id_zelle" name="hidcuenta_id_zelle" value='0'>
                                <!--Datos del propietario-->
                                <div class="card" id="Propietario">
                                    <div class="card-body">
                                        <div class="col text-center">
                                            <h5 class="card-title">Datos del Personales</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="col-sm-12 col-form-label">Código:</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="registroCodigo" name="registroCodigo" autofocus readonly="yes" value=''>
                                                </div>
                                            </div>
     
                                        </div>
                                       
                                    </div>
                                </div><br>

                                <!--datos bancarios-->
                                
                            </div>
                        </div>
                    
                </div>
                <from>

               
                    <div class="col-12 grid-margin">
                        <!--inmuebles-->
                        <div class="card">
                            <div class="card-body">
                                <!--tabla-->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class='fas fa-house-user'></i>&nbsp;
                                        INMUEBLES
                                    </div>

                                    <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Tipo</th>
                                                <th>Canon</th>
                                                <th>Gastos Fijos</th>
                                                <th>Gastos Especiales</th>
                                                <th>Estatus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td>22-0723-00 DORAL MEXICO</td>
                                                    <td>Apartamento</td>
                                                    <td>$320</td>
                                                    <td>$20</td>
                                                    <td>Posee</td>
                                                    <td>Activo</td>
                                                </tr>
                                                <tr>
                                                    <td>12-0001-00 TORRE CANAIMA</td>
                                                    <td>MEZZANINA NRO.2</td>
                                                    <td>$120</td>
                                                    <td>$30</td>
                                                    <td>No posee</td>
                                                    <td>Finiquitado</td>
                                                </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 grid-margin">
                        <!--inmuebles-->
                        <div class="card">
                            <div class="card-body">
                                <!--tabla-->
                                <div class="card mb-4">
                                    <div class="card-header">
                                         <i class='fas fa-coins'></i>&nbsp;
                                        LIQUIDACIONES
                                    </div>

                                    <div class="card-body">


                                       <div class="row">
                                            <div class="col-md-2">
                                                <label for="inputfecha" class="col-sm-12 col-form-label">Desde:</label>
                                                <div class="col-sm-12">
                                                    <input type="date" id="fec_desd" name="fec_desd" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="inputfecha" class="col-sm-12 col-form-label">Hasta:</label>
                                                <div class="col-sm-12">
                                                    <input type="date" id="fec_hast" name="fec_hast" class="form-control" value="">
                                                </div>
                     
                                            </div>
                                            <div class="col-md-2">
                                               <label for="inputfecha" class="col-sm-12 col-form-label">&nbsp; </label>
                                                <button type="submit" class="btn btn-primary ">Buscar</button>
                                            </div>
                                                
                                        </div><br>

                                        <div class="table-responsive">

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Referencia</th>
                                                        <th>Fecha de Emisión</th>
                                                        <th>Unidad</th>
                                                        <th>Liquidación</th>
                                                        <th>Estatus</th>
                                                        <th>Comprobante</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    
                                                    <tr>
                                                        <td>0098</td>
                                                        <td>14-may-2022</td>
                                                        <td>22-0723-00 DORAL MEXICO</td>
                                                        <td>$320</td>
                                                        <td>Pendiente</td>
                                                        <td></td>
                                                    </tr>
                                                   
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 grid-margin">
                        <!--edo_cuenta-->
                        <div class="card">
                            <div class="card-body">
                                <!--tabla-->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class='fas fa-file-invoice-dollar'></i>&nbsp;
                                        ESTADO DE CUENTA
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="inputfecha" class="col-sm-12 col-form-label">Desde:</label>
                                                <div class="col-sm-12">
                                                    <input type="date" id="fec_desd" name="fec_desd" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="inputfecha" class="col-sm-12 col-form-label">Hasta:</label>
                                                <div class="col-sm-12">
                                                    <input type="date" id="fec_hast" name="fec_hast" class="form-control" value="">
                                                </div>
                     
                                            </div>
                                            <div class="col-md-2">
                                               <label for="inputfecha" class="col-sm-12 col-form-label">&nbsp; </label>
                                                <button type="submit" class="btn btn-primary ">Buscar</button>
                                            </div>
                                                
                                        </div><br>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Fecha</th>
                                                        <th>Referencia</th>
                                                        <th>Concepto</th>
                                                        <th>Monto</th>
                                                        <th>Saldo</th>
                                                        <th>Comprobante</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>070058</td>
                                                        <td>3-jun-2022</td>
                                                        <td>Emisión de factura por servicios administrativos</td>
                                                        <td>Bs 320</td>
                                                        <td>Bs 20</td>
                                                        <td>factura</td>
                                                    </tr>
 
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



<?php 

include_once "app/vistas/comunes/modalmensajes.php";
include_once "app/vistas/comunes/modaleliminar.php";

?>

<script src="js/comunes/combos.js"></script>
<script src="js/comunes/funciones.js"></script>
<script src="js/alquileres/bitacora_beneficiario.js"></script>