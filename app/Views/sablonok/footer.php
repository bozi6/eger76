<div class="bg-info">
	<div class="d-print-none text-center mt-4"><small>
<!--			<?//= $okos;?></small></div> -->
	<div class="d-print-none p-4 text-right">
		<code class="text text-dark">Az oldal elkészült
			<strong>{elapsed_time}</strong> másodperc alatt.
			<br>CodeIgniter verzió: <strong><?= CodeIgniter\CodeIgniter::CI_VERSION ?></strong><br>
            Környezet: <strong> <?= ENVIRONMENT ?></strong></code>
	</div>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo base_url('/vendor/components/jquery/jquery.js'); ?>"></script>
<script src="<?php echo base_url('/vendor/components/jqueryui/jquery-ui.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/popper.js');?>"></script>
<script src="<?php echo base_url('/vendor/twbs/bootstrap/dist/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('/vendor/mottie/tablesorter/dist/js/jquery.tablesorter.js');?>"></script>
<script src="<?php echo base_url('/vendor/mottie/tablesorter/dist/js/jquery.tablesorter.widgets.js');?>"></script>
<script src="<?php echo base_url('assets/js/keres.js'); ?>"></script>
</body>
</html>