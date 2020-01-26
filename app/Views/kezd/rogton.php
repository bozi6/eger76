<?php 
$formdata = '';
$labeldata = array('class' => 'control-label m-0 font-weight-bold');
$inputdata = array('class' => 'form-control border-0 bg-info text-warning', 'readonly' => ''); ?>
<div class="bg-warning">
	<div class="col">Azonnali jegykiadás, a főnök kérésére.</div>
    <?php echo form_open('kezd/belepes', $formdata); ?>
    <?php echo form_hidden('sorsz', 'sorsz'); ?>
    <?php echo form_hidden('belepett', 'bel'); ?>
        <form>
            <div class="form-row ml-4">
                <div class="form-group col-md-4">
                    <?php echo form_label('Név ha van', 'label', $labeldata); ?>
                    <input type="text" name="nev" class="form-control" id="name"
				   placeholder="név/Ismeretlen Szereplő">
                </div>
            </div>
            <div class="form-row ml-4">
                <div class="form-group col-md-4">
                    <?php echo form_label('Hány karszalag kell', 'label', $labeldata); ?>
                    <input type="text" name="karsznum" class="form-control" id="karszalag"
				   placeholder="karszalag db./0">
                </div>
            </div>
            <div class="form-row ml-4">
                <div class="form-group col-md-4">
                    <?php echo form_label('Melyik bagázshoz tartozik', 'label', $labeldata); ?>
                    <input type="text" name="tarsulat" class="form-control" id="tarsulat"
				   placeholder="társulat neve./ZZJegyet izibe társulat.">
                </div>
            </div>
            	<div class="form-row ml-4">
		<div class="form-group col-md-4">
			<?= form_label(lang('Karszalag.karszMegj'), 'megjegy', $labeldata); ?>
			<input type="text" name="megjegy" class="form-control mt-2" id="megjegy"
				   placeholder="<?= lang('Karszalag.karszMegj'); ?>">
		</div>
	</div>
    	<div class="form-row ml-4">
		<div class="col-sm-offset-4 col-sm-4">
			<button type="submit" id="egybelep" class="btn btn-success" ><?= lang('Karszalag.karszBelep'); ?>
            </button>
		</div>
	</div>
   </form>
</div>
