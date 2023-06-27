<div class="col-12 mt-3 control-panel">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-gob-tab" data-bs-toggle="pill" data-bs-target="#pills-gob" type="button" role="tab">Cargar Gobernador</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-dip-tab" data-bs-toggle="pill" data-bs-target="#pills-dip" type="button" role="tab">Diputado Provincial</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-int-tab" data-bs-toggle="pill" data-bs-target="#pills-int" type="button" role="tab">Intendente Municipal</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-cons-tab" data-bs-toggle="pill" data-bs-target="#pills-cons" type="button" role="tab">Concejal Municipal</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-cont-tab" data-bs-toggle="pill" data-bs-target="#pills-cont" type="button" role="tab">Contralor Municipal</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-res-tab" data-bs-toggle="pill" data-bs-target="#pills-res" type="button" role="tab">Resultados</button>
        </li>
    </ul>
    <div class="tab-content mt-3" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-gob" role="tabpanel" aria-labelledby="pills-gob-tab"><?php require_once 'gobernador.php';?></div>
        <div class="tab-pane fade" id="pills-dip" role="tabpanel" aria-labelledby="pills-dip-tab"><?php require_once 'diputado.php';?></div>
        <div class="tab-pane fade" id="pills-int" role="tabpanel" aria-labelledby="pills-int-tab"><?php require_once 'intendente.php';?></div>
        <div class="tab-pane fade" id="pills-cons" role="tabpanel" aria-labelledby="pills-cons-tab"><?php require_once 'concejal.php';?></div>
        <div class="tab-pane fade" id="pills-cont" role="tabpanel" aria-labelledby="pills-cont-tab"><?php require_once 'contralor.php';?></div>
        <div class="tab-pane fade" id="pills-res" role="tabpanel" aria-labelledby="pills-res-tab"><?php require_once 'resultado.php';?></div>
    </div>
</div>