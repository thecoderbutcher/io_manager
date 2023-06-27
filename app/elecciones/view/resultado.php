
<table class="table">
    <thead>
        <h4 class=" mt-5">Resultados Gobernador</h4>
        <tr>
            <th scope="col">#Nro Lista</th>
            <th scope="col">Nombre</th>
            <th scope="col">Total Votos</th> 
        </tr>
    </thead>
    <tbody>
    <?php
        $gobs = $param['gobernador'];
        foreach ($gobs as $gob){
            echo "
                <tr>
                    <th scope='row'>$gob->id_lista</th>
                    <td>$gob->lema</td> 
                    <td>$gob->total_votos</td>
                </tr>
            ";
        } 
    ?>
    </tbody>
</table>

<table class="table">
    <thead>
        <h4 class=" mt-5">Resultados Diputado Provincial</h4>
        <tr>
            <th scope="col">#Nro Lista</th>
            <th scope="col">Nombre</th>
            <th scope="col">Total Votos</th> 
        </tr>
    </thead>
    <tbody>
    <?php
        $gobs = $param['diputado'];
        foreach ($gobs as $gob){
            echo "
                <tr>
                    <th scope='row'>$gob->id_lista</th>
                    <td>$gob->lema</td> 
                    <td>$gob->total_votos</td>
                </tr>
            ";
        } 
    ?>
    </tbody>
</table>
<table class="table">
    <thead>
        <h4 class=" mt-5">Resultados Intendente Municipal</h4>
        <tr>
            <th scope="col">#Nro Lista</th>
            <th scope="col">Nombre</th>
            <th scope="col">Total Votos</th> 
        </tr>
    </thead>
    <tbody>
    <?php
        $gobs = $param['intendente'];
        foreach ($gobs as $gob){
            echo "
                <tr>
                    <th scope='row'>$gob->id_lista</th>
                    <td>$gob->lema</td> 
                    <td>$gob->total_votos</td>
                </tr>
            ";
        } 
    ?>
    </tbody>
</table>

<table class="table">
    <thead>
        <h4 class=" mt-5">Resultados Concejal Municipal</h4>
        <tr>
            <th scope="col">#Nro Lista</th>
            <th scope="col">Nombre</th>
            <th scope="col">Total Votos</th> 
        </tr>
    </thead>
    <tbody>
    <?php
        $gobs = $param['concejal'];
        foreach ($gobs as $gob){
            echo "
                <tr>
                    <th scope='row'>$gob->id_lista</th>
                    <td>$gob->lema</td> 
                    <td>$gob->total_votos</td>
                </tr>
            ";
        } 
    ?>
    </tbody>
</table>

<table class="table mb-5">
    <thead>
        <h4 class=" mt-5">Resultados Contralor Municipal</h4>
        <tr>
            <th scope="col">#Nro Lista</th>
            <th scope="col">Nombre</th>
            <th scope="col">Total Votos</th> 
        </tr>
    </thead>
    <tbody>
    <?php
        $gobs = $param['contralor'];
        foreach ($gobs as $gob){
            echo "
                <tr>
                    <th scope='row'>$gob->id_lista</th>
                    <td>$gob->lema</td> 
                    <td>$gob->total_votos</td>
                </tr>
            ";
        } 
    ?>
    </tbody>
</table>
<!--
<select class="form-select mt-5" aria-label="Default select example" id="select-grafico" data-url="<?php echo URL_ROUTE ?>elecciones/obtenerDatos">
    <option selected disabled>Seleccionar Categoria</option>
    <option value="1">Gobernador</option>
    <option value="2">Diputado Provincial</option>
    <option value="3">Intendente Municipal</option>
    <option value="4">Concejal Municipal</option>
    <option value="5">Contralor Municipal</option>
</select>
<div>
    <canvas id="myChart"></canvas>
</div>
-->
