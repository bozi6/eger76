<!DOCTYPE html>
<html lang="hu">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/vendor/twbs/bootstrap/dist/css/bootstrap.css');?>">
<?php
if ($_SESSION['site_lang'] == 'arabic'){
  echo '<link rel="stylesheet" href="'.base_url('/css/bootstrap-rtl.css').'">';
}
?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/vendor/components/jqueryui/themes/base/jquery-ui.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/sajat.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/Font-Awesome/css/all.css');?>">
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo base_url('/vendor/mottie/tablesorter/dist/css/theme.metro-dark.min.css');?>">
    <link rel="stylesheet" media="print" type="text/css" href="<?php echo base_url('/css/media.css');?>">
<title>
<?= lang("kezdTitle"); ?>
</title>
</head>
<body class="bg-info text-light rtl">