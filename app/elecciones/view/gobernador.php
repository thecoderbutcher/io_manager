<form method="post" onsubmit="return validarcampo()" action="<?php echo URL_ROUTE ?>elecciones/guardarGobernador" class="row justify-content-center mt-5 g-3">
    
    <div class="mb-3 col-11 row mb-5">
        <label for="csobres" class="col-2 col-form-label">Cant Sobres</label>
        <div class="col-2">
            <input type="number" class="form-control" id="csobres" name="csobres">
        </div>

        <label for="mesa" class="col-2 col-form-label">Mesa</label>
        <div class="col-2 align-content-start">
            <input type="number" class="form-control" id="mesa1" name="mesa">
        </div>

        <label for="circuito" class="col-2 col-form-label">Circuito</label>
        <div class="col-2">
            <input type="number" class="form-control" id="circuito1" name="circuito" disabled>
        </div>
    </div>

    <h5 class="col-11">UNIÓN POR SAN LUIS</h5>
    <div class="mb-3 col-11 row ">
        <label for="10" class="col-3 col-form-label">10 CELESTE UNIDAD</label>
        <div class="col-2">
            <input type="number" class="form-control" id="10" name="10">
        </div>
    </div>
    <div class="mb-3 col-11 row">
        <label for="16" class="col-3 col-form-label">16 SUBLEMA BLANCA, AZUL Y BLANCA</label>
        <div class="col-2">
            <input type="number" class="form-control" id="16" name="16">
        </div>
    </div>
    <div class="mb-3 col-11 row">
        <label for="27" class="col-3 col-form-label">27 MOVIMIENTO EVITA, TIERRA, TECHO Y TR</label>
        <div class="col-2">
            <input type="number" class="form-control" id="27" name="27">
        </div>
    </div>
    <div class="mb-3 col-11 row">
        <label for="48" class="col-3 col-form-label">48 MODELO PRODUCTIVO</label>
        <div class="col-2">
            <input type="number" class="form-control" id="48" name="48">
        </div>
    </div>
    <div class="mb-3 col-11 row">
        <label for="801" class="col-3 col-form-label">TOTAL VOTOS LEMAS 801</label>
        <div class="col-2">
            <input type="number" class="form-control" id="801" name="801">
        </div>
    </div>
    <hr class="col-11">

    <h5 class="col-11">CAMBIA SAN LUIS</h5>
    <div class="mb-3 col-11 row">
        <label for="71" class="col-3 col-form-label">71 ENCUENTRO MULTISECTORIAL</label>
        <div class="col-2">
            <input type="number" class="form-control" id="71" name="71">
        </div>
    </div>
    <div class="mb-3 col-11 row">
        <label for="73" class="col-3 col-form-label">73 AVANZAR</label>
        <div class="col-2">
            <input type="number" class="form-control" id="73" name="73">
        </div>
    </div> 
    <div class="mb-3 col-11 row">
        <label for="802" class="col-3 col-form-label">TOTAL VOTOS LEMAS 802</label>
        <div class="col-2">
            <input type="number" class="form-control" id="802" name="802">
        </div>
    </div>
    <hr class="col-11">

    <h5 class="col-11">FRENTE DE IZQUIERDA Y DE TRABAJAD</h5>
    <div class="mb-3 col-11 row">
        <label for="200" class="col-3 col-form-label">200 Frente de Izquierda y de Trabajadores-Unidad</label>
        <div class="col-2">
            <input type="number" class="form-control" id="200" name="200">
        </div>
    </div>
    <div class="mb-3 col-11 row">
        <label for="803" class="col-3 col-form-label">TOTAL VOTOS LEMAS 803</label>
        <div class="col-2">
            <input type="number" class="form-control" id="803" name="803">
        </div>
    </div>
    <hr class="col-11">

    <h5 class="col-11">MOVIMIENTO AL SOCIALISMO</h5>
    <div class="mb-3 col-11 row">
        <label for="201" class="col-3 col-form-label">201 Movimiento Al Socialismo</label>
        <div class="col-2">
            <input type="number" class="form-control" id="201" name="201">
        </div>
    </div>
    <div class="mb-3 col-11 row">
        <label for="804" class="col-3 col-form-label">TOTAL VOTOS LEMAS 804</label>
        <div class="col-2">
            <input type="number" class="form-control" id="804" name="804">
        </div>
    </div>
    <hr class="col-11">

    <div class="mb-3 col-11 row">
        <label for="tvalidos" class="col-3 col-form-label">TOTAL VOTOS VÁLIDOS</label>
        <div class="col-2">
            <input type="number" class="form-control" id="tvalidos" name="tvalidos">
        </div>
    </div>
    <div class="mb-3 col-11 row">
        <label for="vnulos" class="col-3 col-form-label">Votos Nulos</label>
        <div class="col-2">
            <input type="number" class="form-control" id="vnulos" name="vnulos">
        </div>
    </div>
    <div class="mb-3 col-11 row">
        <label for="vrecurridos" class="col-3 col-form-label">Votos Recurridos</label>
        <div class="col-2">
            <input type="number" class="form-control" id="vrecurridos" name="vrecurridos">
        </div>
    </div>
    <div class="mb-3 col-11 row">
        <label for="viimpugnada" class="col-3 col-form-label">Votos de Identidad Impugnada</label>
        <div class="col-2">
            <input type="number" class="form-control" id="viimpugnada" name="viimpugnada">
        </div>
    </div>
    <div class="mb-3 col-11 row">
        <label for="vblanco" class="col-3 col-form-label">Votos En Blanco</label>
        <div class="col-2">
            <input type="number" class="form-control" id="vblanco" name="vblanco">
        </div>
    </div>
    <div class="mb-5  mt-4 col-5 row">
        <button type="submit" id="botonsubmit" class="btn btn-primary" name="guardarGob">Guardar</button>
    </div>
</form>
