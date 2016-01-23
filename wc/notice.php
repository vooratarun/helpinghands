<?php
	echo "<script>alert('jaffa');</script>";
	$dat = $_POST["date"];
	echo $dat.".html"."<BR>";
	chdir("files");
	if(file_exists($dat.".html"))
		{
			unlink($dat.".txt");
			chdir("..");
			chdir("..");
			chdir("Note-");
			chdir("files");
			echo getcwd()."<BR>";
			$array = glob("*.html");
			$s_number=count($array)+1;
			if($s_number<10)
				$s_number="0".$s_number;
			echo $s_number."<BR>";
			chdir("..");
			chdir("..");
			echo getcwd()."<BR>";
			$input = "./wc/files/".$dat.".html";
			if(file_exists($input))
			{
				echo "Exits<BR>";
			}
			$output="./Note-/files/".$s_number."_Week_collection_of_".$dat."_".$dat.".html";
			copy($input,$output);
			if(file_exists($output))
			{
				echo "Success";
			}
			else
			{
				echo "FAIL";
			}
	}
	else
		echo "Please Submit Week Collection Details";
?>
