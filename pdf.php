<?php
session_start();
$date = date('d-M-Y');
include("mpdf/mpdf.php");
$f = fopen("./hand/".$_SESSION['iid']."_".$date.".html","w");
$mpdf=new mPDF('','A4','','',15,15,20,20,5,5);
$mpdf->SetDisplayMode('fullpage');
$mpdf->useSubstitutions = true;
$mpdf->WriteHTML($_SESSION['html']);
$mpdf->Output($_SESSION['iid']."_".$date.".pdf","D");
fwrite($f,$_SESSION['html']);
fclose($f);
session_destroy();
?>
