<div class="row mt-3">
    <div class="col-12">
        <h1 id="logo-title"><img src="<?php echo URL_ROUTE ?>/media/system/icons/logo.png" /></h1>
    </div>
    <div class="col-12 mt-2" id="lateral-header">
        <div class="btn-group" role="group"">
            <a href=""><span class=" material-icons">note_add</span></a>
            <a href=""><span class="material-icons">reorder</span></a>
            <a href=""><span class="material-icons">cloud_download</span></a>
            <a href=""><span class="material-icons">group_add</span></a>
        </div>
        <hr>
    </div>
    <div class="col-12">
        <ul class="list-group" id="lateral-action">
            <a href="<?php echo URL_ROUTE ?>main/index" class="btn-lateral-action active">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">home</span><span class="option-text"> Inicio</span>

                    </div>
                </li>
            </a>
            <a href="<?php echo URL_ROUTE ?>users/index" class="btn-lateral-action">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">people_outline</span><span class="option-text"> Empleados</span>
                    </div>
                </li>
            </a>
            <a href="<?php echo URL_ROUTE ?>inouts/index" class="btn-lateral-action">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">sync_alt</span><span class="option-text"> Entradas - Salidas</span></div>
                </li>
            </a>
            <!--<a href="<?php echo URL_ROUTE ?>elecciones/index">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">cloud</span><span class="option-text"> Elecciones</span></div> 
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">support_agent</span><span class="option-text"> Soporte</span></div> 
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">security</span><span class="option-text"> Seguridad</span></div> 
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">settings</span><span class="option-text"> Ajustes</span></div> 
                </li>
            </a>-->
        </ul>
    </div>
    <div class="col-12">
        <hr>
        <div class="d-grid ap-2 mx-auto">
            <a href="<?php echo URL_ROUTE ?>/auth/logout" type="button" class="btn btn-secondary btn-sm">
                <span class="material-icons">exit_to_app</span>
                <span class="option-text">Salir</span>
            </a>
        </div>
    </div>
</div>