<?php
$name=$_POST['name'];
$title=$_POST['title'];
$id_no=$_POST['id_no'];
$discription=addslashes(strip_tags($_POST['discription']));
$ip=getenv("REMOTE_ADDR");
$dat=mktime(0,0,0,date("m"),date("d"),date("Y"));
$date=getdate();
$time = "$date[hours]_$date[minutes]_$date[seconds]";
$fulldate = date('Y-m-d', $dat);
$line = $name."#".$title."#".$id_no."#".$discription."#".$ip."#".$fulldate;
$d = opendir('files') or die($php_errormsg);
$flist =array();
$i =0;
while (false !== ($f = readdir($d))) {
      $flist[$i]=$f;
      $i++;
}
closedir($d);
$lastsno = $flist[(count($flist)-1)];
$oldsno = substr($lastsno,4,-4);
$newsno =$oldsno+1;
copy('./files/sno_'.$oldsno.'.txt','./files/sno_'.$newsno.'.txt');
unlink('./files/sno_'.$oldsno.'.txt');
$newfile = fopen("./files/".($oldsno).".txt","w");
fputs($newfile,$line);
fclose($newfile);

?>
<script type="text/javascript">alert("Thanks for expressing your gratitude towards us!!! your message will be posted after scrutinizing it.");
window.location.replace('./gratitude.php');</script>
<?php

?>
