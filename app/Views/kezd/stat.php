<div class="container mt-lg-5">
	<div class="row">
		<div class="col-12 text-center"><?= lang('Stat.statHomepage', [], $nyelv) ?></div>
	</div>
	<div class="row">
		<div class="col"><?= lang('Stat.alreadyEntered', [$belepettek], $nyelv) ?></div>
		<div class="col text-center"><?= lang('Stat.allPerson', [$mindenki], $nyelv) ?></div>
		<div class="col text-right"><?= lang('Stat.nonEntered', [$nembe], $nyelv) ?></div>
	</div>
	<div class="row">
		<div class="col-12 text-center mt-3 bg-primary"><?= lang('Stat.duplicatedEntry', [], $nyelv) ?></div>
	</div>
	<div class="row mt-0 bg-primary">
		<div class="col col-md-1">#</div>
		<div class="col"><?= lang('Stat.name', [], $nyelv) ?></div>
		<div class="col"><?= lang('Stat.repeat', [], $nyelv) ?></div>
		<div class="col"><?= lang('Stat.bornDate', [], $nyelv) ?></div>
		<div class="col"><?= lang('Stat.Prog', [], $nyelv) ?></div>
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
