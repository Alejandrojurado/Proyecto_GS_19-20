<?php
// ob_start();
// session_start();
include 'actions/config.php';
include 'actions/conexion.php';
require 'actions/controlDB.php';
include 'actions/carrito.php';
include 'template/cabecera.php';
?>



           <div class="container">
                <div class="row">
                     <div class="col-9 centro margen_top">
                          <form method="post" action="actions/capturar.php" >

                               <div class="form-row">
                                    <div class="form-group col-md-6">
                                         <label for="inputEmail4">Email</label>
                                         <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                         <label for="inputPassword4">Contraseña</label>
                                         <input type="password" class="form-control" name="password1" id="password1" placeholder="Password" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                         <label for="inputPassword4">Confirmacion Contraseña</label>
                                         <input type="password" class="form-control" name="password2" id="password2" placeholder="Password" required>
                                         <span id="noCoinciden"></span>
                                    </div>
                               </div>
                               <div class="form-group">
                                    <label for="inputAddress">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" >
                               </div>
                               <div class="form-group">
                                    <label for="inputAddress2">Apellidos</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellidos" >
                               </div>
                               <div class="form-group">
                                    <label for="inputAddress2">Dirección</label>
                                    <input type="text" class="form-control" id="address1" name="address1" placeholder="Apartment, studio, or floor">
                               </div>
                               <div class="form-group">
                                    <label for="inputAddress2">Numero de telefono</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="6441451451" >
                               </div>
                               <div class="form-group">
                                    <label for="inputAddress2">D.N.I</label>
                                    <input type="text" class="form-control" id="dni" name="dni" placeholder="00000000X" >
                               </div>
                               <div class="form-row">
                                    <div class="form-group col-md-6">
                                         <label for="inputCity">Ciudad</label>
                                         <input type="text" class="form-control" id="city" name="city" >
                                    </div>
                                    <div class="form-group col-md-4">
                                         <label for="inputZip">Provincia</label>
                                         <input type="text" class="form-control" id="stage" name="stage">
                                    </div>
                                    <div class="form-group col-md-2">
                                         <label for="inputZip">C.Postal</label>
                                         <input type="text" class="form-control" id="postalcode" name="postalcode">
                                    </div>
                               </div>
                               <span></span>
                               <button type="submit" class="btn btn-primary" name="reg_user">Sign in</button>
                          </form>
                     </div>
                </div>
           </div>
           </div>



     <?php
     include 'template/pie.php';
      ?>
