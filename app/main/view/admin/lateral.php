<div class="row mt-3">
    <div class="col-12">
        <p id="logo-title"><img src="<?php echo URL_ROUTE ?>/media/system/icons/logo.png" />PLATAFORMA UPRO</p>
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
            <a href="" class="active">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">home</span>Inicio

                    </div>
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">people_outline</span>Empleados
                    </div>

                </li>
            </a>
            <a href="<?php echo URL_ROUTE ?>inouts/index"">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">filter_none</span>Entradas - Salidas</div>
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">cloud</span>Backup</div> 
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">support_agent</span>Soporte</div> 
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">security</span>Seguridad</div> 
                </li>
            </a>
            <a href="">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto"><span class="material-icons">settings</span>Ajustes</div> 
                </li>
            </a>
        </ul>
    </div>
    <div class="col-12">
        <hr>
        <div class="d-grid ap-2   mx-auto">
            <a href="<?php echo URL_ROUTE ?>/auth/logout" type="button" class="btn btn-secondary btn-sm">
                <span class="material-icons">exit_to_app</span>
                <span>Logout</span>
            </a>
        </div>
    </div>
</div>