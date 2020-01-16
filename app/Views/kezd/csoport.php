<form action="csopupdt" id="csopkeres" method="post">
  <div class="form-group">
    <select class="form-control" id="csoportok" name="csoportok">
      <option selected disabled><?= lang('Csoport.csopCsopvalaszt');?></option>
      <option disabled>----</option>
      <?php foreach($csoplist as $row){
  echo '<option id="'.$row->sorsz.'" value="'.$row->sorsz.'">';
  echo $row->cegnev;
  echo "</option>\n";
}
?>
    </select>
  </div>
  <div class="row">
  <div class="col-sm-4">
    <button type="submit" class="btn btn-primary btn-sm disabled" id="csupupd">
    <span class="fas fa-angle-right"><?= lang('Csoport.csopKivEnter'); ?></span>
    </button>
  </div>
  <div class="col-sm-4">
    <a href="<?php echo base_url('kezd/csopbel/'); ?>" class="btn btn-primary btn-sm disabled" id="csopgomb"><span class="fas fa-angle-double-right"><?=lang('Csoport.TeljBelep');?></span></a>
  </div>
  </div>
  <div class="row ml-3" id="szamok">
  </div>
  <div class="row mt-4 col-sm">
    <ul class="list-group pl-3 col-m-4" style="height:500px;display:flex;flex-direction: column;flex-wrap: wrap" id="benvan">
    </ul>
  </div>
</form>
