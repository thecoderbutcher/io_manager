<div class="col-12 row mb-5"> 
    <div class="col-xs-12 col-sm-12 col-md-6 mb-3">
        <span class="material-icons filter">filter_list</span>
        <span class="material-icons">list</span>
        <span class="material-icons">apps</span>
        <span class="material-icons">sort</span>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="input-group"> 
            <input type="text" class="form-control buscar-empleado" id="" data-url="<?php echo URL_ROUTE?>users/search" placeholder="Buscar empleado">
            <div class="input-group-text"><span class="material-icons">search</span></div>
        </div>
    </div>
    
</div>
<div class="col-12" id="dashboard-principal">
    <table class="table table-striped">
        <thead class="text-center">
            <tr>
                <th scope="col">DNI</th>
                <th scope="col">EMPLEADO</th> 
				<!--<th scope="col">TELÉFONO</th>  -->
                <th scope="col">ACCION</th>
                <!--<th scope="col">OBSERVACIONES</th>-->
            </tr>
        </thead>
        <tbody id="users-tbody" data-registrador='<?php echo $_SESSION["userdoc"];?>' 
			<?php
				$users = $param['users']; 
				foreach ($users as $user){
					echo "
						<tr>
							<th scope='row'>$user->documento</th>
							<td>$user->apellido, $user->nombres</td>
							
                    ";
                    //<td class='text-center'>$user->telefono</td>  
                    //Data status 0 para cuando no se ha registrado entrada, != 0 para cuando se debe registrar salida, de este modo modificamos la tabla con el id status que se debe registrar al registrar una entrada
                    if($user->status == 0){
                        echo "<td class='text-center'><button class='io-actions btn btn-primary entrada' id='registrar-entrada' data-empleado='$user->documento' data-registrador='$_SESSION[userdoc]' data-url='".URL_ROUTE."Inouts/' data-action='registrarEntrada' data-status='0' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Registrar entrada'>Entrada</button></td>";
                    }
					else{
                        echo "<td class='text-center'><button class='io-actions btn btn-primary' id='registrar-salida' data-empleado='$user->documento' data-registrador='$_SESSION[userdoc]' data-url='".URL_ROUTE."Inouts/' data-action='registrarSalida' data-status='$user->status' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Registrar salida'>Salida</button></td>";
                    }		
					
                    /* echo "<td class='text-center'><span class='material-icons' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Agregar observaciones'>post_add</span></td>
						</tr> 
					";  */
                    echo "</tr>";
				}
			?>
        </tbody>
    </table>
</div> 