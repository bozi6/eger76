<div class="container mt-lg-5">
    <div class="row">
        <div class="col-12 text-center">Statisztikák:</div>
    </div>
    <div class="row">
        <div class="col">Eddig beléptek: <?= $belepettek ?> fő.</div>
        <div class="col text-center">Összes szereplő: <?= $mindenki ?> fő.</div>
        <div class="col text-right">Nem belépett: <?= $nembe ?> fő.</div>
    </div>
    <div class="row">
        <div class="col-12 text-center mt-3 bg-primary">Duplikált bejegyzések</div>
    </div>
    <div class="row mt-4 bg-primary">
        <div class="col col-md-1">#</div>
        <div class="col">Név</div>
        <div class="col">Ismétlődés</div>
        <div class="col">Születési dátum</div>
        <div class="col">Programrész</div>
    </div>
    <?php $i = 1; ?>
    <?php foreach ($dupla as $egy): ?>
        <div class="row bg-secondary">
            <div class="col col-md-1"><?= $i ?>;</div>
            <div class="col"><?= $egy->nev ?></div>
            <div class="col"><?= $egy->db ?></div>
            <div class="col"><?= $egy->szul_datum ?></div>
            <div class="col"><?= $egy->programresz ?></div>
        </div>
        <? $i++; ?>
    <?php endforeach; ?>
</div>