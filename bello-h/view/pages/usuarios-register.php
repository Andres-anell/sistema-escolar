<?php  include "../include/head.php"; 
  include "../include/navb.php"; ?>


<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Usuarios </h1>
           
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Usuario</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">Create a beautiful dashboard</div>

            </div>
            <div class="col-md-12">
              <div class="tile">
                <h3 class="tile-title">Acceso Usuario</h3>
                <div class="table-responsive">
                  <table class="table">
                    <thead class="table table-primary">
                      <tr>
                        <th>#</th>
                        <th>usuario</th>
                        <th>Correo electronico</th>
                        <th>Contraseña</th>
                        <th>Estado</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php   ?></td>
                        <td><?php   ?></td>
                        <td><?php   ?></td>
                        <td><?php   ?></td>
                        <td><?php   ?></td>
                        <td><input type="button" class="btn btn-info" value="Editar"></td>
                        <td><input type="button" class="btn btn-danger" value="Eliminar"></td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

        </div>
    </div>

</main>

<script src="../../assets/js/jquery-3.3.1.min.js"></script>
<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="../../assets/js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="../../assets/js/plugins/chart.js"></script>