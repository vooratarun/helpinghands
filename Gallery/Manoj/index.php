
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
				start_label: '<input type="button" value="Start" class="start">',
			    stop_label: '<input type="button" value="Stop" class="start"></center>',
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
                  <li> 
							  				<li>
							  					<a href='./Image/Chrysanthemum.jpg'>
													<img src='./Thumb/Chrysanthemum.jpg' title='helping others' class='image1' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/Desert.jpg'>
													<img src='./Thumb/Desert.jpg' title='helping others' class='image2' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/Hydrangeas.jpg'>
													<img src='./Thumb/Hydrangeas.jpg' title='helping others' class='image3' >
												</a>
											</li>
                  </ul>
                </div>
              </div>
            <div align=center valign=top style='font-size: 10px;color: #dadada;' id='dumdiv'>
        <a href='http://10.11.2.92/help' id='dum' style='font-size: 10px;color: #dadada;text-decoration:none;color: #dadada;'>Helping Hands</a></div>
        
            </div>
        
            
          </div>
				