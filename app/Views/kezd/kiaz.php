
<div class="form-group col-md-12">
	<?php $arg = ['class' => 'd-print-none control-label m-0']; ?>
	<?php echo form_label(lang('Kiaz.kiazNev', [], $nyelv), 'eddig', $arg); ?>:
	<input type="text" name="nev" id="eddig" class="form-control d-print-none"
		   placeholder="<?= lang('Kiaz.kiazBelNevCsak', [], $nyelv); ?>">
</div>
<table class="table-dark table-striped table-sm" id="eddigtablazat">
	<thead>
	<tr class="d-print-table-row header">
		<th scope="row">#</th>
		<th scope="row"><?= lang('Kiaz.kiazBelNevCsak', [], $nyelv); ?></th>
		<th scope="row"><?= lang('Kiaz.kiazCsopNev', [], $nyelv); ?></th>
		<th style="width: 15%" scope="row" id="beleptd"><?= lang('Kiaz.kiazBelDat', [], $nyelv); ?></th>
		<th class="d-print-none" scope="row"><?= lang('Kiaz.kiazMegj', [], $nyelv); ?></th>
	</tr>
	</thead>
	<tbody id="eddigtbl">
	<?php
	foreach ($kik as $row) :?>
		<tr>
			<td><strong><?= $row['Id']; ?></strong></td>
			<td><?= $row['nev'] ?></td>
			<td><?= $row['ceg'] ?></td>
			<td><?= $row['miko'] ?></td>
			<td><?= $row['megjegyzes'] ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<div class="row">
	<div class="col-11" id="pager">
		<?= $pager->links('gr1', 'tanci_full'); ?>
	</div>

</div>

