
<link rel='stylesheet' type='text/css' href='style.css'>
<script type='text/javascript' src='jquery.js'></script>
<script type='text/javascript'>
	$(function() {
		var speed='400';//speed of the slideshow
		var duration='3000';//duration of the autoplaying slideshow
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
<div id='container' align="center">
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
							  					<a href='./Image/1.jpg'>
													<img src='./Thumb/1.jpg' title='helping others' class='image1' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/10.jpg'>
													<img src='./Thumb/10.jpg' title='helping others' class='image2' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/11.jpg'>
													<img src='./Thumb/11.jpg' title='helping others' class='image3' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/12.jpg'>
													<img src='./Thumb/12.jpg' title='helping others' class='image4' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/13.jpg'>
													<img src='./Thumb/13.jpg' title='helping others' class='image5' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/14.jpg'>
													<img src='./Thumb/14.jpg' title='helping others' class='image6' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/15.jpg'>
													<img src='./Thumb/15.jpg' title='helping others' class='image7' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/16.jpg'>
													<img src='./Thumb/16.jpg' title='helping others' class='image8' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/17.jpg'>
													<img src='./Thumb/17.jpg' title='helping others' class='image9' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/18.jpg'>
													<img src='./Thumb/18.jpg' title='helping others' class='image10' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/19.jpg'>
													<img src='./Thumb/19.jpg' title='helping others' class='image11' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/2.jpg'>
													<img src='./Thumb/2.jpg' title='helping others' class='image12' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/20.jpg'>
													<img src='./Thumb/20.jpg' title='helping others' class='image13' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/3.jpg'>
													<img src='./Thumb/3.jpg' title='helping others' class='image14' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/4.jpg'>
													<img src='./Thumb/4.jpg' title='helping others' class='image15' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/5.jpg'>
													<img src='./Thumb/5.jpg' title='helping others' class='image16' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/6.jpg'>
													<img src='./Thumb/6.jpg' title='helping others' class='image17' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/7.jpg'>
													<img src='./Thumb/7.jpg' title='helping others' class='image18' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/8.jpg'>
													<img src='./Thumb/8.jpg' title='helping others' class='image19' >
												</a>
											</li>
							  				<li>
							  					<a href='./Image/9.jpg'>
													<img src='./Thumb/9.jpg' title='helping others' class='image20' >
												</a>
											</li>
                  </ul>
                </div>
              </div>
            <div align=center valign=top style='font-size: 10px;color: #dadada;' id='dumdiv'>
        <a href='http://10.11.2.92/help' id='dum' style='font-size: 10px;color: #dadada;text-decoration:none;color: #dadada;'>Helping Hands</a></div>
        
            </div>
        
            
          </div>
				
