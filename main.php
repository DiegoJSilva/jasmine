<?php
/* main file modify by Diego de Jesus Silva */

  include_once("libJasReports.php");

  DB_connect($DB_host,$DB_login,$DB_pass);
  DB_select($DB_db);

  $top10Users=jas_getUserRankingsMonth(15);
  $top5Printers=jas_getPrinterRankings(5);
  $top5Servers=jas_getServerRankings(5)

?><!-- Begin Summary -->
<h2>Summary of the Month</h2>
<h3>Users Top10 Month</h3>
<?=($top10Users)?$top10Users:"<p>An error occured, please check the error messages.</p>"?>
<h3>Printers Top5 Month</h3>
<?=($top5Printers)?$top5Printers:"<p>An error occured, please check the error messages.</p>"?>
<h3>Servers Top5 Month</h3>
<?=($top5Servers)?$top5Servers:"<p>An error occured, please check the error messages.</p>"?>
<!-- End Summary -->
