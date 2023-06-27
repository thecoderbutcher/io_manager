<div class="col-12 row mb-5"> 
    <div class="col-6">
		<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span class="material-icons">person_add</span></button>
        <span class="material-icons">filter_list</span>
        <span class="material-icons">list</span>
        <span class="material-icons">apps</span>
        <span class="material-icons">sort</span>
    </div>
    <div class="col-6">
        <div class="input-group"> 
            <input type="text" class="form-control buscar-empleado" id="" data-url="<?php echo URL_ROUTE?>users/search" placeholder="Buscar empleado">
            <div class="input-group-text"><span class="material-icons">search</span></div>
        </div>
    </div>
    
</div>
<div class="col-12" id="dashboard-principal">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">DNI</th>
                <th scope="col">APELLIDO y NOMBRES</th>
				<th scope="col" class='hidden'>TELÉFONO</th>
				<th scope="col" class='hidden'>EMAIL</th>
                <th scope="col" class='hidden'>AREA</th>
                <th scope="col">REGISTRAR</th>
                <th scope="col" class='hidden'>ACCIONES</th>
            </tr>
        </thead>
        <tbody id="users-tbody">
			<?php
                require_once APP_ROUTE . '/users/view/create-user-modal.php';
				$users = $param['users']; 
				foreach ($users as $user){
					echo "
						<tr>
							<th scope='row'>$user->documento</th>
							<td>$user->apellido, $user->nombres</td>
							<td class='hidden'>$user->telefono</td>
							<td class='hidden'>$user->email</td>
							<td class='hidden'>$user->areas_nombre</td>";
                    if($user->status == 0){
                        echo "<td class='text-center'><button class='io-actions btn btn-primary entrada' id='registrar-entrada' data-empleado='$user->documento' data-registrador='$_SESSION[userdoc]' data-url='".URL_ROUTE."Inouts/' data-action='registrarEntrada' data-status='0' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Registrar entrada'>Entrada</button></td>";
                    }
					else{
                        echo "<td class='text-center'><button class='io-actions btn btn-primary salida' id='registrar-salida' data-empleado='$user->documento' data-registrador='$_SESSION[userdoc]' data-url='".URL_ROUTE."Inouts/' data-action='registrarSalida' data-status='$user->status' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Registrar salida'>Salida</button></td>";
                    }		
					
                    echo "
                            <td class='text-center'>
                                <button class='material-icons' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Agregar observaciones'>post_add</button>
                                <button class='material-icons' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Agregar observaciones'>edit</button> 
                            </td>
					    </tr> 
					";      
				}
                
			?>
        </tbody>
    </table>
</div> 
