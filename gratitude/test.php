<?php
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
copy('sno_'.$oldsno.'.txt','sno_'.$newsno.'.txt');
unlink('sno_'.$oldsno.'.txt');
?>