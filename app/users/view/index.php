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
				<th scope="col">ROL</th>
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
							<td>$user->area_id</td>
							<td>$user->rol_id</td>
						</tr> 
					";
				}
			?>
        </tbody>
    </table>
</div> 