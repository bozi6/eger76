<div class="row">
    <div class="m-lg-5">
         Ez a kiaz oldal.
    </div>
    név megjegyzés mikor cég

        <table class="table table-bordered table-hover bg-light">
            <thead class="bg-primary">
                <tr>
                    <th scope="col">Sorsz</th>
                    <th scope="col">Név</th>
                    <th scope="col">Mikor</th>
                    <th scope="col">Cég</th>
                    <th scope="col">megjegyzés</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=1; foreach ($kik as $egyki): ?>
            <tr>
                <th scope="row">#<?= $i ?></th>
                <td><?= $egyki->nev ?></td>
                <td><?= $egyki->miko ?></td>
                <td><?= $egyki->ceg ?></td>
                <td><?= $egyki->megjegyzes ?></td>
                <? $i++;?>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>
    <?= $kik[0]->ceg ?>