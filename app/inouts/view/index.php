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
        <thead>
            <tr>
                <th scope="col">DNI</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">NOMBRE</th>
				<th scope="col">TELÉFONO</th> 
                <th scope="col">AREA</th>
                <th scope="col">ENTRADA</th>
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
							<td>$user->telefono</td> 
							<td>$user->area_id</td>
							<td>
								<a href=''><span class='material-icons' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Registrar entrada'>login</span></a>
								<a href=''><span class='material-icons' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Registrar salida'>logout</span></a>
							</td>
							<td><span class='material-icons' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Agregar observaciones'>post_add</span></td>
						</tr> 
					";
				}
			?>
        </tbody>
    </table>
</div> 