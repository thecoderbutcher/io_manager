<div class="col-12 row mb-5"> 
    <div class="col-6">
		<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span class="material-icons">person_add</span></button>
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
        <thead>
            <tr>
                <th scope="col">DNI</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">NOMBRE</th>
				<th scope="col">TELÉFONO</th>
				<th scope="col">EMAIL</th>
                <th scope="col">AREA</th>
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
							<td>$user->telefono</td>
							<td>$user->email</td>
							<td>$user->areas_nombre</td>
						</tr> 
					";
				}
                require_once APP_ROUTE . '/users/view/create-user-modal.php';
			?>
        </tbody>
    </table>
</div> 
