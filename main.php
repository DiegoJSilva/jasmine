<?php
/* main file modify by Diego de Jesus Silva */

  include_once("libJasReports.php");

  DB_connect($DB_host,$DB_login,$DB_pass);
  DB_select($DB_db);

  $top10Users=jas_getUserRankingsMonth(10);
  $top5Printers=jas_getPrinterRankingsMonth(5);
  $top5Servers=jas_getServerRankingsMonth(5);
  $month = array(
    '01'=>'January',
    '02'=>'February',
    '03'=>'march',
    '04'=>'April',
    '05'=>'May',
    '06'=>'June',
    '07'=>'July',
    '08'=>'August',
    '09'=>'September',
    '10'=>'October',
    '11'=>'November',
    '12'=>'December'
  );
  echo $month[date('m')];
?><!-- Begin Summary -->

<h2>Summary of the <?php echo $month[date('m')] ?></h2>
<h3>Users Top10 <?php echo $month[date('m')] ?></h3>
<?=($top10Users)?$top10Users:"<p>An error occured, please check the error messages.</p>"?>
<h3>Printers Top5 <?php echo $month[date('m')] ?></h3>
<?=($top5Printers)?$top5Printers:"<p>An error occured, please check the error messages.</p>"?>
<h3>Server <?php echo $month[date('m')] ?></h3>
<?=($top5Servers)?$top5Servers:"<p>An error occured, please check the error messages.</p>"?>
<!-- End Summary -->
