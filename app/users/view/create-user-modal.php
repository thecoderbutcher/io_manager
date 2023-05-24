<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agregar empleado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="in-apellidos" placeholder="Ingresar apellidos">
                        <label for="floatingInput">Apellidos</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="in-nombres" placeholder="Ingresar nombres">
                        <label for="floatingInput">Nombres</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="in-documento" placeholder="Ingresar documento">
                        <label for="floatingInput">Nº Documento</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="in-email" placeholder="Ingresar email">
                        <label for="floatingInput">ejemplo@mail.com</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="in-telefono" placeholder="Ingresar telefono">
                        <label for="floatingInput">Teléfono</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Seleccionar area</option>
                            <option value="1">Uno</option>
                            <option value="2">Dos</option>
                            <option value="3">Tres</option>
                        </select>
                        <label for="floatingInput">Area</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Seleccionar rol</option>
                            <option value="1">Uno</option>
                            <option value="2">Dos</option>
                            <option value="3">Tres</option>
                        </select>
                        <label for="floatingInput">Rol</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Comprendido</button>
            </div>
        </div>
    </div>
</div>