<div class="bg-info">
	<div class="d-print-none text-center mt-4"><small>
			<?= $okos;?></small></div>
	<div class="d-print-none p-4 text-right bg-dark">
        <code class="footer row text-light">
            <div class="col">
                <p>Az oldal elkészült <strong>{elapsed_time}</strong> sec alatt.</p>
            </div>
            <div class="col">
                <p class="text-center">PHP verzió:<?= phpversion() ?></p>
            </div>
            <div class="col">
                <p class="text-right">CodeIgniter verzió: <strong><?= CodeIgniter\CodeIgniter::CI_VERSION ?></strong></p>
                <p>Környezet: <strong> <?= ENVIRONMENT ?></strong></p>
            </div>
        </code>
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