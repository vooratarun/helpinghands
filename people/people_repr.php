<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gallery, free web template</title>
	<link href="people_style.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo-min.js"></script>
	<script type="text/javascript" src="js/jquery.localscroll-min.js"></script>
	<script type="text/javascript" src="js/init.js"></script>
</head>
<body>
<div id="templatemo_wrapper">
     <div id="templatemo_menu">
        <ul class="nav_menu">
            <li><a href="#p1">Puc-I</a></li>
            <li><a href="#p2">Puc-II</a></li>
            <li><a href="#e1">Engg-I</a></li>
            <li><a href="#e2">Engg-II</a></li>
            <li><a href="#e3">Engg-III</a></li>
            <li><a href="#e4">Engg-IV</a></li>
        </ul>
    </div>

<div id="templatemo_main">
	<div id="content">
       	<div id="home" class="section">
 	<center>
			<img src="./images/repr/heirarchy.png" style="width:800px;height:400px;margin-top:100px;"/>
		</center>
            <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider({
					directionNav: false,
                    controlNav:false,
					duration: 800
                });
            });
            </script>
       	</div>
       
        <div class="section" id="p1">
        <img src="./images/repr/p1.JPG" style="width:800px;height:400px;margin-top:100px;"/>
            <a href="#p1" class="home_btn">home</a>
            <a href="#e4" class="page_nav_btn previous">Previous</a>
            <a href="#p2" class="page_nav_btn next">Next</a>
        </div>
        <div class="section" id="p2">
        <img src="./images/repr/p2.JPG" style="width:800px;height:400px;margin-top:100px;"/>
            <a href="#p1" class="home_btn">home</a>
            <a href="#p1" class="page_nav_btn previous">Previous</a>
            <a href="#e1" class="page_nav_btn next">Next</a>
        </div>
       <div class="section" id="e1">
        <img src="./images/repr/e1.JPG" style="width:800px;height:400px;margin-top:100px;"/>
            <a href="#p1" class="home_btn">home</a>
            <a href="#p2" class="page_nav_btn previous">Previous</a>
            <a href="#e2" class="page_nav_btn next">Next</a>
        </div>
        <div class="section" id="e2">
        <img src="./images/repr/e2.JPG" style="width:800px;height:400px;margin-top:100px;"/>
            <a href="#p1" class="home_btn">home</a>
            <a href="#e1" class="page_nav_btn previous">Previous</a>
            <a href="#e3" class="page_nav_btn next">Next</a>
        </div>
        <div class="section" id="e3">
        <img src="./images/repr/e3.JPG" style="width:800px;height:400px;margin-top:100px;"/>
            <a href="#p1" class="home_btn">home</a>
            <a href="#e2" class="page_nav_btn previous">Previous</a>
            <a href="#e4" class="page_nav_btn next">Next</a>
        </div>
        <div class="section" id="e4">
        <img src="./images/repr/e4.JPG" style="width:800px;height:400px;margin-top:100px;"/>
            <a href="#p1" class="home_btn">home</a>
            <a href="#e3" class="page_nav_btn previous">Previous</a>
            <a href="#p1" class="page_nav_btn next">Next</a>
        </div>


</div>
</div>
</div>

</body>
</html>
