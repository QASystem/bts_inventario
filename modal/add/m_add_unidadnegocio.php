<?php
if (isset($con)){?>
    <div class='modal fade' id='addunidadnegocio' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
      <div class='modal-dialog' role='document'>
        <div class='modal-content'>
          <div class='modal-header'>
                    <button type = 'button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    <h4 class='modal-title' id='myModalLabel'><i class='fa fa-edit'></i> Agregar Empresa</h4>
          </div>
          <div class='modal-body'>
                    <form class='form-horizontal' method='post' id='guardar_unidadnegocio' name='guardar_unidadnegocio'>
                        <div id = 'resultados_ajax' ></div>
                        </div>
                        <div class='modal-footer'>
                        <button type = 'button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
                        <button type = 'submit' class='btn btn-primary' id='guardar_datos'>Guardar datos</button>
                       </div>
                    </form>
        </div>
      </div>
    </div>
    <?php } ?>
