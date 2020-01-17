<div class="form-group col-md-12">
	<?php $arg = ['class' => 'd-print-none control-label m-0']; ?>
	<?php echo form_label(lang('Kiaz.kiazNev', [], $nyelv), 'eddig', $arg); ?>:
	<input type="text" name="nev" id="eddig" class="form-control d-print-none"
		   placeholder="<?= lang('Kiaz.kiazBelNevCsak', [], $nyelv); ?>">
</div>
<table class="d-print-table table-md tablesorter" id="eddigtablazat">
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
	$i = 1;
	foreach ($kik->getResult() as $row) {
		echo '<tr class="d-print-table-row">';
		echo '<td><strong>' . $i . '.</strong></td>';
		echo '<td>' . $row->nev . '</td>';
		echo '<td>' . $row->ceg . '</td>';
		echo '<td>' . $row->miko . '</td>';
		echo '<td class="d-print-none">' . $row->megjegyzes . '</td>';
		echo '</tr>';
		$i++;
	}; ?>
	</tbody>
</table>
