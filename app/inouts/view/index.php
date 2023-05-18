<div class="col-12 row mb-5"> 
    <div class="col-6">
    <span class="material-icons">filter_list</span>
        <span class="material-icons">list</span>
        <span class="material-icons">apps</span>
        <span class="material-icons">sort</span>
    </div>
    <div class="col-6">
        <div class="input-group"> 
            <input type="text" class="form-control" id="buscar-empleado" placeholder="Buscar empleado">
            <div class="input-group-text"><span class="material-icons">search</span></div>
        </div>
    </div>
    
</div>
<div class="col-12" id="dashboard-principal">
    <table class="table table-striped">
        <thead class="text-center">
            <tr>
                <th scope="col">DNI</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">NOMBRE</th>
				<th scope="col">TELÉFONO</th> 
                <th scope="col">AREA</th>
                <th scope="col">ENTRADA/SALIDA</th>
                <th scope="col">OBSERVACIONES</th>
            </tr>
        </thead>
        <tbody>
			<?php
				$users = $param['users']; 
				foreach ($users as $user){
					echo "
						<tr>
							<th scope='row'>$user->documento</th>
							<td>$user->apellido</td>
							<td>$user->nombres</td>
							<td class='text-center'>$user->telefono</td> 
							<td>$user->areas_nombre</td>
							<td class='text-center'><button class='io-actions btn btn-primary' id='registrar-entrada' data-empleado='$user->documento' data-registrador='$_SESSION[userdoc]'data-url='".URL_ROUTE."Inouts/' data-action='registrarEntrada' data-status='0' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Registrar entrada'>Entrada <span class='material-icons'>login</span></button></td>
							<td class='text-center'><span class='material-icons' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Agregar observaciones'>post_add</span></td>
						</tr> 
					"; //Data status 0 para cuando no se ha registrado entrada, != 0 para cuando se debe registrar salida, de este modo modificamos la tabla con el id status que se debe registrar al registrar una entrada
				}
			?>
        </tbody>
    </table>
</div> 