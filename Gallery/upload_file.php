<?php
session_start();
$gallery_name = $_SESSION['dir_name'];
$Image_number = $_SESSION['Image_no'];
copy('./js_effect/style.css', $gallery_name.'/style.css');
copy('./js_effect/jquery.js', $gallery_name.'/jquery.js');
copy('./js_effect/ad_next.png',$gallery_name.'/ad_next.png');
copy('./js_effect/ad_prev.png',$gallery_name.'/ad_prev.png');
copy('./js_effect/ad_scroll_back.png',$gallery_name.'/ad_scroll_back.png');
copy('./js_effect/ad_scroll_forward.png',$gallery_name.'/ad_scroll_forward.png');
copy('./js_effect/loader.gif',$gallery_name.'/loader.gif');
copy('./js_effect/log_in.gif',$gallery_name.'/log_in.gif');
copy('./js_effect/opa75.png',$gallery_name.'/opa75.png');
@chdir($gallery_name);
function createThumbs( $pathToImages, $pathToThumbs, $thumbWidth ) 
{
  // open the directory
  $dir = opendir( $pathToImages );

  // loop through it, looking for any/all JPG files:
  while (false !== ($fname = readdir( $dir ))) {
    // parse path for the extension
    $info = pathinfo($pathToImages . $fname);
    // continue only if this is a JPEG image
    if ( (strtolower($info['extension']) == 'jpg')||(strtolower($info['extension']) == 'png')||(strtolower($info['extension']) == 'gif') ) 
    {

      // load image and get image size
	  if(strtolower($info['extension']) == 'jpg')
	  	$img = imagecreatefromjpeg( "{$pathToImages}{$fname}" );
	  else if (strtolower($info['extension']) == 'png')
      	$img = imagecreatefrompng( "{$pathToImages}{$fname}" );
	  else if (strtolower($info['extension']) == 'gif')
	  	$img = imagecreatefromgif( "{$pathToImages}{$fname}" );
	  
      $width = imagesx( $img );
      $height = imagesy( $img );

      // calculate thumbnail size
      $new_width = $thumbWidth;
      $new_height = floor( $height * ( $thumbWidth / $width ) );

      // create a new tempopary image
      $tmp_img = imagecreatetruecolor( $new_width, $new_height );

      // copy and resize old image into new image 
      imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

      // save thumbnail into a file
      imagejpeg( $tmp_img, "{$pathToThumbs}{$fname}" );
    }
  }
  // close the directory
  closedir( $dir );
}

function createGallery( $pathToImages, $pathToThumbs ) 
{
	
$g_output = 
"
<link rel='stylesheet' type='text/css' href='style.css'>
<script type='text/javascript' src='jquery.js'></script>
<script type='text/javascript'>
	$(function() {
		var speed='400';//speed of the slideshow
		var duration='5000';//duration of the autoplaying slideshow
		var autostart=true;//auto start of the slide show
		var sds = document.getElementById('dum');
		if(sds == null)
		{
			alert('You are not allowed to remove the tag.');
		}
		var sdss = document.getElementById('dumdiv');
		if(sdss == null)
		{
			alert('You are not allowed to remove the tag.');
		}
		if(sds!=null)
		{
			var galleries = $('.gallery').adGallery({
			animation_speed: speed,
			display_next_and_prev: true,
			display_back_and_forward: true,
			slideshow: {
				enable: true,
				autostart: autostart,
				speed:duration,
				start_label: '<input type=\"button\" value=\"Start\" class=\"start\">',
			    stop_label: '<input type=\"button\" value=\"Stop\" class=\"start\"></center>',
			    stop_on_scroll: true,
			    countdown_prefix: '[',
			    countdown_sufix: ']'
				}
			});
			$('#switch-effect').change(
			  function() {
				galleries[0].settings.effect = $(this).val();
				return false;
			  }
			);
			$('#toggle-slideshow').click(
			  function() {
				galleries[0].slideshow.toggle();
				return false;
			  }
			);
			$('#toggle-description').click(
			  function() {
				if(!galleries[0].settings.description_wrapper) {
				  galleries[0].settings.description_wrapper = $('#descriptions');
				} else {
				  galleries[0].settings.description_wrapper = false;
				}
				return false;
			  }
			);
	}
	 function VerticalSlideAnimation(img_container, direction, desc) {
		var current_top = parseInt(img_container.css('top'), 10);
		if(direction == 'left') {
		  var old_image_top = '-'+ this.image_wrapper_height +'px';
		  img_container.css('top', this.image_wrapper_height +'px');
		} else {
		  var old_image_top = this.image_wrapper_height +'px';
		  img_container.css('top', '-'+ this.image_wrapper_height +'px');
		};
		if(desc) {
		  desc.css('bottom', '-'+ desc[0].offsetHeight +'px');
		  desc.animate({bottom: 0}, this.settings.animation_speed * 2);
		};
		if(this.current_description) {
		  this.current_description.animate({bottom: '-'+ this.current_description[0].offsetHeight +'px'}, this.settings.animation_speed * 2);
		};
		return {old_image: {top: old_image_top},
				new_image: {top: current_top}};
	  }
	
	  function HorizontalSlideAnimation(img_container, direction, desc) {
		var current_left = parseInt(img_container.css('left'), 10);
		if(direction == 'left') {
		  var old_image_left = '-'+ this.image_wrapper_width +'px';
		  img_container.css('left',this.image_wrapper_width +'px');
		} else {
		  var old_image_left = this.image_wrapper_width +'px';
		  img_container.css('left','-'+ this.image_wrapper_width +'px');
		};
		if(desc) {
		  desc.css('bottom', '-'+ desc[0].offsetHeight +'px');
		  desc.animate({bottom: 0}, this.settings.animation_speed * 2);
		};
		if(this.current_description) {
		  this.current_description.animate({bottom: '-'+ this.current_description[0].offsetHeight +'px'}, this.settings.animation_speed * 2);
		};
		return {old_image: {left: old_image_left},
				new_image: {left: current_left}};
	  }
	   function ResizeAnimation(img_container, direction, desc) {
		var image_width = img_container.width();
		var image_height = img_container.height();
		var current_left = parseInt(img_container.css('left'), 10);
		var current_top = parseInt(img_container.css('top'), 10);
		img_container.css({width: 0, height: 0, top: this.image_wrapper_height / 2, left: this.image_wrapper_width / 2});
		return {old_image: {width: 0,
							height: 0,
							top: this.image_wrapper_height / 2,
							left: this.image_wrapper_width / 2},
				new_image: {width: image_width,
							height: image_height,
							top: current_top,
							left: current_left}};
	  }
	
	  function FadeAnimation(img_container, direction, desc)
	   {
		img_container.css('opacity', 0);
		return {old_image: {opacity: 0},
				new_image: {opacity: 1}};
				}
 });
</script>
<div id='container' align='center'>
   <div id='gallery' class='gallery'>
       <p align='center'>Select any one of the effects and click the Start button:&nbsp;<select id='switch-effect'>
		  <option value='slide-hori'>Slide horizontal</option>
		  <option value='slide-vert'>Slide vertical</option>
		  <option value='resize'>Shrink/grow</option>
		  <option value='fade'>Fade</option>
		  </select><br><br>
		</p>
        <div class='ad-image-wrapper'>
        </div>
        <div class='ad-controls'>
        </div><br>
        <div class='ad-nav'>
          <div class='ad-thumbs'>
              <ul class='ad-thumb-list'>
                  <li> ";
    
                    $a = scandir("Image");
					$i=1;
                    foreach($a as $file)
                    {
                        if(($file===".")||($file===".."))
                             $g_output = $g_output;
                        else
                              $g_output .=  "
							  				<li>
							  					<a href='./Image/".$file."'>
													<img src='./Thumb/".$file."' title='helping others' class='image".$i++."' >
												</a>
											</li>";
                    }
                   
$g_output .= "
                  </ul>
                </div>
              </div>
            <div align=center valign=top style='font-size: 10px;color: #dadada;' id='dumdiv'>
        <a href='http://10.11.2.92/help' id='dum' style='font-size: 10px;color: #dadada;text-decoration:none;color: #dadada;'>Helping Hands</a></div>
        
            </div>
        
            
          </div>
				";
  $output = "<html>";
  $output .= "<head><title>Thumbnails</title></head>";
  $output .= "<body>";
  $output .= "<table cellspacing=\"0\" cellpadding=\"2\" width=\"500\">";
  $output .= "<tr>";

  // open the directory
  $dir = opendir( $pathToThumbs );

  $counter = 0;
  // loop through the directory
  while (false !== ($fname = readdir($dir)))
  {
    // strip the . and .. entries out
    if ($fname != '.' && $fname != '..') 
    {
      $output .= "<td valign=\"middle\" align=\"center\"><a href=\"{$pathToImages}{$fname}\">";
      $output .= "<img src=\"{$pathToThumbs}{$fname}\" border=\"0\" />";
      $output .= "</a></td>";

      $counter += 1;
      if ( $counter % 4 == 0 ) { $output .= "</tr><tr>"; }
    }
  }
  // close the directory
  closedir( $dir );

  $output .= "</tr>";
  $output .= "</table>";
  $output .= "</body>";
  $output .= "</html>";
  $findex = fopen("index.php", "w");
  fwrite($findex,$g_output);
  fclose($findex);
  // open the file
  $fhandle = fopen( "gallery.html", "w" );
  // write the contents of the $output variable to the file
  fwrite( $fhandle, $output ); 
  // close the file
  fclose( $fhandle );
}
echo "<center><table>";
$count=5;
mysql_connect("localhost","root","9014734454");
mysql_select_db("helpinghand");
for($i=0;$i<$Image_number;$i++)
{
	if ($_FILES["new$i"]["error"] > 0)
	  {
	 	$count=$count-1;
	  }
	else
	  {
		  if($_FILES["new$i"]["name"]=="")
		  {
			  echo "<tr><td></td></tr>";
		  }
		  else
		  {
			  echo "<tr><th colspan='2'><h3>".$_FILES["new$i"]["name"]."</h3></th>
						</tr><tr><td>Upload: </td><td>" . $_FILES["new$i"]["name"] . "</td></tr>";
			  echo "<tr><td>Type: </td><td>" . $_FILES["new$i"]["type"] . "</td></tr>";  
			  if($_FILES["new$i"]["size"]>=1024000)
			  {
				  echo "<tr><td>File Size is Greater than 1 MB</td></tr>";
			  }
			  else if (file_exists("Image/" . $_FILES["new$i"]["name"]))
			  {
				echo "<tr><td>".$_FILES["new$i"]["name"] . " already exists. </td></tr>";
			  }
			  else if($_FILES["new$i"]["size"]<=0)
			  {
				  echo "<tr><td>File Size is Too Low</td></tr>";
			  }
			  else
			  {
				  	$g_pic = $_FILES["new$i"]["name"];
					if($i===0)
						mysql_query("INSERT INTO gname(GName,Gpic) VALUES('".$gallery_name."','".$g_pic."')") or die(mysql_error());
					move_uploaded_file($_FILES["new$i"]["tmp_name"],"Image/" . $_FILES["new$i"]["name"]);
					echo "<tr><td>Size : </td><td>" . $_FILES["new$i"]["size"]/"1024"." KB </td></tr>";
			  		createThumbs("Image/","Thumb/",100);
			  		createGallery("Image/","Thumb/");
			  }
		  }
	  }
}
echo "<tr><td>Uploading Successfull See Gallery</td></tr></table></center>";
?> 
